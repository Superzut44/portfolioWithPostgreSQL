import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter } from "react-router-dom";
import Presentation from './components/Presentation';

ReactDOM.render(<BrowserRouter><Presentation /></BrowserRouter>, document.getElementById('rootPresentation'));