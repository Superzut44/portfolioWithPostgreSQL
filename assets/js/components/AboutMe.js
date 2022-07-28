import React from 'react';

import imageEmail from '../../images/email.png';

export default function AboutMe() {

    return (
        <>
            <section className='aboutme-section'>
                <header>
                    <a href="https://github.com/Superzut44" target="_blank">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub" width="60" height="60"/>
                    </a>
                    <a href="https://www.linkedin.com/in/xavier-chavaudrey-297834221/" target="_blank">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original.svg" alt="Linkedin" width="60" height="60"/>
                    </a>
                    {/* <a href="https://github.com/Superzut44" target="_blank">
                        <img src={ imageEmail } alt="email" width="40" height="40"/>
                    </a> */}
                </header>
                <article>
                    <h2>A propos</h2>
                    <div>
                        <p>Passionné par les technologies web, c’est en autodidacte que j’ai commencé à prendre goût au métier
                            de développeur en commençant par apprendre les langages C, HTML, CSS puis Javascript.
                        </p>
                        <p>Ensuite en intégrant la Wild Code School
                            pour approfondir mes connaissances et apprendre un nouveau langage PHP avec un de ses frameworks Symfony,
                            mais également pour acquérir les méthodes agiles de travail en équipe comme Scrum.
                        </p>
                        <p>Organisé, créatif, réactif, aimant relever de nouveaux challenges, s'intégrant facilement dans une équipe,
                            je vous propose mes compétences de développeur web.
                        </p>
                        <p>Ma réorientation professionnelle est un choix personnel
                            d'approfondir mes connaissances. Les compétences acquises durant mon parcours professionnel
                            seront un atout pour mon employeur.
                        </p>
                    </div>
                </article>
                <article>
                    <h2>Formations</h2>
                    <div>
                        <h5>Langage Java</h5>
                        <h6>Autodidacte avec les cours de la Wild Code School et d'OpenClassrooms</h6>
                        <p>depuis juillet 2022 et en cours</p>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg" alt="Java" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Java</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://integraconsultores.es/wp-content/uploads/2018/07/Curso-de-Java-EE.png" alt="Java EE" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Java EE</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://programadoresbrasil.com.br/wp-content/uploads/2021/04/python-ide-pydev.png" alt="Eclipse" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Eclipse</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tomcat/tomcat-original-wordmark.svg" alt="Apache Tomcat" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Apache Tomcat</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://editorconfig.org/logos/maven.png" alt="Apache Maven" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Apache Maven</span>
                        </a>
                    </div>
                    <div>
                        <h5>Langage TypeScript et le framework Angular </h5>
                        <h6>Autodidacte avec les cours de la Wild Code School et d'OpenClassrooms</h6>
                        <p>depuis mai 2022 et en cours</p>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">TypeScript</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg" alt="Angular" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Angular</span>
                        </a>
                    </div>
                    <div>
                        <h5>Library React, puis intégration de celle-ci au framework Symfony</h5>
                        <h6>Gaea21 à Lancy, Suisse</h6>
                        <h6>Formation au début du stage puis mise en application sur leur site</h6>
                        <p>de février à mars 2022</p>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original-wordmark.svg" alt="React" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">React</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/symfony/symfony-original-wordmark.svg" alt="Symfony" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Symfony</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg" alt="GitLab" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">GitLab</span>
                        </a>
                    </div>
                    <div>
                        <h5>Formation "Développeur web et web mobile" &nbsp;PHP/Symfony</h5>
                        <h6>Wild Code School à REIMS (51)</h6>
                        <p>de septembre 2021 à février 2022</p>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg" alt="Linux" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Linux</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original-wordmark.svg" alt="Git" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Git</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">GitHub</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">PHP</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/symfony/symfony-original-wordmark.svg" alt="Symfony" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Symfony</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" alt="Composer" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Composer</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://www.drupal.org/files/project-images/logo_184.png" alt="Twig" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Twig</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://azure.microsoft.com/en-us/patterns/styles/glyphs-icons/azure-sql-database.svg" alt="SQL" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">SQL</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" alt="MySQL" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">MySQL</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/doctrine/doctrine-original-wordmark.svg" alt="Doctrine" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Doctrine</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="Javascript" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Javascript</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg" alt="Sass" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Sass</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original-wordmark.svg" alt="Bootstrap" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Bootstrap</span>
                        </a>
                    </div>
                    <div>
                        <h5>Langages C, HTML, CSS puis Javascript</h5>
                        <h6>Autodidacte avec les livres Edition ENI, et avec les cours en ligne OpenClassrooms</h6>
                        <p>de mai 2019 à février 2021</p>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg" alt="C" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">C</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" alt="HTML" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">HTML</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" alt="CSS" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">CSS</span>
                        </a>
                        <a className="aboutme_logo_image_a">
                            <img className="aboutme_logo_image" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="Javascript" width="50" height="50"/>
                            <span className="aboutme_logo_image_span">Javascript</span>
                        </a>
                    </div>
                </article>
                <article>
                    <h2>Expériences</h2>
                    <div>
                        <h5>Développeur web PHP/Symfony Javascript/React</h5>
                        <h6>Gaea21 à Lancy, Suisse</h6>
                        <h6>Depuis février 2022, en stage pour me perfectionner en PHP / Symfony sur des projets, et apprendre Javascript / ReactJS</h6>
                        <p>Gaea 21 est une association à but non lucratif de droit suisse qui poursuit un but social idéal, 
                            à savoir la mise en œuvre du développement durable et de l’Agenda 21. C’est un vaste réseau de compétences 
                            et un groupe de réflexion qui introduit la dimension participative du public au cœur de son action. Gaea21, 
                            permet de créer des passerelles entre les entreprises privées, les collectivités publiques et la société civile. 
                            L’association se positionne essentiellement comme une interface et un facilitateur entre les différents acteurs du Développement Durable, 
                            sachant que l’association reste fondamentalement un acteur elle aussi.</p>

                        <h5>Développeur web PHP/Symfony</h5>
                        <h6>Wild Code School</h6>
                        <h6>Décembre 2021 à février 2022</h6>
                        <p>La Wild Code School est une école innovante et un réseau européen de campus qui forment aux métiers tech des spécialistes 
                            adaptables. C'est une marque de la société Innov'Educ. Après s'être historiquement développée sur le métier de 
                            développeur web (PHP, Javascript, Java/Android), l'école propose aujourd'hui des formations autour de six grands domaines: 
                            le développement informatique, la data, la cybersécurité, le product management, 
                            l'UX/UI Design et le business développement 2.0. Elle forme essentiellement des adultes en reconversion professionnelle 
                            sur des formats courts de trois à cinq mois.</p>
                        <ul>
                            <li>
                                <a className="alinkProjects" href="https://marcheconclu.chavaudreyxavier.fr" target="_blank">
                                Projet de création (du  1 décembre 2021 au 11 février 2022) d'un site Marché Conclu pour une cliente, en version mobile, réalisé en équipe à l'école Wild Code School de Reims.
                                </a>
                            </li>
                            <li>
                                <a className="alinkProjects" href="https://fymi.chavaudreyxavier.fr" target="_blank">
                                Hackaton sur le thème de la musique, réalisé en équipe et en version mobile (le 25 et 26 novembre 2021).
                                </a>
                            </li>
                            <li>
                                <a className="alinkProjects" href="https://unlock.labetowiez.fr" target="_blank">
                                Projet de création (du  21 oct au 13 nov 2021) d'un site fictif de type jeu : escape game ( Unlock! Sherlock adventures ), réalisé en équipe à l'école Wild Code School de Reims.
                                </a>
                            </li>
                            <li>
                                <a className="alinkProjects" href="https://wildpost.chavaudreyxavier.fr/" target="_blank">
                                Création en équipe (du  28 sept au 8 oct 2021) d'un site fictif de type journal sur l'école Wild Code School de Reims.
                                </a>
                            </li>
                            <li><a className="alinkProjects" href="/projects" target="_blank">Lien vers la liste de tous mes projets réalisés</a></li>
                        </ul>
                    </div>
                </article>
            </section>
        </>
    )
}