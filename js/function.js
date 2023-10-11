const dropArea = document.getElementById('input-box');
const fileInput = document.getElementById('input-button');

dropArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropArea.classList.add('active');
});

dropArea.addEventListener('dragleave', () => {
    dropArea.classList.remove('active');
});

dropArea.addEventListener('drop', (e) => {
    e.preventDefault();
    dropArea.classList.remove('active');
    const files = e.dataTransfer.files;

    // Check if only one file was dropped
    if (files.length === 1) {
        const file = files[0];

        // Create FormData object and append the file to it
        const formData = new FormData();
        formData.append('uploadedFile', file);

        // Send the file to the PHP file using a fetch POST request
        fetch('upload.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    } else {
        alert('Please drop only one file.');
    }
});


fileInput.addEventListener('change', () => {
    const files = fileInput.files;
    handleFiles(files);
});

function handleFiles(files) {
    for (const file of files) {
        console.log('File Name:', file.name);
        console.log('File Type:', file.type);
        console.log('File Size:', file.size, 'bytes');
    }
}