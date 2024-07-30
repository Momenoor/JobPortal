from flask import Flask, request, jsonify
import os
import docx2txt
import PyPDF2
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = 'public/resumes'

def extract_text_from_pdf(file_path):
    try:
        text = ""
        with open(file_path, 'rb') as file:
            reader = PyPDF2.PdfReader(file)
            for page in reader.pages:
                text += page.extract_text()
        return text
    except Exception as e:
        print(f"Error reading PDF file: {e}")
        return ""

def extract_text_from_docx(file_path):
    try:
        return docx2txt.process(file_path)
    except Exception as e:
        print(f"Error reading DOCX file: {e}")
        return ""

def extract_text_from_txt(file_path):
    try:
        with open(file_path, 'r', encoding='utf-8') as file:
            return file.read()
    except Exception as e:
        print(f"Error reading TXT file: {e}")
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

@app.route('/api/matcher', methods=['POST'])
def matcher():
    data = request.get_json()
    job_description = data.get('job_description')
    resume_paths = data.get('resumes')

    if not resume_paths or not job_description:
        return jsonify({"error": "Please provide resumes and job description"}), 400

    resumes = []
    for resume_path in resume_paths:
            full_path = os.path.join(app.config['UPLOAD_FOLDER'], resume_path)
            text = extract_text(full_path)
            if text:
                resumes.append(text)
            else:
                return jsonify({"error": f"Failed to extract text from {resume_path}"}), 400

    # Vectorize job description and resumes
    vectorizer = TfidfVectorizer().fit_transform([job_description] + resumes)
    vectors = vectorizer.toarray()

    # Calculate cosine similarities
    job_vector = vectors[0]
    resume_vectors = vectors[1:]
    similarities = cosine_similarity([job_vector], resume_vectors)[0]

    # Get top 3 resumes and their similarity scores
    top_indices = similarities.argsort()[-5:][::-1]
    top_resumes = [resume_paths[i] for i in top_indices]
    similarity_scores = [round(similarities[i], 2) for i in top_indices]

    return jsonify({"message": "Top matching resumes", "top_resumes": top_resumes, "similarity_scores": similarity_scores})

if __name__ == '__main__':
    app.run(debug=True,port=5002)
