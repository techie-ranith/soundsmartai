// Import the Firebase SDK
const firebase = require('firebase/app');
require('firebase/firestore');

// Initialize Firebase with your project's config
firebase.initializeApp({
    apiKey: 'YOUR_API_KEY',
    authDomain: 'YOUR_AUTH_DOMAIN',
    projectId: 'YOUR_PROJECT_ID'
});

// Create a Firestore instance
const db = firebase.firestore();

// Export the Firestore instance for use in other modules
module.exports = db;
