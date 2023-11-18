from flask import Flask, request, jsonify
import whisper

uploaded_file = "../../1.mp3"
if uploaded_file:
    print("file fetched to python script")
    model = whisper.load_model("base")
    result = model.transcribe(uploaded_file)
    transcribed_text = result["text"]

    with open("output.txt", 'w') as f:
        f.write(transcribed_text)
        print("done")
    # Return the transcribed text as a JSON response
    # return jsonify({'text': transcribed_text})
# else:
#     error = "No file was uploaded."
#     return jsonify({'error': error})


# if __name__ == '__main__':
#     app.run(debug=True)
