import React, {Component} from 'react';
import { Routes, Route, Navigate } from "react-router-dom";
import Presentation from './components/Presentation';
import Projects from './components/Projects';

class Roads extends Component {
    render() {
        return(
            <Routes>
                <Route path="/presentation" element={<Presentation />} />
                <Route path="/projects" element={<Projects />} />
                <Route path="/" element={<Navigate replace to="/presentation" />} />
                {/* <Route path="/client/:id" element={<ClientInformations />} /> */}
            </Routes>
        )
    }
}

export default Roads;