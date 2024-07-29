from flask import Flask, request, jsonify
import os
import docx2txt
import PyPDF2
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

app = Flask(__name__)
app.secret_key = 'supersecretkey'
app.config['RESUMES_FOLDER'] = 'public/resumes'
app.config['MAX_CONTENT_LENGTH'] = 16 * 1024 * 1024  # 16 MB max size limit

def extract_text_from_pdf(file_path):
    text = ""
    try:
        with open(file_path, 'rb') as file:
            reader = PyPDF2.PdfReader(file)
            for page in reader.pages:
                text += page.extract_text()
    except Exception as e:
        print(f"Error extracting text from PDF: {e}")
    return text

def extract_text_from_docx(file_path):
    try:
        return docx2txt.process(file_path)
    except Exception as e:
        print(f"Error extracting text from DOCX: {e}")
        return ""

def extract_text_from_txt(file_path):
    try:
        with open(file_path, 'r', encoding='utf-8') as file:
            return file.read()
    except Exception as e:
        print(f"Error extracting text from TXT: {e}")
        return ""

def extract_text(file_path):
    if file_path.endswith('.pdf'):
        return extract_text_from_pdf(file_path)
    elif file_path.endswith('.docx'):
        return extract_text_from_docx(file_path)
    elif file_path.endswith('.txt'):
        return extract_text_from_txt(file_path)
    else:
        return ""

@app.route("/")
def matchresume():
    return "Resume Matcher API"

@app.route('/api/matcher', methods=['POST'])
def matcher():
    resume_file_path = request.form.get('resume_file_path')
    folder_path = app.config['RESUMES_FOLDER']

    if not resume_file_path or not folder_path:
        return jsonify({"error": "Please provide both resume file path and folder path."}), 400

    if not os.path.isfile(resume_file_path):
        return jsonify({"error": "Provided resume file path is not a file."}), 400

    if not os.path.isdir(folder_path):
        return jsonify({"error": "Provided folder path is not a directory."}), 400

    if not allowed_file(resume_file_path):
        return jsonify({"error": "Invalid file type for resume file."}), 400

    # Extract text from the single resume file
    resume_text = extract_text(resume_file_path)

    # Read and extract text from all resumes in the specified folder
    folder_resumes = []
    for filename in os.listdir(folder_path):
        file_path = os.path.join(folder_path, filename)
        if allowed_file(file_path):
            folder_resumes.append((filename, extract_text(file_path)))

    if not folder_resumes:
        return jsonify({"error": "Failed to extract text from resumes in the provided folder."}), 400

    # Vectorize the single resume and the folder resumes
    documents = [resume_text] + [text for _, text in folder_resumes]
    vectorizer = TfidfVectorizer().fit_transform(documents)
    vectors = vectorizer.toarray()

    # Calculate cosine similarities
    resume_vector = vectors[0]
    folder_resume_vectors = vectors[1:]
    similarities = cosine_similarity([resume_vector], folder_resume_vectors)[0]

    # Get top matching resumes and their similarity scores
    top_indices = similarities.argsort()[-5:][::-1]  # Get top 5 matches
    top_resumes = [folder_resumes[i][0] for i in top_indices]
    similarity_scores = [round(similarities[i], 2) for i in top_indices]

    return jsonify({"message": "Top matching resumes:", "top_resumes": top_resumes, "similarity_scores": similarity_scores})

def allowed_file(filename):
    return '.' in filename and filename.rsplit('.', 1)[1].lower() in {'pdf', 'docx', 'txt'}

if __name__ == '__main__':
    app.run(debug=True,port=5002)
