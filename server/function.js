/*
document.addEventListener("DOMContentLoaded", () => {
    const dropZone = document.getElementById("input-box");

    dropZone.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropZone.classList.add("drag-over");
    });

    dropZone.addEventListener("dragleave", () => {
        dropZone.classList.remove("drag-over");
    });

    dropZone.addEventListener("drop", (e) => {
        e.preventDefault();
        dropZone.classList.remove("drag-over");

        const file = e.dataTransfer.files[0];
        if (file) {
            comsole.log("file loaded sucessfully")
            const allowedTypes = ["/mp3"];
            if (allowedTypes.includes(selectedFile.type)) {
                // File type is allowed, you can handle it here
                console.log("Selected file type is allowed:", selectedFile.name);
            } else {
                // File type is not allowed, you can inform the user
                alert("Please select a valid file type (jpg, jpeg, png, pdf).");
                // Clear the file input (optional)
                event.target.value = null;
            }
        }
        var box = document.getElementById("box");
        const newContent = `
        <div id="box" class="flex flex-col items-center justify-center">
            <div class="bg-center bg-no-repeat icon" style="background-image: url('assest/file_icon.png');"></div>
            <div class="filename">${file.name}</div>
            <div class="submit"><button id="submit-button" type="submit">Submit</button></div>
        </div>
        `;
        box.innerHTML = newContent;
    });

    // Handle file selection
    fileInput.addEventListener("change", () => {
        const selectedFile = fileInput.files[0];
        handleAudioFile(selectedFile);
    });

    function handleAudioFile(file) {
        if (!file) return;
        const audio = new Audio();
        audio.src = URL.createObjectURL(file);
        sendAudioToServer(file);
    }

    // Function to send audio to the server
    function sendAudioToServer(file) {
        const formData = new FormData();
        formData.append("audio", file);

        fetch("llm/main.py", {
            method: "POST",
            body: formData,
        })
        .then((response) => response.json())
        .then((transcribed_text) => {
            const transcribedText = transcribed_text // Response from the server
            const text = document.getElementById('text');
            text.innerHTML = transcribedText;   
        })
        .catch((error) => {
            console.error("Error:", error);
        });
    }
});*/





// file upload button

document.addEventListener("DOMContentLoaded", () => {
    const fileInput = document.getElementById("input-button");

    fileInput.addEventListener("change", () => {
        const audio = fileInput.files[0];

        if (audio) {
            console.log("File loaded successfully");

            const allowedExtensions = [".mp3"];
            const fileName = audio.name;
            const fileExtension = fileName.slice(((fileName.lastIndexOf(".") - 1) >>> 0) + 2);

            if (allowedExtensions.includes("." + fileExtension.toLowerCase())) {
                // File type is allowed, you can handle it here
                const box = document.getElementById("box");
                const newContent = `
                    <div id="box" class="flex flex-col items-center justify-center">
                        <div class="bg-center bg-no-repeat icon" style="background-image: url('assest/fileicon.png');"></div>
                        <div class="filename">${fileName}</div>
                        <div class="submit"><button id="submit-button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="button">Submit</button></div>
                    </div>
                `;
                box.innerHTML = newContent;

                const submitButton = document.getElementById("submit-button");
                submitButton.addEventListener("click", () => {
                    console.log("button clicked")
                    const formData = new FormData();
                    formData.append("audio", audio);
                    console.log("fetch api");
                    fetch("http://127.0.0.1:5000/audio", {
                        method: "POST",
                        body: formData,
                    })
                    .then((response) => response.json())
                    .then((transcribed_text) => {
                        const text = document.getElementById('text');
                        text.innerHTML = transcribed_text.text; // Response from the server
                    })
                    .catch((error) => {
                        console.error("Error:", error);
                    });
                });
            }
        }
    });
});
