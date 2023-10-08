import whisper

# process_file.py
import sys

# Check if the correct number of command-line arguments is provided
if len(sys.argv) != 2:
    print("Usage: python process_file.py <filename>")
    sys.exit(1)

# Get the filename from the command-line argument
filename = sys.argv[1]

try:
    # Open and process the file
    with open(filename, 'r') as file:
        content = file.read()
        print(f"Content of {filename}:\n{content}")
except FileNotFoundError:
    print(f"File '{filename}' not found.")
except Exception as e:
    print(f"An error occurred: {e}")




# whisper AI

model = whisper.load_model("base")
result = model.transcribe("1.mp3")
with open("output.txt",'w') as f:
    f.write(result["text"])
