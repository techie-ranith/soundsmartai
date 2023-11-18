from flask import Flask, request, jsonify
from flask_cors import CORS, cross_origin
import whisper
import librosa
import numpy as np


app = Flask(__name__)
CORS(app)
CORS(app, resources={r"/*": {"origins": "*"}})
CORS(app, resources={r"/audio": {"origins": "http://localhost"}})


@app.route('/audio', methods=['POST'])

def upload_file():
    uploaded_file = request.files['audio']
    if uploaded_file:
        print("file fetched to python script")
        
        # Load the audio file as a numpy array
        audio, sr = librosa.load(uploaded_file, sr=None)

        model = whisper.load_model("base")
        result = model.transcribe(audio)
        transcribed_text = result["text"]

        with open("output.txt", 'w') as f:
            f.write(transcribed_text)
            print("done")
        # Return the transcribed text as a JSON response
        return jsonify({'text': transcribed_text})
    else:
        error = "No file was uploaded."
        return jsonify({'error': error})


if __name__ == '__main__':
    app.run(debug=True)
