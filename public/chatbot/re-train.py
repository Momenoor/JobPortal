from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.linear_model import LogisticRegression
import pickle

# Example: Training a new model
vectorizer = TfidfVectorizer()
model = LogisticRegression()

# Dummy data for example
X_train = ["sample text", "another example"]
y_train = [0, 1]

X_train_transformed = vectorizer.fit_transform(X_train)
model.fit(X_train_transformed, y_train)

# Save the vectorizer and model
with open('public/chatbot/tfidf.pkl', 'wb') as file:
    pickle.dump(vectorizer, file)

with open('public/chatbot/clf.pkl', 'wb') as file:
    pickle.dump(model, file)
