<?php
require 'vendor/autoload.php'; // Include the Composer autoloader

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Load Firebase service account credentials
$serviceAccount = ServiceAccount::fromJsonFile('path/to/your/serviceAccountKey.json');

// Initialize Firebase
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

// You can now access various Firebase services using $firebase

// ...

$bucket = $storage->getBucket('your-firebase-storage-bucket'); // Replace with your Firebase Storage bucket name
$localFilePath = 'path/to/your/local/file.jpg'; // Replace with the path to your local file
$storagePath = 'path/in/firebase/storage/file.jpg'; // Replace with the desired storage path

$bucket->upload(
    fopen($localFilePath, 'r'),
    [
        'name' => $storagePath,
        'predefinedAcl' => 'publicRead', // Set ACL permissions (optional)
    ]
);

echo "File uploaded successfully!";

?>

