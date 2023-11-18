const admin = require('firebase-admin');

// Fetch the service account key JSON file contents
const serviceAccount = require('/path/to/serviceAccountKey.json');

// Initialize the Firebase Admin SDK
admin.initializeApp({
    credential: admin.credential.cert(serviceAccount),
    databaseURL: 'https://your-project-id.firebaseio.com'
});

// Get a reference to the database service
const db = admin.database();

// Export the database reference for use in other modules
module.exports = db;
