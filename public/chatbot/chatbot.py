from flask import Flask, request, jsonify
import pickle
import logging
import numpy as np

app = Flask(__name__)

# Configure logging
logging.basicConfig(level=logging.INFO)

# Define model and vectorizer globally
model = None
vectorizer = None

# Load the model and vectorizer
try:
    with open('public/chatbot/tfidf.pkl', 'rb') as file:
        vectorizer = pickle.load(file)
    app.logger.info('Vectorizer loaded successfully.')
except Exception as e:
    app.logger.error(f"Error loading vectorizer: {e}")

try:
    with open('public/chatbot/clf.pkl', 'rb') as file:
        model = pickle.load(file)
    app.logger.info('Model loaded successfully.')
except Exception as e:
    app.logger.error(f"Error loading model: {e}")

@app.route('/api/chat', methods=['POST'])
def chat():
    try:
        app.logger.info('Received request at /api/chat')
        data = request.get_json()
        message = data.get('message', '')

        if message is None or not isinstance(message, str):
            raise ValueError("Invalid input: message is None or not a string")

        app.logger.info(f'Received message: {message}')

        # Check if model and vectorizer are loaded
        if model is None or vectorizer is None:
            raise ValueError("Model or vectorizer not loaded")

        # Convert the message to lower case
        message = message.lower()

        # Vectorize the input message
        message_vector = vectorizer.transform([message])

        # Predict the response using the model
        response = model.predict(message_vector)

        # Convert the response to a JSON serializable type
        response = response[0].item() if isinstance(response[0], np.generic) else response[0]

        app.logger.info(f'Response: {response}')

        return jsonify({'response': response})
    except ValueError as ve:
        app.logger.error(f"Value error: {ve}")
        return jsonify({'error': str(ve)}), 400
    except Exception as e:
        app.logger.error(f"Error processing chat request: {e}")
        return jsonify({'error': 'Internal server error'}), 500

if __name__ == '__main__':
    app.run(debug=True, host='127.0.0.1', port=5001)
