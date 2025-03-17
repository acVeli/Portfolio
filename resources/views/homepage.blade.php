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
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#contact">Contact</a></li>
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
                <a class="main-get-in-touch" href="#contact">Get in Touch</a>
                <a class="main-view-projects" href="#projects">View Projects</a>
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
            <div class="skills-description">
                <h3>My Technical Skills</h3>
            </div>
            <div class="skills-content">
                <p>I've worked with a variety of technologies and tools. Here's a snapshot of my technical expertise.</p>
            </div>
            <div class="skills-grid">
                <ul class="skills-list">
                    <li class="skills-category">
                        <div class="skills-category-title">
                            <h4>Frontend</h4>
                        </div>
                        <div class="skills-category-list">
                            <ul>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>HTML</h5>
                                        <span>95%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="95"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>JavaScript</h5>
                                        <span>90%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="90"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>React</h5>
                                        <span>92%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="92"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>TypeScript</h5>
                                        <span>85%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="85"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>Next.js</h5>
                                        <span>80%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="80"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>TailwindCSS</h5>
                                        <span>90%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="90"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="skills-category">
                        <div class="skills-category-title">
                            <h4>Backend</h4>
                        </div>
                        <div class="skills-category-list">
                            <ul>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>Node.js</h5>
                                        <span>75%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="75"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>Express</h5>
                                        <span>75%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="75"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>MongoDB</h5>
                                        <span>70%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="70"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>REST API</h5>
                                        <span>85%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="85"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>GraphQL</h5>
                                        <span>65%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="65"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="skills-category">
                        <div class="skills-category-title">
                            <h4>Tools & Others</h4>
                        </div>
                        <div class="skills-category-list">
                            <ul>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>Git & GitHub</h5>
                                        <span>90%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="90"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>Figma</h5>
                                        <span>80%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="80"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>Responsive Design</h5>
                                        <span>95%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="95"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>Jest</h5>
                                        <span>70%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="70"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skills-category-item">
                                        <h5>CI/CD</h5>
                                        <span>65%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="progress-bar" data-percent="65"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="contact-container">
            <div class="contact-title">
                <h2>Contact</h2>
            </div>
            <div class="contact-description">
                <h3>Get In Touch</h3>
            </div>
            <div class="contact-content">
                <p>Have a project in mind or want to explore collaboration opportunities? Feel free to reach out!</p>
            </div>
            <div class="contact-details">
                <div class="contact-social-links">
                    <ul>
                        <li class="contact-social-way">
                            <div class="contact-social-svgs"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5 text-primary" data-lov-id="src/components/Contact.tsx:81:18" data-lov-name="Mail" data-component-path="src/components/Contact.tsx" data-component-line="81" data-component-file="Contact.tsx" data-component-name="Mail" data-component-content="%7B%22className%22%3A%22w-5%20h-5%20text-primary%22%7D"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></div>
                            <div class="ways-to-contact">
                                <h4>Email</h4>
                                <p><a href="mailto:contact@covu.fr">contact@covu.fr</a></p>
                            </div>
                        </li>
                        <li class="contact-social-way">
                            <div class="contact-social-svgs"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-5 h-5 text-primary" data-lov-id="src/components/Contact.tsx:91:18" data-lov-name="MapPin" data-component-path="src/components/Contact.tsx" data-component-line="91" data-component-file="Contact.tsx" data-component-name="MapPin" data-component-content="%7B%22className%22%3A%22w-5%20h-5%20text-primary%22%7D"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                            <div class="ways-to-contact">
                                <h4>Location</h4>
                                <p>Paris, FR</p>
                            </div>
                        </li>
                        <li class="contact-social-way">
                            <div class="contact-social-svgs"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5 text-primary" data-lov-id="src/components/Contact.tsx:101:18" data-lov-name="Phone" data-component-path="src/components/Contact.tsx" data-component-line="101" data-component-file="Contact.tsx" data-component-name="Phone" data-component-content="%7B%22className%22%3A%22w-5%20h-5%20text-primary%22%7D"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></div>
                            <div class="ways-to-contact">
                                <h4>Phone</h4>
                                <p><a href="tel:+33659115866">(+33) 0659115866</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="contact-form-name-email">
                            <div class="contact-form-name">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" placeholder="John Doe" required>
                            </div>
                            <div class="contact-form-email">
                                <label for="email">Your Email</label>
                                <input type="email" id="email" name="email" placeholder="john@exemple.com" required>
                            </div>
                        </div>
                        <div class="contact-form-subject">
                            <label for="message">Subject</label>
                            <input id="subject" name="subject" type="text" placeholder="Project Inquiry" required>
                        </div>
                        <div class="contact-form-message">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Hello I'd like to talk about ..." required></textarea>
                        </div>
                        <div class="contact-form-submit">
                            <button type="submit"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send w-4 h-4 mr-2" data-lov-id="src/components/Contact.tsx:221:20" data-lov-name="Send" data-component-path="src/components/Contact.tsx" data-component-line="221" data-component-file="Contact.tsx" data-component-name="Send" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path><path d="m21.854 2.147-10.94 10.939"></path></svg>Send Message</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h2><a href="#home">Anton COVU</a></h2>
                <p>Creating exceptional digital experiences</p>
            </div>
            <div class="footer-right">
                <div class="footer-social">
                    <ul>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-5 h-5" data-lov-id="src/components/Footer.tsx:33:16" data-lov-name="Github" data-component-path="src/components/Footer.tsx" data-component-line="33" data-component-file="Footer.tsx" data-component-name="Github" data-component-content="%7B%22className%22%3A%22w-5%20h-5%22%7D"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg></a></li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-5 h-5" data-lov-id="src/components/Footer.tsx:42:16" data-lov-name="Linkedin" data-component-path="src/components/Footer.tsx" data-component-line="42" data-component-file="Footer.tsx" data-component-name="Linkedin" data-component-content="%7B%22className%22%3A%22w-5%20h-5%22%7D"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect width="4" height="12" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle></svg></a></li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5" data-lov-id="src/components/Footer.tsx:49:16" data-lov-name="Mail" data-component-path="src/components/Footer.tsx" data-component-line="49" data-component-file="Footer.tsx" data-component-name="Mail" data-component-content="%7B%22className%22%3A%22w-5%20h-5%22%7D"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></a></li>
                    </ul>
                </div>
                <div class="footer-copy">
                    <p>© {{ now()->year }} Your Name. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <button id="backToTop"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up w-5 h-5" data-lov-id="src/pages/Index.tsx:78:8" data-lov-name="ArrowUp" data-component-path="src/pages/Index.tsx" data-component-line="78" data-component-file="Index.tsx" data-component-name="ArrowUp" data-component-content="%7B%22className%22%3A%22w-5%20h-5%22%7D"><path d="m5 12 7-7 7 7"></path><path d="M12 19V5"></path></svg></button>

    <script>
        let progressbars = document.querySelectorAll('.progress-bar');
        progressbars.forEach(progressbar => {
            let percent = progressbar.getAttribute('data-percent');
            progressbar.style.width = percent + '%';
        });

        let backToTop = document.getElementById('backToTop');
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                if(backToTop.classList.contains('inactive')) {
                    backToTop.classList.remove('inactive');
                }
                backToTop.classList.add('active');
                backToTop.style.animation = 'fromBottom 0.5s forwards';
            } else {
                backToTop.style.animation = 'toBottom 0.5s forwards';
                backToTop.classList.remove('active');
                backToTop.classList.add('inactive');
            }
        };
        backToTop.addEventListener('click', function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>
</body>
</html>