  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDNcT7Fv9hPaC1VWHBuXJC0G8l-fZFl7RQ",
    authDomain: "soundsmartai-4cc31.firebaseapp.com",
    databaseURL: "https://soundsmartai-4cc31-default-rtdb.firebaseio.com",
    projectId: "soundsmartai-4cc31",
    storageBucket: "soundsmartai-4cc31.appspot.com",
    messagingSenderId: "833680099724",
    appId: "1:833680099724:web:8288689fb57c86e6feeea9",
    measurementId: "G-DKQ9E3NVH5"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
