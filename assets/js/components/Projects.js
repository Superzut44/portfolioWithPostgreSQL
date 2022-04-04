import React, { useState, useEffect } from "react";
// https://create-react-app.dev/docs/adding-images-fonts-and-files/
// https://pixabay.com/
import imgcard from '../../images/538x160_2.jpg';

// npm install react-bootstrap bootstrap@5.1.3
// composer install && composer update
import { } from 'react-bootstrap';

import { useMediaQuery } from 'react-responsive'

import { Card, Row, Col, Button } from 'react-bootstrap';

import axios from "axios";


// console.log(mobile); // /logo.84287d09.png

export default function Projects() {

    const isPortrait = useMediaQuery({ query: '(orientation: portrait)' })
    const [projects, setProjects] = useState([]);

    useEffect(() => {
        axios
        .get(`api/projects/test`)
        .then((resp) => {
            setProjects(resp.data);
        });
    }, []);
  
    return (
        <div className="projects">
            <div className={`projects-page ${!isPortrait ? "projects-page-classdesktop" : "projects-page-classmobile"}`}>
                {/* <img src={mobile} alt="digital world"/> */}
                {isPortrait ? 
                <><h1>Mes projets</h1><h2>réalisés</h2></> :
                <><h1>Mes projets réalisés</h1></>}
            </div>
            <div className="wrapper">
                    <div className="cards_wrap">
                    {projects.map((project, idx) => (
                        <div key={idx} className="card_item">
                            <div className="card_inner">
                                <img src={ imgcard } style={{ width: "10rem"}} alt="image"/>
                                <div className="role_name">{project.name}</div>
                                <div className="real_name">Chadwick Boseman</div>
                                <div className="film">{project.description}</div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
       
    )
}