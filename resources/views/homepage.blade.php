<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <!-- vite files css js-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="header-container">
            <div class="header-logo">
                <a href="#">
                    <h1>Anton COVU</h1>
                </a>
            </div>
            <div class="header-nav">
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#about-me">About</a></li>
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main id="home">
        <div class="main-container">
            <div class="frontend-developer">
                <h1>Frontend Developer</h1>
            </div>
            <div class="digital-experiences">
                <h2>Creating Digital<br>Experiences That<br>Drive Results</h2>
            </div>
            <div class="about-me">
                <p>I design and develop applications with a focus on intuitive<br> user experiences, clean code, and modern technologies.</p>
            </div>
            <div class="cta-buttons">
                <a class="main-get-in-touch" href="#">Get in Touch</a>
                <a class="main-view-projects" href="#">View Projects</a>
            </div>
            <div class="main-social-links">
                <ul>
                    <!--li with github/linkedin/mail logo-->
                    <li class="github"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-5 h-5" data-lov-id="src/components/Hero.tsx:75:14" data-lov-name="Github" data-component-path="src/components/Hero.tsx" data-component-line="75" data-component-file="Hero.tsx" data-component-name="Github" data-component-content="%7B%22className%22%3A%22w-5%20h-5%22%7D"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg></a></li>
                    <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-5 h-5" data-lov-id="src/components/Hero.tsx:84:14" data-lov-name="Linkedin" data-component-path="src/components/Hero.tsx" data-component-line="84" data-component-file="Hero.tsx" data-component-name="Linkedin" data-component-content="%7B%22className%22%3A%22w-5%20h-5%22%7D"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect width="4" height="12" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle></svg></a></li>
                    <li class="mail"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5" data-lov-id="src/components/Hero.tsx:91:14" data-lov-name="Mail" data-component-path="src/components/Hero.tsx" data-component-line="91" data-component-file="Hero.tsx" data-component-name="Mail" data-component-content="%7B%22className%22%3A%22w-5%20h-5%22%7D"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></a></li>
                </ul>
            </div>
            <div class="main-scroll-down">
                <!-- img to scroll down -->
                <a class="animate-bounce" href="#projects">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down w-6 h-6 text-muted-foreground" data-lov-id="src/components/Hero.tsx:98:12" data-lov-name="ArrowDown" data-component-path="src/components/Hero.tsx" data-component-line="98" data-component-file="Hero.tsx" data-component-name="ArrowDown" data-component-content="%7B%22className%22%3A%22w-6%20h-6%20text-muted-foreground%22%7D"><path d="M12 5v14"></path><path d="m19 12-7 7-7-7"></path></svg>
                </a>
            </div>
        </div>
    </main>

    <section id="projects">
        <div class="projects-container">
            <div class="projects-title">
                <h2>Projects</h2>
            </div>
            <div class="projects-recent">
                <h3>Recent work</h3>
            </div>
            <div class="projects-description">
                <p>Explore some of my recent projects showcasing my skills in web development, design, and problem-solving.</p>
            </div>
            <div class="projects-grid">
                <ul class="projects-list">
                    <li class="project">
                        <div>
                            <div class="project-image">
                                <img src="img/project-1.avif" alt="E-Commerce Platform">
                            </div>
                            <div class="project-details">
                                <div class="project-title">
                                    <h2>E-Commerce Platform</h2>
                                </div>
                                <div class="project-description">
                                    <p>A modern e-commerce platform built with React, Node.js, and MongoDB. Features include user authentication, product filtering, and payment processing.</p>
                                </div>
                                <div class="project-technologies">
                                    <ul>
                                        <li><a href="#">React</a></li>
                                        <li><a href="#">Node.js</a></li>
                                        <li><a href="#">MongoDB</a></li>
                                        <li><a href="#">Stripe</a></li>
                                    </ul>
                                </div>
                                <div class="project-links">
                                    <div class="project-link">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4 mr-1" data-lov-id="src/components/Projects.tsx:117:22" data-lov-name="ExternalLink" data-component-path="src/components/Projects.tsx" data-component-line="117" data-component-file="Projects.tsx" data-component-name="ExternalLink" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-1%22%7D"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg><span>Live Demo</span></a>
                                    </div>
                                    <div class="project-link">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-4 h-4 mr-1" data-lov-id="src/components/Projects.tsx:128:22" data-lov-name="Github" data-component-path="src/components/Projects.tsx" data-component-line="128" data-component-file="Projects.tsx" data-component-name="Github" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-1%22%7D"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg><span>Code</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="project">
                        <div>
                            <div class="project-image">
                                <img src="img/project-2.avif" alt="Portfolio Website">
                            </div>
                            <div class="project-details">
                                <div class="project-title">
                                    <h2>Portfolio Website</h2>
                                </div>
                                <div class="project-description">
                                    <p>A minimalist portfolio website showcasing my projects and skills. Built with React and TailwindCSS for a clean, responsive design.</p>
                                </div>
                                <div class="project-technologies">
                                    <ul>
                                        <li><a href="#">React</a></li>
                                        <li><a href="#">TailwindCSS</a></li>
                                        <li><a href="#">Framer Motion</a></li>
                                    </ul>
                                </div>
                                <div class="project-links">
                                    <div class="project-link">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4 mr-1" data-lov-id="src/components/Projects.tsx:117:22" data-lov-name="ExternalLink" data-component-path="src/components/Projects.tsx" data-component-line="117" data-component-file="Projects.tsx" data-component-name="ExternalLink" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-1%22%7D"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg><span>Live Demo</span></a>
                                    </div>
                                    <div class="project-link">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-4 h-4 mr-1" data-lov-id="src/components/Projects.tsx:128:22" data-lov-name="Github" data-component-path="src/components/Projects.tsx" data-component-line="128" data-component-file="Projects.tsx" data-component-name="Github" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-1%22%7D"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg><span>Code</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="project">
                        <div>
                            <div class="project-image">
                                <img src="img/project-3.avif" alt="Task Management App">
                            </div>
                            <div class="project-details">
                                <div class="project-title">
                                    <h2>Task Management App</h2>
                                </div>
                                <div class="project-description">
                                    <p>A productivity app for managing tasks and projects. Features include drag-and-drop organization, calendar integration, and team collaboration.</p>
                                </div>
                                <div class="project-technologies">
                                    <ul>
                                        <li><a href="#">React</a></li>
                                        <li><a href="#">TypeScript</a></li>
                                        <li><a href="#">Firebase</a></li>
                                    </ul>
                                </div>
                                <div class="project-links">
                                    <div class="project-link">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4 mr-1" data-lov-id="src/components/Projects.tsx:117:22" data-lov-name="ExternalLink" data-component-path="src/components/Projects.tsx" data-component-line="117" data-component-file="Projects.tsx" data-component-name="ExternalLink" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-1%22%7D"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg><span>Live Demo</span></a>
                                    </div>
                                    <div class="project-link">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-4 h-4 mr-1" data-lov-id="src/components/Projects.tsx:128:22" data-lov-name="Github" data-component-path="src/components/Projects.tsx" data-component-line="128" data-component-file="Projects.tsx" data-component-name="Github" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-1%22%7D"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg><span>Code</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="about-me">
        <div class="about-me-container">
            <div class="about-me-content">
                <div class="about-me-title">
                    <span>About Me</span>
                </div>
                <div class="about-me-passionate">
                    Passionate about creating exceptional digital experiences
                </div>
                <div class="about-me-description">
                    <p>I'm a frontend developer with a passion for creating elegant, user-focused web experiences. With a strong foundation in modern web technologies, I craft responsive interfaces that are both visually appealing and functionally robust.</p>
                    <p>My journey in web development began five years ago. Since then, I've worked on a diverse range of projects, from e-commerce platforms to data-rich dashboards, each one presenting unique challenges that have expanded my skill set.</p>
                    <p>I believe in clean, maintainable code and thoughtful design that puts users first. When I'm not coding, I enjoy exploring new technologies, contributing to open-source projects, and sharing knowledge with the developer community.</p>
                </div>
                <div class="about-me-cta">
                    <a class="about-me-download" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-2" data-lov-id="src/components/About.tsx:57:16" data-lov-name="FileText" data-component-path="src/components/About.tsx" data-component-line="57" data-component-file="About.tsx" data-component-name="FileText" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg><span>Download Resume</span></a>
                </div>
            </div>
            <div class="about-me-image">
                <div class="grey-square1"></div>
                <div class="grey-square2"></div>
                <div class="about-me-image-container">
                    <img src="img/about-me.avif" alt="About Me">
                </div>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="skills-container">
            <div class="skills-title">
                <h2>Skills</h2>
            </div>
            <div>
                <h3>My Technical Skills</h3>
            </div>
            <div>
                <p>I've worked with a variety of technologies and tools. Here's a snapshot of my technical expertise.</p>
            </div>
            <div>
                <ul>
                    <li>
                        <div>
                            <h4>Frontend</h4>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <div>
                                        <h5>HTML</h5>
                                        <span>95%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>JavaScript</h5>
                                        <span>90%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>React</h5>
                                        <span>92%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>TypeScript</h5>
                                        <span>85%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>Next.js</h5>
                                        <span>80%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>TailwindCSS</h5>
                                        <span>90%</span>
                                    </div>
                                    <div></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h4>Backend</h4>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <div>
                                        <h5>Node.js</h5>
                                        <span>75%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>Express</h5>
                                        <span>75%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>MongoDB</h5>
                                        <span>70%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>REST API</h5>
                                        <span>85%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>GraphQL</h5>
                                        <span>65%</span>
                                    </div>
                                    <div></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h4>Tools & Others</h4>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <div>
                                        <h5>Git & GitHub</h5>
                                        <span>90%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>Figma</h5>
                                        <span>80%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>Responsive Design</h5>
                                        <span>95%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>Jest</h5>
                                        <span>70%</span>
                                    </div>
                                    <div></div>
                                </li>
                                <li>
                                    <div>
                                        <h5>CI/CD</h5>
                                        <span>65%</span>
                                    </div>
                                    <div></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <div>
            <div>
                <h2></h2>
                <p></p>
            </div>
            <div>
                <h2></h2>
                <p></p>
            </div>
            <div>
                <h2></h2>
                <p></p>
            </div>
        </div>
    </footer>
</body>
</html>