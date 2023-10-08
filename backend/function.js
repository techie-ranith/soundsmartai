document.addEventListener("DOMContentLoaded", () => {
    const dropZone = document.getElementById("input-box");
    const fileInput = document.getElementById("input-box");

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
        handleAudioFile(file);
        var box = document.getElementById("input")
        const newContent = `
        <div id="box" class="flex flex-col items-center justify-center">
        <div class="bg-center bg-no-repeat icon" style="background-image: url('assest/file_icon.png');"></div>
        <div class="filename"></div>
        <div class="submit"><button type="submit">Submit</button></div>
        </div>
        `;
        box[0].innerHTML = newContent
        dropZone.innerHTML = `<div class="text-2xl font-semibold">Audio file selected: ${file.name}</div>`;
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
            if (duration <= 60) { // Restrict audio length to 60 seconds
                audioDurationDisplay.textContent = duration.toFixed(2);
                // Send the audio to the server via AJAX or another method
                sendAudioToServer(file);
            } else {
                alert("Audio duration exceeds 60 seconds.");
            }
        });
    }

    // Function to send audio to the server
    function sendAudioToServer(file) {
        // Assuming you have a PHP script to handle the server-side processing
        // You can use AJAX to send the audio data to the server-side PHP script.
        // Example using fetch:
        fetch("upload.php", {
            method: "POST",
            body: file,
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
