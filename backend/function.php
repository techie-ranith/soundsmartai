<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploadedFile'])) {
    $uploadDirectory = 'uploads/'; // Directory where you want to save the uploaded file
    $uploadedFile = $_FILES['uploadedFile'];
    $uploadPath = $uploadDirectory . basename($uploadedFile['name']);

    if (move_uploaded_file($uploadedFile['tmp_name'], $uploadPath)) {
        $response = ['message' => 'File uploaded successfully'];

        // Read the uploaded file into a variable
        $inputFile = file_get_contents($uploadPath);

        $inputFile = 'example.txt'; // Replace with the path to your input file
        $pythonScript = '../main.py'; // Path to your Python script
        
        // Construct the shell command to run the Python script with the input file as an argument
        $command = "python $pythonScript " . escapeshellarg($inputFile);
        
        // Execute the Python script
        $output = shell_exec($command);
        
        // Display the Python script's output
        echo "<pre>$output</pre>";
        // Close and delete the temporary file if needed
        unlink($uploadPath);
    }
}
?>
