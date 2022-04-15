import React from 'react';

import imageEmail from '../../images/email.png';

export default function AboutMe() {

    return (
        <>
            <section className='aboutme-firstsection'>
                <header>
                    <a href="https://github.com/Superzut44" target="_blank">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="Github" width="40" height="40"/>
                    </a>
                    <a href="https://www.linkedin.com/in/xavier-chavaudrey-297834221/" target="_blank">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original.svg" alt="Linkedin" width="40" height="40"/>
                    </a>
                    {/* <a href="https://github.com/Superzut44" target="_blank">
                        <img src={ imageEmail } alt="email" width="40" height="40"/>
                    </a> */}
                    
                </header>
                <article>
                    <h2>A propos</h2>
                    <div>
                        <p>Passionné par les technologies web et mobile, c’est en autodidacte que j’ai commencé à prendre goût au métier de développeur en commençant par apprendre le language C, HTML, CSS et Javascript. Puis à la Wild Code School pour apprendre PHP / Symfony et acquérir les méthodes de travail en équipe.</p>
                        <p>Organisé, créatif, réactif, aimant relever de nouveaux challenges, s'intégrant facilement dans une équipe, je vous propose mes compétences de développeur web. Ma réorientation professionnelle est un choix personnel d'approfondir mes connaissances. Les compétences acquises durant mon parcours professionnel seront un atout pour mon employeur.</p>
                    </div>
                </article>
                <article>
                    <h2>Formations</h2>
                    <div>
                        <h5>Développeur Web PHP/Symfony</h5>
                        <h6>Wild Code School à REIMS (51)</h6>
                        <p>Septembre 2021 à février 2022</p>
                        <p>HTML, CSS, Javascript, PHP, Symfony, Git, Github, MySQL, Composer et Twig</p>
                    </div>
                </article>
                <article>
                    <h2>Expériences</h2>
                    <div>
                        <h5>Développeur web PHP/Symfony Javascript/React</h5>
                        <h6>Gaea21 à Lancy, Suisse</h6>
                        <h7>Depuis février 2022, en stage pour me perfectionner en PHP / Symfony sur des projets, et apprendre Javascript / ReactJS</h7>
                        <p>Gaea 21 est une association à but non lucratif de droit suisse qui poursuit un but social idéal, à savoir la mise en œuvre du développement durable et de l’Agenda 21. C’est un vaste réseau de compétences et un groupe de réflexion qui introduit la dimension participative du public au cœur de son action. Gaea21, permet de créer des passerelles entre les entreprises privées, les collectivités publiques et la société civile. L’association se positionne essentiellement comme une interface et un facilitateur entre les différents acteurs du Développement Durable, sachant que l’association reste fondamentalement un acteur elle aussi.</p>
                        <h5>Développeur web PHP / Symfony</h5>
                        <h6>Wild Code School</h6>
                        <h7>Décembre 2021 à février 2022</h7>
                        <ul>
                            <li>Projet de création (du 1 décembre 2021 au 11 février 2022) d'un site pour un client, à l'école Wild Code School de Reims avec les langages HTML, CSS, PHP, Symfony, Javascript, Git/Github, Composer, Twig, SASS et MySql.</li>
                            <li>Projet (du 21 oct au 13 nov 2021) d'un site fictif de type jeu : escape game ( Unlock! Sherlock adventures ) à l'école Wild Code School de Reims avec les langages HTML, CSS, Javascript, Git/Github, PHP, Composer, Twig et MySql.</li>
                            <li>Projet (du 28 sept au 8 oct 2021) d'un site de type journal sur l'école Wild Code School de Reims avec HTML, CSS, Javascript, Git/Github.</li>
                        </ul>
                    </div>
                </article>

            </section>
        </>
    )

}