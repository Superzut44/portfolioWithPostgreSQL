import React from 'react';
import { Navbar, Container, Nav, NavDropdown } from 'react-bootstrap';
// import {
//     Link,
// } from 'react-router-dom';
import { useMediaQuery } from 'react-responsive'
    
export default function HomeNavbar() {
    const isPortrait = useMediaQuery({ query: '(orientation: portrait)' })
        
        return (
            <>
                <Navbar 
                    bg="ligth" 
                    className={`homenavbar ${!isPortrait ? "homenavbar-classdesktop" : "homenavbar-classmobile"}`} 
                    expand={`${isPortrait ? "xxl" : "sm"}`}
                    >
                    <Container>
                        <Navbar.Brand className="h3">Symfony-React</Navbar.Brand>
                        <Navbar.Toggle aria-controls="basic-navbar-nav" className="essai2"/>
                        <Navbar.Collapse id="basic-navbar-nav">
                        <Nav className="me-auto ">
                            <Nav.Link href="#home">Home</Nav.Link>
                            <Nav.Link href={"/project"}>Project</Nav.Link>
                            {/* <NavDropdown title="Dropdown" id="basic-nav-dropdown">
                            <NavDropdown.Item href="#action/3.1">Action</NavDropdown.Item>
                            <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
                            <NavDropdown.Item href="#action/3.3">Something</NavDropdown.Item>
                            <NavDropdown.Divider />
                            <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
                            </NavDropdown> */}
                        </Nav>
                        </Navbar.Collapse>
                    </Container>
                </Navbar>
                
            </>
        )
}

