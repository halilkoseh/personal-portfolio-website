<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halil KÖSE</title>
    <link rel="icon" href="images/favLogo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha384-o5E4i2bXeswvV3nPLr/ogK3/5Q4knRk5s9mjLZT4PbXTfILUj9ke5eW7JJG1G0+K" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print"
        onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
    </noscript>
    <link href="./css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet" />
    <link href="./css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet" />
    <link href="./css/bootstrap.min.css?ver=1.2.0" rel="stylesheet" />
    <link href="./css/aos.css?ver=1.2.0" rel="stylesheet" />
    <link href="./css/main.css?ver=1.2.0" rel="stylesheet" />
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>
<style>
    .btn-custom {
        background-color: #858585;
        border-color: #515151;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-custom:hover {
        background-color: #515151;
    }
</style>

<body id="top">
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
            <div class="container">
                <a class="link-dark navbar-brand site-title mb-0" href="#">Halil KÖSE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-2">
                        <li class="nav-item"><a class="nav-link" href="#">Greetings</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">
                                Experience
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#volunt">Volunteering</a></li>
                        </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#project">Projects</a></li>

                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/download-cv1') }}">Download PDF</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-earth-americas"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/tr">Türkçe</a></li>
                                <li><a class="dropdown-item" href="/en">English</a></li>
                                <li><a class="dropdown-item" href="/ar">العربية</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content">
        <div id="content">
            <header>
                <div class="cover bg-light" id="home">
                    <div class="container px-3">
                        <div class="row">
                            <div class="col-lg-6 p-2">
                                <img class="img-fluid" src="images/illustrations/banner1.png" style="height: 500px;"
                                    alt="hello" />
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-5">
                                    <p class="mb-1 text-lg font-bold text-gray-700 italic">SELECT * FROM visitors WHERE
                                        name = ' <span class="" style="color: #858585;">{{ $username }}</span> ' ;
                                    </p>
                                    <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">Hello I
                                        am Halil KÖSE</h1>
                                    <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">SOFTWARE
                                        Engineering</p>
                                    <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
                                        <nav role="navigation">
                                            <ul class="nav justify-content-left">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="https://linktr.ee/halilkoseh"
                                                        title="Linktree">
                                                        <i class="fas fa-link"></i>
                                                        <span class="menu-title sr-only">Linktree</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="https://www.linkedin.com/in/halilkoseh/"
                                                        title="LinkedIn">
                                                        <i class="fab fa-linkedin"></i>
                                                        <span class="menu-title sr-only">LinkedIn</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="https://github.com/halilkoseh"
                                                        title="GitHub">
                                                        <i class="fab fa-github"></i>
                                                        <span class="menu-title sr-only">GitHub</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#contact" title="Email">
                                                        <i class="fas fa-envelope"></i>
                                                        <span class="menu-title sr-only">Email</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#contact" title="Phone">
                                                        <i class="fas fa-phone"></i>
                                                        <span class="menu-title sr-only">Phone</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mt-3" data-aos="fade-up" data-aos-delay="200">
                                        <a class="btn mt-1 hover-effect btn-custom" href="#contact"> Contact Me <i
                                                class="fa-solid fa-paper-plane"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wave-bg"></div>
            </header>
            <div class="section pt-4 px-3 px-lg-4" id="about">
                <div class="container-narrow">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">Briefly, who am I?</h2>
                    </div>
                    <div class="px-4 lg:px-32">
                        <div class="max-w-4xl mx-auto">
                            <div class="text-left mb-8">
                                <p class="text-lg text-gray-800">
                                    <strong>Final year Software Engineering student</strong>, I am actively striving to
                                    put theoretical knowledge into practice. During the software development process, I
                                    work on various projects using
                                    powerful frameworks like <strong>Laravel</strong> and modern frontend tools like
                                    <strong>Tailwind CSS</strong>. These projects not only deepen my technical knowledge
                                    but also provide an opportunity to
                                    test my software engineering skills in real-world scenarios.
                                </p>
                                <p class="text-lg text-gray-800">
                                    I regularly expand my knowledge by attending education, seminars, and events. These
                                    activities help me stay updated with the latest developments in the industry and
                                    enable me to create innovative
                                    solutions. Additionally, they provide me with opportunities to <strong>meet and
                                        network with professionals</strong> from different expertise areas, which
                                    greatly benefits my professional development.
                                </p>
                                <p class="text-lg text-gray-800">
                                    By blending theoretical knowledge with practical applications, I aim to make a
                                    significant contribution to my personal development. Achieving this balance not only
                                    benefits me but also adds value to
                                    my surroundings. By participating in various
                                    <strong>projects and developing different perspectives</strong>, I strive to become
                                    a more comprehensive and <strong>competent engineer</strong> in the field of
                                    software engineering.
                                </p>
                                <p class="text-lg text-gray-800">
                                    In line with the requirements of my profession, I aim to have knowledge not only in
                                    one area but in several different fields. The knowledge I acquire in different
                                    fields enhances my
                                    <strong>problem-solving ability</strong> and enables me to bring more creative
                                    solutions to my projects. In this way, I strive to add value to both my career and
                                    the projects I work on.
                                </p>
                                <p class="text-lg text-gray-800">
                                    In conclusion, I strive to strike a balance between theoretical knowledge and
                                    practical application, aiming to contribute to both my personal and professional
                                    development while adding value to my
                                    surroundings. Equipped with comprehensive knowledge in software engineering, I
                                    aspire to participate in larger and more impactful projects in the future. Embracing
                                    a mindset of
                                    <strong>continuous learning and growth</strong>, I aim to continuously advance
                                    myself and my environment on this journey.
                                </p>
                            </div>
                        </div>
                    </div>
                    <style>
                        p {
                            text-align: justify;
                            text-justify: inter-word;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-3 px-lg-4" id="services">
        <div class="container-narrow">
            <div class="row py-3 justify-content-center">
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300">
                    <img class="mb-2 mx-auto d-block" src="images/services/engineer.svg" width="96"
                        height="96" alt="ui-ux" />
                    <div class="h5 mt-3">Engineering</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400">
                    <img class="mb-2 mx-auto d-block" src="images/services/resim1.svg" width="96" height="96"
                        alt="app development" />
                    <div class="h5 mt-3">Analysis and Design</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img class="mb-2 mx-auto d-block" src="images/services/arka.svg" width="96" height="96"
                        alt="web design" />
                    <div class="h5 mt-3">Back End and Database</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img class="mb-2 mx-auto d-block" src="images/services/on.svg" width="96" height="96"
                        alt="graphic design" />
                    <div class="h5 mt-3">Front End and Interface</div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mb-5 pt-5" id="education">
        <h2 class="marker marker-center">My Education</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="h5 mb-1">Istanbul Sabahattin Zaim University</h3>
                            <div class="text-small">Software Engineering (30% in English)</div>
                            <div class="text-muted text-small">2020 - 2025</div>
                        </div>
                        <img src="https://yt3.googleusercontent.com/ytc/AIdro_nIVcnNLwEGOPNx2XSDP_ouxnhF74tw1idMLd6yPaYA4r0=s900-c-k-c0x00ffffff-no-rj"
                            width="64" height="30" alt="university"
                            style="border-radius: 50%; border-color: #515151;" />
                    </div>
                </div>
            </div>
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="h5 mb-1">Anadolu University</h3>
                            <div class="text-small">Associate's Degree in Theology (GPA 3.21)</div>
                            <div class="text-muted text-small">2020 - 2023</div>
                        </div>
                        <img src="https://yt3.googleusercontent.com/ytc/AIdro_mXRtyP-phuH5pPecOtyDN1v7seHUkpJ1mVPt9kgyRe23g=s900-c-k-c0x00ffffff-no-rj"
                            width="64" height="30" alt="university"
                            style="border-radius: 50%; border-color: #515151;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5" id="experience">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">My Experiences</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                        <div class="card-header px-3 py-2">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="h5 mb-1">
                                        MFE Teknoloji A.Ş. <br />
                                        Long-term Intern
                                    </h3>
                                    <div class="text-muted text-small">Jan 2024 - Jul 2024 <small></small></div>
                                </div>
                                <img src="images/team/mfe.jpeg" width="64" height="30" alt="university"
                                    style="border-radius: 50%; border-color: #515151;" />
                            </div>
                        </div>
                        <div class="card-body px-3 py-2">
                            <p>
                                I have worked in Laravel and PHP fields, contributing to real projects. I have helped
                                successfully complete projects through teamwork. This experience has allowed me to grow
                                and approach new projects from
                                a broader perspective.
                            </p>
                            <p class="text-center">PHP · Laravel · Tailwind CSS · MVC · Web Testing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
                        <div class="card-header px-3 py-2">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="h5 mb-1">
                                        İZUSEM AUM <br />
                                        Intern
                                    </h3>
                                    <div class="text-muted text-small">Jul 2023 - Sep 2023 <small></small></div>
                                </div>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK7kFQJaZvazQNhWIGm6e-wOi60qA5IXXQfw&s"
                                    width="64" height="30" alt="university"
                                    style="border-radius: 50%; border-color: #515151;" />
                            </div>
                        </div>
                        <div class="card-body px-3 py-2">
                            <p>
                                I have completed my voluntary internship, which provided me with opportunities to gain
                                experience in various fields and significantly contribute to my personal development. I
                                am very happy to have had the
                                chance to get closer to my future goals through this experience.
                            </p>
                            <p class="text-center">Linux System Administration · Docker · Minikube · DevOps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5" id="skills">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">My Skills</h2>
            </div>
            <div class="text-center">
                <p class="mx-auto mb-2 text-center" style="max-width: 600px;">
                    Software development is not just about writing code; it's also about
                    <strong>problem-solving</strong>, innovation, and <strong>continuous learning</strong>.
                </p>
            </div>
            <div class="bg-light p-3">
                <div class="row">
                    <div class="col-md-5">
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">Laravel -
                                    PHP</span><span></span></div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-black" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="100" data-aos-anchor=".skills-section"
                                    style="width: 75%; background: linear-gradient(to left, #858585, black);"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">Tailwind
                                    CSS</span><span></span></div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="200" data-aos-anchor=".skills-section"
                                    style="width: 70%; background: linear-gradient(to left, #858585, black);"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">HTML -
                                    JS</span><span></span></div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="300" data-aos-anchor=".skills-section"
                                    style="width: 50%; background: linear-gradient(to left, #858585, black);"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">SQL</span><span></span>
                            </div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="300" data-aos-anchor=".skills-section"
                                    style="width: 85%; background: linear-gradient(to left, #858585, black);"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">English B2 level
                                </span><span></span></div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="300" data-aos-anchor=".skills-section"
                                    style="width: 67%; background: linear-gradient(to left, #858585, black);"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">Linux - Docker -
                                    Minikube</span><span></span></div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="400" data-aos-anchor=".skills-section"
                                    style="width: 60%; background: linear-gradient(to right, #858585, black);"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">Python</span><span></span>
                            </div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="500" data-aos-anchor=".skills-section"
                                    style="width: 90%; background: linear-gradient(to right, #858585, black);"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">Web
                                    Testing</span><span></span></div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="600" data-aos-anchor=".skills-section"
                                    style="width: 90%; background: linear-gradient(to right, #858585, black);"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">Web
                                    Scraping</span><span></span></div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="600" data-aos-anchor=".skills-section"
                                    style="width: 70%; background: linear-gradient(to right, #858585, black);"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="py-1">
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">Arabic A2
                                    level</span><span></span></div>
                            <div class="progress my-1">
                                <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                    data-aos-delay="600" data-aos-anchor=".skills-section"
                                    style="width: 35%; background: linear-gradient(to right, #858585, black);"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5" id="volunt">
        <h2 class="marker marker-center">My Volunteer Activities</h2>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="h5 mb-1">Istanbul Sabahattin Zaim University Information Technologies Club</h3>
                            <div class="text-muted text-small">
                                Chairmanship of the Board of Directors <br />
                                Jun 2022 - Oct 2023
                            </div>
                        </div>
                        <img src="https://pbs.twimg.com/profile_images/1043243777178193923/3lxnsBNW_400x400.jpg"
                            width="70" height="48" alt="university" style="border-radius: 50%;" />
                    </div>
                </div>
                <div class="card-body px-3 py-2">
                    <p>
                        During this period, I had the opportunity to develop myself in various areas. As in any
                        endeavor, <strong>communication</strong> was one of the most crucial elements in our club
                        activities. Especially, effective
                        communication with team members was the cornerstone of our success. Throughout our club
                        activities, we collaborated with many different people, acquired new teammates, and successfully
                        executed
                        <strong>Teknofest projects</strong> that appealed to diverse audiences.
                    </p>
                    <p class="text-center">
                        Teamwork · Organizational Skills · Problem Solving
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-8 mx-auto">
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="h5 mb-1">The Turkey Technology Team T3 Foundation</h3>
                            <div class="text-muted text-small">Instructor Mentor - Scholar</div>
                            <div class="text-muted text-small">Feb 2024 - Present</div>
                        </div>
                        <img src="https://cdnkariyer.t3vakfi.org/media/upload/userFormUpload/MjhKALkcOKCCDVaN4V7diEPbP0Rkjl2n.png"
                            width="70" height="48" alt="web design" style="border-radius: 50%;" />
                    </div>
                </div>
                <div class="card-body px-3 py-2">
                    <p>
                        The Özdemir Bayraktar National Technology Scholarship Program organized by T3 Foundation
                        provides 720 university students with training in Deneyap Technology Workshops for 10 months,
                        where they receive education
                        in their respective fields of competence. This scholarship program also offers opportunities for
                        students to mentor participants in workshops and support teams participating in competitions.
                    </p>
                    <p class="text-center">
                        Managerial Support · Planning · Mentoring · Information Technology
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5 items-center" id="project">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">My Projects</h2>
            </div>
            <div class="text-center">
                <p class="mx-auto mb-2 text-center" style="max-width: 600px;">To explore my other projects, please
                    take a look at <a href="https://linktr.ee/halilkoseh">GitHub</a> you can visit the page.</p>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-5 mb-8 bg-white p-6 rounded-lg shadow-md my-3 mx-3" data-aos="fade-left"
                    data-aos-delay="300">
                    <div class="flex items-center">
                        <div class="w-1/5 flex justify-center">
                            <span class="text-6xl" style="color: #858585;"><i
                                    class="fa-solid fa-list-check"></i></span>
                        </div>
                        <div class="w-3/4 pl-4">
                            <h2 class="text-xl font-bold text-gray-900">
                                Task Monitor:<br />
                                Business Management Made Easy!"
                            </h2>
                            <p class="mt-2 text-gray-600">
                                Manage Your Tasks and Projects More Efficiently with Task Monitor. Task Monitor is
                                ushering in a new era in task management with its user-friendly interface and
                                comprehensive features.
                            </p>
                            <p class="mt-2 text-gray-600">It was written in Laravel, PHP, and Tailwind CSS.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">Web System Software</span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/Task-Monitor" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">Project Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-8 bg-white p-6 rounded-lg shadow-md my-3 mx-3" data-aos="fade-right"
                    data-aos-delay="300">
                    <div class="flex items-center">
                        <div class="w-1/5 flex justify-center">
                            <span class="text-6xl" style="color: #858585;"><i
                                    class="fa-solid fa-comments"></i></span>
                        </div>
                        <div class="w-3/4 pl-4">
                            <h2 class="text-xl font-bold text-gray-900">
                                Chat Application:<br />
                                Safely Message!
                            </h2>
                            <p class="mt-2 text-gray-600">
                                Chat with a user-friendly Flutter app. Download and start using it with the APK file.
                                Create a chat room just for you and chat with your friends
                            </p>
                            <p class="mt-2 text-gray-600">Written with Flutter, Dart, and Firebase</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">Mobile application software</span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/Firebase-for-Flutter" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">Project Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-8 bg-white p-6 rounded-lg shadow-md my-3 mx-3" data-aos="fade-right"
                    data-aos-delay="300">
                    <div class="flex items-center">
                        <div class="w-1/5 flex justify-center">
                            <span class="text-6xl" style="color: #858585;"><i class="fa-solid fa-robot"></i></span>
                        </div>
                        <div class="w-3/4 pl-4">
                            <h2 class="text-xl font-bold text-gray-900">
                                Appointment Booking Bot:<br />
                                Start and Wait!
                            </h2>
                            <p class="mt-2 text-gray-600">
                                This bot, written with Python and Selenium, makes appointment booking quick and easy for
                                you. Just start it and wait!
                            </p>
                            <p class="mt-2 text-gray-600">Written with Python, Selenium, and Love.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">Automation Software </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/proxyFinder" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">Project Details”</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-8 bg-white p-6 rounded-lg shadow-md my-3 mx-3" data-aos="fade-right"
                    data-aos-delay="300">
                    <div class="flex items-center">
                        <div class="w-1/5 flex justify-center">
                            <span class="text-6xl" style="color: #858585;"><i
                                    class="fa-solid fa-car-side"></i></span>
                        </div>
                        <div class="w-3/4 pl-4">
                            <h2 class="text-xl font-bold text-gray-900">
                                Second Lifeline:<br />
                                Tool That Fits Your Budget
                            </h2>
                            <p class="mt-2 text-gray-600">
                                It allows users to list their vehicles on the platform, search for cars, and find their
                                dream vehicle
                            </p>
                            <p class="mt-2 text-gray-600">Written with Java, Swing, and MySQL.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">Java Application Software </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/aracAlimSatim-JAVA-" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">Project Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">Contact</h2>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="bg-light my-2 p-3 pt-2">
                        @if (session('success'))
                            <div class="popup-message">
                                ㅤㅤㅤㅤㅤㅤ <i class="fa-solid fa-check-double"></i> {!! session('success') !!}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group my-2">
                                <label for="name" class="form-label fw-bolder">Your First Name and Last Name
                                </label>
                                <input class="form-control" type="text" id="name" name="name" required />
                            </div>
                            <div class="form-group my-2">
                                <label for="email" class="form-label fw-bolder">Your Email Address</label>
                                <input class="form-control" type="email" id="email" name="_replyto"
                                    required />
                            </div>
                            <div class="form-group my-2">
                                <label for="message" class="form-label fw-bolder">You can send your message</label>
                                <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <style>
                                .custom-bg {
                                    background-color: #e1e1e1;
                                }
                            </style>
                            <style>
                                .custom-bg {
                                    background-color: #858585;
                                }

                                .button-container {
                                    text-align: center;
                                }
                            </style>
                            <div class="button-container">
                                <button class="btn mt-2 custom-bg text-white border-2 border-black"
                                    type="submit">Send <i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="mt-3 px-1">
                        <div class="h5">You can reach us anytime you wish</div>
                        <p>
                            If you would like to get in touch regarding any matter,<br />
                            you can reach me using the contact form or with the information below.
                        </p>
                    </div>
                    <div class="mt-53 px-1">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="pb-1">Email:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">halilulucak@icloud.com</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="pb-1">Phone:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">+90 538 200 44 66</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="pb-1">Location:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">Istanbul, Turkey</div>
                            </div>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385396.3209838703!2d28.68254236817699!3d41.005370229301256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1721059499756!5m2!1str!2str"
                            width="410" height="211" style="border: 1 px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="cover bg-light">
        <div class="container mx-auto text-center">
            <div class="my-4">
                <div class="text-3xl font-bold">
                    <br />
                    <br />
                    <br />
                    Halil KÖSE
                </div>

                <p class="text-lg text-center mt-4">
                    <strong>Software engineering</strong> is not just about writing code; <br />
                    it is the art of problem-solving and <strong>a passion for continuous learning</strong>.
                </p>
                <div class="flex justify-center mt-4">
                    <a class="mx-3" href="https://linktr.ee/halilkoseh" title="Twitter">
                        <i class="fas fa-link text-2xl"></i>
                    </a>
                    <a class="mx-3" href="https://www.linkedin.com/in/halilkoseh/" title="Facebook">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a class="mx-3" href="https://github.com/halilkoseh" title="Instagram">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a class="mx-3" href="mailto:halilulucak@icloud.com" title="Behance">
                        <i class="fas fa-envelope text-2xl"></i>
                    </a>
                    <a class="mx-3" href="tel:+905382004466" title="LinkedIn">
                        <i class="fas fa-phone text-2xl"></i>
                    </a>
                </div>
            </div>
            <div class="text-sm text-gray-400 mt-6">
                <div class="mb-2"></div>
                <div>
                    <br />
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </footer>

    <div id="scrolltop">
        <a class="btn btn-secondary" href="#top">
            <span class="icon"><i class="fas fa-angle-up fa-x"></i></span>
        </a>
    </div>

    <script src="./scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="./scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./scripts/aos.min.js?ver=1.2.0"></script>
    <script src="./scripts/main.js?ver=1.2.0"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Show popup if it exists
            if ($('.popup-message').length) {
                $('.popup-message').fadeIn().delay(3000).fadeOut();
            }

            // Optional: Redirect after form submission
            $('form').submit(function() {
                window.location.href = '#contact';
            });
        });
    </script>
</body>

</html>
