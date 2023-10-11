document.addEventListener("DOMContentLoaded", () => {
    const dropZone = document.getElementById("input-box");
    const fileInput = document.getElementById("input-button");

    // Handle file drop
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
        const file = fileInput.files[0];
        handleAudioFile(file);
    });

    // Function to handle audio file
    function handleAudioFile(file) {
        if (!file) return;
        const audio = new Audio();
        audio.src = URL.createObjectURL(file);

        // Check audio duration
        audio.addEventListener("loadedmetadata", () => {
            const duration = audio.duration;
            if (duration <= 1800) { // Restrict audio length to 30 mins
                audioDurationDisplay.textContent = duration.toFixed(2);

                // Listen for the submit button click event within the changed content
                const submitButton = document.getElementById("submit-button");
                submitButton.addEventListener("click", () => {
                    // Send the audio to the server via AJAX or another method
                    sendAudioToServer(file);
                });
            } else {
                alert("Audio duration exceeds 30 minutes.");
            }
        });
    }

    // Function to send audio to the server
    function sendAudioToServer(file) {
        
        var jsVariable = "<?php echo $phpVariable; ?>";
        fetch("db_connections/realtimedb_fb.js", {
            method: "POST",
            body: file,
            headers: {
                "sessionId": sessionId,
            },
        })
        .then((response) => response.text())
        .then((data) => {
            console.log(data); // Response from the server
        })
        .catch((error) => {
            console.error("Error:", error);
        });
    }
});
