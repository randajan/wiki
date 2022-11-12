
import fe, { be, info } from "@randajan/simple-app/fe";
import React from 'react';
import { createRoot } from 'react-dom/client';

import "./index.scss";

import App from './App/App.jsx';

import "./firebase.js";


createRoot(document.getElementById("root")).render(<App />);

