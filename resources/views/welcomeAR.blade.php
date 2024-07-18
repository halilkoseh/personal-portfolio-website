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
                <a class="link-dark navbar-brand site-title mb-0" href="#">حليل كوسه</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-2">
                        <li class="nav-item"><a class="nav-link" href="#">الترحيب</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">عني</a></li>
                        <li class="nav-item"><a class="nav-link" href="#education">تعليمي</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">
                                تجاربي
                        <li class="nav-item"><a class="nav-link" href="#skills">مهاراتي</a></li>
                        <li class="nav-item"><a class="nav-link" href="#volunt">العمل التطوعي</a></li>
                        </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#project">مشاريعي</a></li>

                        <li class="nav-item"><a class="nav-link" href="#contact">اتصل بي</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/download-cv1') }}">تحميل PDF</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-earth-americas"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/tr" onclick="changeLanguage('tr')">التركية</a>
                                </li>
                                <li><a class="dropdown-item"href="/en">الإنجليزية</a></li>
                                <li><a class="dropdown-item" href="#" onclick="changeLanguage('ar')">العربية</a>
                                </li>
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
                                    <p class="mb-1 text-lg font-bold text-gray-700 italic">SELECT * FROM الزوار WHERE
                                        اسم = ' <span class="" style="color: #858585;">{{ $username }}</span> ' ;
                                    </p>
                                    <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">مرحبًا
                                        أنا حليل كوسه</h1>
                                    <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">هندسة
                                        البرمجيات</p>
                                    <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
                                        <nav role="navigation">
                                            <ul class="nav justify-content-left">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="https://linktr.ee/halilkoseh"
                                                        title="لينكتري">
                                                        <i class="fas fa-link"></i>
                                                        <span class="menu-title sr-only">لينكتري</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="https://www.linkedin.com/in/halilkoseh/"
                                                        title="لينكد إن">
                                                        <i class="fab fa-linkedin"></i>
                                                        <span class="menu-title sr-only">لينكد إن</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="https://github.com/halilkoseh"
                                                        title="جيت هاب">
                                                        <i class="fab fa-github"></i>
                                                        <span class="menu-title sr-only">جيت هاب</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#contact" title="البريد الإلكتروني">
                                                        <i class="fas fa-envelope"></i>
                                                        <span class="menu-title sr-only">البريد الإلكتروني</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#contact" title="الهاتف">
                                                        <i class="fas fa-phone"></i>
                                                        <span class="menu-title sr-only">الهاتف</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mt-3" data-aos="fade-up" data-aos-delay="200">
                                        <a class="btn mt-1 hover-effect btn-custom" href="#contact">تواصل معي <i
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
                        <h2 class="marker marker-center">من أنا بإختصار؟</h2>
                    </div>
                    <div class="px-4 lg:px-32">
                        <div class="max-w-4xl mx-auto">
                            <div class="text-left mb-8">
                                <p class="text-lg text-gray-800">
                                    <strong>طالب في السنة الأخيرة لهندسة البرمجيات</strong>، أسعى جاهدًا لتحويل المعرفة
                                    النظرية إلى تطبيقات عملية. أقوم بتطوير مشاريع مختلفة باستخدام أدوات حديثة مثل
                                    <strong>Laravel</strong>
                                    لتطوير البرمجيات و<strong>Tailwind CSS</strong> للواجهات الأمامية، مما يعزز من
                                    معرفتي التقنية ويختبر مهاراتي كمهندس برمجيات في العالم الحقيقي.
                                </p>
                                <p class="text-lg text-gray-800">
                                    أقوم بحضور الدورات التدريبية والندوات بانتظام لتوسيع معرفتي. تساعدني هذه الفعاليات
                                    في متابعة
                                    أحدث التطورات في الصناعة وتوليد حلول مبتكرة. كما أنها توفر لي فرصًا للقاء والتواصل
                                    مع
                                    المحترفين من مختلف التخصصات، مما يساهم في تطويري المهني.
                                </p>
                                <p class="text-lg text-gray-800">
                                    أهدف إلى دمج المعرفة النظرية مع التطبيقات العملية لتحقيق تطوير شخصي مستدام. من خلال
                                    المشاركة
                                    في مختلف المشاريع وتنمية وجهات نظر متنوعة، أسعى لأكون مهندس برمجيات شامل ومؤهل.
                                </p>
                                <p class="text-lg text-gray-800">
                                    بناءً على متطلبات مهنتي، أسعى لامتلاك معرفة واسعة في مجموعة متنوعة من المجالات، مما
                                    يساعدني
                                    على تعزيز قدرتي على حل المشكلات وتقديم حلول إبداعية في مشاريعي.
                                </p>
                                <p class="text-lg text-gray-800">
                                    بشكل عام، أسعى لتحقيق توازن بين المعرفة النظرية والتطبيق العملي، وذلك لتحقيق تطور
                                    شخصي
                                    ومهني مستدام، ولإضافة قيمة لمجتمعي من خلال امتلاك معرفة متعمقة في مجال هندسة
                                    البرمجيات.
                                </p>
                            </div>
                        </div>
                    </div>
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
                    <div class="h5 mt-3">الهندسة</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400">
                    <img class="mb-2 mx-auto d-block" src="images/services/resim1.svg" width="96" height="96"
                        alt="app development" />
                    <div class="h5 mt-3">التحليل والتصميم</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img class="mb-2 mx-auto d-block" src="images/services/arka.svg" width="96" height="96"
                        alt="web design" />
                    <div class="h5 mt-3">الجزء الخلفي وقاعدة البيانات</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img class="mb-2 mx-auto d-block" src="images/services/on.svg" width="96" height="96"
                        alt="graphic design" />
                    <div class="h5 mt-3">الجزء الأمامي والواجهة</div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-5 pt-5" id="education">
        <h2 class="marker marker-center">تعليمي</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="h5 mb-1">جامعة إسطنبول صباح الدين زعيم</h3>
                            <div class="text-small">هندسة البرمجيات (30% إنجليزي)</div>
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
                            <h3 class="h5 mb-1">جامعة أناضول</h3>
                            <div class="text-small">شهادة ما قبل الجامعية في اللاهوت (3.21)</div>
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
                <h2 class="marker marker-center">خبرتي</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                        <div class="card-header px-3 py-2">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="h5 mb-1">
                                        شركة إم إف إيه التكنولوجيا <br />
                                        متدرب لفترة طويلة
                                    </h3>
                                    <div class="text-muted text-small">أكتوبر 2024 - يوليو 2024 <small></small></div>
                                </div>
                                <img src="images/team/mfe.jpeg" width="64" height="30" alt="university"
                                    style="border-radius: 50%; border-color: #515151;" />
                            </div>
                        </div>
                        <div class="card-body px-3 py-2">
                            <p>
                                عملت في مجالات Laravel و PHP وساهمت في مشاريع حقيقية. ساعدت في إكمال المشاريع بنجاح من
                                خلال العمل الجماعي. من خلال هذه التجربة، حصلت على فرصة للتطور والنظر إلى المشاريع
                                الجديدة
                                من منظور أوسع.
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
                                        إزوسيم أوم <br />
                                        متدرب
                                    </h3>
                                    <div class="text-muted text-small">يوليو 2023 - سبتمبر 2023 <small></small></div>
                                </div>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK7kFQJaZvazQNhWIGm6e-wOi60qA5IXXQfw&s"
                                    width="64" height="30" alt="university"
                                    style="border-radius: 50%; border-color: #515151;" />
                            </div>
                        </div>
                        <div class="card-body px-3 py-2">
                            <p>
                                أكملت تدريبي التطوعي حيث كان لدي فرصة لكسب الخبرة في مجالات متعددة ولقد ساهمت في تحسين
                                تطويري الشخصي بشكل كبير. أنا سعيد جدًا بأنني حصلت على فرصة للتقرب أكثر من أهدافي
                                المستقبلية من خلال هذه التجربة.
                            </p>
                            <p class="text-center">إدارة نظم Linux · Docker · Minikube · DevOps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section px-3 px-lg-4 pt-5" id="skills">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">مهاراتي</h2>
            </div>
            <div class="text-center">
                <p class="mx-auto mb-2 text-center" style="max-width: 600px;">
                    تطوير البرمجيات لا يتعلق فقط بكتابة الشفرة، بل يتعلق أيضًا بحل المشكلات، الابتكار، وعملية
                    <strong>التعلم المستمر</strong>.
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
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">الإنجليزية B2
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
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">العربية
                                    A2</span><span></span></div>
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
        <h2 class="marker marker-center">أنشطتي التطوعية</h2>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="h5 mb-1">نادي تكنولوجيا المعلومات في جامعة إسطنبول صباح الزيم</h3>
                            <div class="text-muted text-small">
                                رئاسة مجلس الإدارة <br />
                                يونيو 2022 - أكتوبر 2023
                            </div>
                        </div>
                        <img src="https://pbs.twimg.com/profile_images/1043243777178193923/3lxnsBNW_400x400.jpg"
                            width="70" height="48" alt="university" style="border-radius: 50%;" />
                    </div>
                </div>
                <div class="card-body px-3 py-2">
                    <p>
                        خلال هذه الفترة، وجدت فرصة لتطوير نفسي في مجالات متعددة. كما هو الحال في كل عمل، كانت
                        <strong>التواصل</strong> هو أحد أهم العناصر. بالأخص التواصل مع زملائي في الفريق، كان حجر
                        الزاوية لنجاحنا. خلال أنشطة النادي، التقينا بأشخاص مختلفين، وكسبنا زملاء جدد، ونفذنا بنجاح
                        <strong>مشاريع تكنوفيست</strong> التي تستهدف شرائح مختلفة من الجمهور.
                    </p>
                    <p class="text-center">
                        العمل الجماعي · مهارات التنظيم · حل المشكلات
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
                            <h3 class="h5 mb-1">مؤسسة فريق تكنولوجيا تركيا T3</h3>
                            <div class="text-muted text-small">مدرب مرشد - مستفيد من المنحة</div>
                            <div class="text-muted text-small">فبراير 2024 - الآن</div>
                        </div>
                        <img src="https://cdnkariyer.t3vakfi.org/media/upload/userFormUpload/MjhKALkcOKCCDVaN4V7diEPbP0Rkjl2n.png"
                            width="70" height="48" alt="web design" style="border-radius: 50%;" />
                    </div>
                </div>
                <div class="card-body px-3 py-2">
                    <p>
                        برنامج منح تكنولوجيا أوزديمير بايراكتار الوطني يقدم لـ 720 طالب جامعي لمدة 10 أشهر، ويتلقون
                        تدريبًا في ورش عمل تقنية دينياب حسب تخصصاتهم وفي البرامج التكنولوجية الوطنية، مع
                        الفرصة لتوجيه الطلاب الذين يتطلعون لدخول مسابقات.
                    </p>
                    <p class="text-center">
                        دعم الإدارة · التخطيط · التوجيه · تكنولوجيا المعلومات
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5 items-center" id="project">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">مشاريعي</h2>
            </div>
            <div class="text-center">
                <p class="mx-auto mb-2 text-center" style="max-width: 600px;">يمكنك زيارة صفحتي على <a
                        href="https://linktr.ee/halilkoseh">GitHub</a> للاطلاع على مشاريعي الأخرى.</p>
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
                                مراقب المهام:<br />
                                إدارة الأعمال الآن أصبحت أسهل!
                            </h2>
                            <p class="mt-2 text-gray-600">
                                قم بإدارة أعمالك ومشاريعك بكفاءة أكبر باستخدام مراقب المهام. بواجهة مستخدم ودية وميزات
                                شاملة،
                                يفتح مراقب المهام صفحة جديدة في تتبع الأعمال.
                            </p>
                            <p class="mt-2 text-gray-600">تم كتابته باستخدام Laravel و PHP و Tailwind CSS.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">نظام برمجيات الويب </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/Task-Monitor" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">تفاصيل المشروع</a>
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
                                تطبيق المحادثة:<br />
                                تواصل بأمان!
                            </h2>
                            <p class="mt-2 text-gray-600">
                                تواصل باستخدام تطبيق Flutter سهل الاستخدام للمحادثات. قم بتنزيل ملف APK وابدأ في
                                استخدامه. أنشئ غرف دردشة خاصة بك وتواصل مع أصدقائك.
                            </p>
                            <p class="mt-2 text-gray-600">تم كتابته باستخدام Flutter و dart و Firebase.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">برمجيات تطبيقات الجوال </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/Firebase-for-Flutter" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">تفاصيل المشروع</a>
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
                                روبوت حجز المواعيد:<br />
                                ابدأ وانتظر!
                            </h2>
                            <p class="mt-2 text-gray-600">
                                هذا الروبوت المكتوب بلغة Python و Selenium يجعل عملية حجز المواعيد أسهل وأسرع بالنسبة
                                لك. ما عليك سوى البدء والانتظار!
                            </p>
                            <p class="mt-2 text-gray-600">تم كتابته باستخدام Python و Selenium والحب.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">برمجيات التشغيل التلقائي </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/proxyFinder" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">تفاصيل المشروع</a>
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
                                2. يعيش معك:<br />
                                سيارة تتناسب مع ميزانيتك
                            </h2>
                            <p class="mt-2 text-gray-600">
                                يتيح للمستخدمين نشر سياراتهم عبر المنصة والبحث عنها والعثور على السيارة المثالية التي
                                تحلمون بها.
                            </p>
                            <p class="mt-2 text-gray-600">تم كتابته باستخدام Java و Swing و MySQL.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">برمجيات تطبيقات Java </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/aracAlimSatim-JAVA-" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">تفاصيل المشروع</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">التواصل</h2>
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
                                <label for="name" class="form-label fw-bolder">الاسم الكامل</label>
                                <input class="form-control" type="text" id="name" name="name" required />
                            </div>
                            <div class="form-group my-2">
                                <label for="email" class="form-label fw-bolder">بريدك الإلكتروني</label>
                                <input class="form-control" type="email" id="email" name="_replyto"
                                    required />
                            </div>
                            <div class="form-group my-2">
                                <label for="message" class="form-label fw-bolder">يمكنك إرسال رسالتك هنا</label>
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
                                    type="submit">أرسل <i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="mt-3 px-1">
                        <div class="h5">يمكنك الاتصال بي في أي وقت</div>
                        <p>
                            إذا كنت ترغب في التواصل بشأن أي موضوع، <br />
                            يمكنك الوصول إليّ عبر نموذج الاتصال أو من خلال معلوماتي أدناه.
                        </p>
                        <p>أتمنى رؤيتك قريباً!</p>
                    </div>
                    <div class="mt-53 px-1">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="pb-1">البريد الإلكتروني:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">halilulucak@icloud.com</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="pb-1">الهاتف:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">+90 538 200 44 66</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="pb-1">الموقع:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">إسطنبول، تركيا</div>
                            </div>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385396.3209838703!2d28.68254236817699!3d41.005370229301256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1721059499756!5m2!1str!2str"
                            width="410" height="211" style="border: 1px solid;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    حليل كوسه
                </div>

                <p class="text-lg text-center mt-4">
                    <strong>هندسة البرمجيات</strong>، ليست مجرد كتابة الشفرة؛ <br />
                    بل هي فن حل المشاكل و<strong> شغف مستمر بالتعلم</strong>.
                </p>
                <div class="flex justify-center mt-4">
                    <a class="mx-3" href="https://linktr.ee/halilkoseh" title="تويتر">
                        <i class="fas fa-link text-2xl"></i>
                    </a>
                    <a class="mx-3" href="https://www.linkedin.com/in/halilkoseh/" title="فيسبوك">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a class="mx-3" href="https://github.com/halilkoseh" title="إنستغرام">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a class="mx-3" href="mailto:halilulucak@icloud.com" title="بيهانس">
                        <i class="fas fa-envelope text-2xl"></i>
                    </a>
                    <a class="mx-3" href="tel:+905382004466" title="لينكدإن">
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
                window.location.href = 'tr#contact';
            });
        });
    </script>
</body>

</html>
