import React, { useState } from "react";
// https://create-react-app.dev/docs/adding-images-fonts-and-files/
// https://pixabay.com/
import imgcard from '../../images/538x160_2.jpg';

// npm install react-bootstrap bootstrap@5.1.3
// composer install && composer update
import { } from 'react-bootstrap';

import { useMediaQuery } from 'react-responsive'

import { Card, Button } from 'react-bootstrap';

    
// console.log(mobile); // /logo.84287d09.png

export default function Projects() {

    const isPortrait = useMediaQuery({ query: '(orientation: portrait)' })
  
    return (
        <div className="projects">
            <div className={`projects-page ${!isPortrait ? "projects-classdesktop" : "projects-classmobile"}`}>
                {/* <img src={mobile} alt="digital world"/> */}
                {isPortrait ? 
                <><h1>Mes projets</h1><h2>réalisés</h2></> :
                <><h1>Mes projets réalisés</h1></>}
            </div>
            <ul className="projects-cards">
                <li>
                    <Card className="projects-card" style={{ width: '20rem' }}>
                        <Card.Img variant="top" src={ imgcard } />
                        <Card.Body>
                            <Card.Title>Card Title</Card.Title>
                            <Card.Text>
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                            </Card.Text>
                            <Button variant="primary">Lien</Button>
                            <a href="https://www.cprogramming.com/" target="_blank">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="c" width="30" height="30"/>
                            </a>
                        </Card.Body>
                        <Card.Footer>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="js" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="php" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original-wordmark.svg" alt="bootstrap" width="30" height="30" />
                        </Card.Footer>
                        <Card.Footer>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="js" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="php" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original-wordmark.svg" alt="bootstrap" width="30" height="30" />
                        </Card.Footer>
                    </Card>
                </li>
                <li>
                    <Card className="projects-card" style={{ width: '20rem' }}>
                        <Card.Img variant="top" src={ imgcard } />
                        <Card.Body>
                            <Card.Title>Card Title</Card.Title>
                            <Card.Text>
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                            </Card.Text>
                            <Button variant="primary">Lien</Button>
                            <a href="https://www.cprogramming.com/" target="_blank">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="c" width="30" height="30"/>
                            </a>
                        </Card.Body>
                        <Card.Footer>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="c" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="c" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original-wordmark.svg" alt="c" width="30" height="30" />
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="c" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="c" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original-wordmark.svg" alt="c" width="30" height="30" />
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="c" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="c" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original-wordmark.svg" alt="c" width="30" height="30" />
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="c" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="c" width="30" height="30"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original-wordmark.svg" alt="c" width="30" height="30" />
                        </Card.Footer>
                    </Card>
                </li>
            </ul>
        </div>
    )

}