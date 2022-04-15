import React from 'react';
import { Navbar, Container, Nav, NavDropdown } from 'react-bootstrap';
// import { Link } from 'react-router-dom';
import { useMediaQuery } from 'react-responsive'
    
export default function HomeNavbar() {
    const isPortrait = useMediaQuery({ query: '(orientation: portrait)' })
        
    return (
        <>
            <Navbar
                fixed="top"
                bg="ligth"
                className={`homenavbar ${!isPortrait ? "homenavbar-classdesktop" : "homenavbar-classmobile"}`} 
                expand={`${isPortrait ? "xxl" : "sm"}`}
                >
                <Container>
                    <Navbar.Brand className="h3">Symfony-React</Navbar.Brand>
                    <Navbar.Toggle aria-controls="basic-navbar-nav" className="essai2"/>
                    <Navbar.Collapse id="basic-navbar-nav">
                    <Nav className="me-auto ">
                        <Nav.Link href={"/presentation"}>Accueil</Nav.Link>
                        <Nav.Link href={"/aboutme"}><>A propos</></Nav.Link>
                        <Nav.Link href={"/projects"}>Projets</Nav.Link>
                    </Nav>
                    </Navbar.Collapse>
                </Container>
            </Navbar>
        </>
    )
}