// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCEXoTyjInHmrK0Vq6AUnRYt3FhZ8CBu60",
  authDomain: "itcan-cz.firebaseapp.com",
  projectId: "itcan-cz",
  storageBucket: "itcan-cz.appspot.com",
  messagingSenderId: "830068551007",
  appId: "1:830068551007:web:66b451a5e1124d12895aea",
  measurementId: "G-M7CZKVHK90"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

console.log(Object.getOwnPropertyDescriptors(app));