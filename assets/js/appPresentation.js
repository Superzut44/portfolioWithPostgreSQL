import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter } from "react-router-dom";
import HomeNavbar from './components/HomeNavbar';
import Roads from './Roads';

ReactDOM.render(<BrowserRouter><HomeNavbar /><Roads /></BrowserRouter>, document.getElementById('rootPresentation'));