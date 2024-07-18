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
                        <li class="nav-item"><a class="nav-link" href="#">Selamlama</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Hakkımda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#education">Eğitimim</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">
                                Deneyimlerim
                        <li class="nav-item"><a class="nav-link" href="#skills">Becerilerim</a></li>
                        <li class="nav-item"><a class="nav-link" href="#volunt">Gönüllülüklerim</a></li>
                        </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#project">Projelerim</a></li>

                        <li class="nav-item"><a class="nav-link" href="#contact">İletişim</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/download-cv') }}">PDF İndir</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-earth-americas"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="" onclick="changeLanguage('tr')">Türkçe</a>
                                </li>
                                <li><a class="dropdown-item"href="/en">English</a>
                                </li>
                                <li><a class="dropdown-item" href="/ar" onclick="changeLanguage('ar')">العربية</a>
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
                                    <p class="mb-1 text-lg font-bold text-gray-700 italic">SELECT * FROM ziyaretçiler
                                        WHERE
                                        name = ' <span class="" style="color: #858585;">{{ $username }}</span> ' ;
                                    </p>
                                    <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">Selamlar
                                        Ben Halil KÖSE</h1>
                                    <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">YAZILIM
                                        MÜHENDİSLİĞİ</p>
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
                                        <a class="btn mt-1 hover-effect btn-custom" href="#contact"> İletişime Geçin
                                            <i class="fa-solid fa-paper-plane"></i> </a>
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
                        <h2 class="marker marker-center">Kısaca Ben Kimim ?</h2>
                    </div>
                    <div class="px-4 lg:px-32">
                        <div class="max-w-4xl mx-auto">
                            <div class="text-left mb-8">
                                <p class="text-lg text-gray-800">
                                    <strong> Son Sınıf Yazılım Mühendisliği öğrencisi </strong> olarak, teorik bilgileri
                                    pratiğe dökmek için aktif bir çaba içerisindeyim. Yazılım geliştirme sürecinde
                                    <strong> Laravel</strong> gibi güçlü
                                    framework'ler ve <strong>Tailwind CSS </strong>gibi modern frontend araçları
                                    kullanarak çeşitli projeler geliştiriyorum. Bu projeler, hem teknik bilgimi
                                    derinleştiriyor hem de yazılım mühendisliği
                                    becerilerimi gerçek dünyada test etme fırsatı sunuyor.
                                </p>
                                <p class="text-lg text-gray-800">
                                    Eğitim, seminerler ve etkinliklere düzenli olarak katılarak bilgi birikimimi
                                    genişletiyorum. Bu etkinlikler, sektördeki en son gelişmeleri takip etmemi ve
                                    yenilikçi çözümler üretmeme yardımcı oluyor.
                                    Aynı zamanda, bu etkinlikler sayesinde farklı uzmanlık alanlarından
                                    <strong>profesyonellerle tanışma ve ağ kurma </strong>fırsatım oluyor. Bu da bana,
                                    mesleki gelişimim açısından büyük fayda sağlıyor.
                                </p>
                                <p class="text-lg text-gray-800">
                                    Pratik uygulamalarla teorik bilgileri harmanlayarak, kişisel gelişimime büyük bir
                                    katkı sağlamayı hedefliyorum. Bu dengeyi kurmak, sadece benim için değil, aynı
                                    zamanda çevreme de değer katmamı
                                    sağlıyor. Çeşitli <strong> projelerde yer alarak ve farklı bakış açıları
                                        geliştirerek</strong>, yazılım mühendisliği alanında daha kapsamlı ve
                                    <strong>yetkin bir mühendis </strong>olmayı amaçlıyorum.
                                </p>
                                <p class="text-lg text-gray-800">
                                    Mesleğimin gereklilikleri doğrultusunda, sadece bir alanda değil, birçok farklı
                                    alanda bilgi sahibi olmayı hedefliyorum. Farklı alanlarda edindiğim bilgiler,
                                    <strong> problem çözme yeteneğimi artırıyor </strong>ve projelerime daha yaratıcı
                                    çözümler getirmemi sağlıyor. Bu şekilde,
                                    <strong>hem kendi kariyerime hem de çalıştığım projelere değer katmayı
                                        amaçlıyorum</strong>.
                                </p>
                                <p class="text-lg text-gray-800">
                                    Sonuç olarak, teorik bilgi ile pratik uygulama arasındaki dengeyi kurarak, hem
                                    kişisel hem de mesleki gelişimime katkı sağlamak ve çevreme değer katmak için çaba
                                    gösteriyorum. Yazılım mühendisliği
                                    alanında kapsamlı bir bilgi birikimine sahip olarak, gelecekte daha büyük ve etkili
                                    projelerde yer almayı hedefliyorum. Bu yolculukta <strong>sürekli öğrenme ve gelişim
                                    </strong>anlayışıyla hareket
                                    ederek, kendimi ve çevremi sürekli olarak ileriye taşımayı amaçlıyorum.
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
                    <div class="h5 mt-3">Mühendislik</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400">
                    <img class="mb-2 mx-auto d-block" src="images/services/resim1.svg" width="96" height="96"
                        alt="app development" />
                    <div class="h5 mt-3">Analiz ve Tasarım</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img class="mb-2 mx-auto d-block" src="images/services/arka.svg" width="96" height="96"
                        alt="web design" />
                    <div class="h5 mt-3">Arka Uç ve Veri Tabanı</div>
                </div>
                <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img class="mb-2 mx-auto d-block" src="images/services/on.svg" width="96" height="96"
                        alt="graphic design" />
                    <div class="h5 mt-3">Ön Uç ve Arayüz</div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mb-5 pt-5" id="education">
        <h2 class="marker marker-center">Eğitimim</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="h5 mb-1">İstanbul Sabahattin Zaim Üniversitesi</h3>
                            <div class="text-small">Yazılım Mühendisliği (%30 İngilizce)</div>
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
                            <h3 class="h5 mb-1">Anadolu Üniversitesi</h3>
                            <div class="text-small">İlahiyat Ön lisans (3.21)</div>
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
                <h2 class="marker marker-center">Deneyimlerim</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                        <div class="card-header px-3 py-2">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="h5 mb-1">
                                        MFE Teknoloji A.Ş. <br />
                                        Uzun Dönem Stajyer
                                    </h3>
                                    <div class="text-muted text-small">Ock 2024 - Tem 2024 <small></small></div>
                                </div>
                                <img src="images/team/mfe.jpeg" width="64" height="30" alt="university"
                                    style="border-radius: 50%; border-color: #515151;" />
                            </div>
                        </div>
                        <div class="card-body px-3 py-2">
                            <p>
                                Laravel ve PHP alanlarında çalıştım, gerçek projelere katkı sağladım. Ekip çalışmasıyla
                                projelerin başarılı bir şekilde tamamlanmasına yardımcı oldum. Bu deneyimle gelişmeye ve
                                yeni projelere daha geniş
                                bir perspektiften bakma şansı elde ettim.
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
                                        Stajyer
                                    </h3>
                                    <div class="text-muted text-small">Tem 2023 - Eyl 2023 <small></small></div>
                                </div>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK7kFQJaZvazQNhWIGm6e-wOi60qA5IXXQfw&s"
                                    width="64" height="30" alt="university"
                                    style="border-radius: 50%; border-color: #515151;" />
                            </div>
                        </div>
                        <div class="card-body px-3 py-2">
                            <p>
                                Çeşitli alanlarda deneyim kazanma fırsatı bulduğum ve kişisel gelişimime büyük katkı
                                sağlayan gönüllü stajımı tamamladım. Bu deneyim sayesinde gelecek hedeflerime daha da
                                yakınlaşmanın şansını elde
                                ettiğim için çok mutluyum.
                            </p>
                            <p class="text-center">Linux Sistem Yönetimi · Docker · Minikube · DevOps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5" id="skills">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">Becerilerim</h2>
            </div>
            <div class="text-center">
                <p class="mx-auto mb-2 text-center" style="max-width: 600px;">
                    Yazılım geliştirme, sadece kod yazmakla ilgili değildir; <br />
                    aynı zamanda <strong>problem çözme</strong>, yenilikçilik ve <strong>sürekli öğrenme</strong>
                    sürecidir.
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
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">İngilizce B2
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
                            <div class="d-flex text-small fw-bolder"><span class="me-auto">Arapça
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
        <h2 class="marker marker-center">Gönüllü Faaliyetlerim</h2>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="h5 mb-1">İstanbul Sabahattin Zaim Üniversitesi Bilişim Teknolojileri Kulübü</h3>
                            <div class="text-muted text-small">
                                Yönetim Kurulu Başkanlığı <br />
                                Haz 2022 - Eki 2023
                            </div>
                        </div>
                        <img src="https://pbs.twimg.com/profile_images/1043243777178193923/3lxnsBNW_400x400.jpg"
                            width="70" height="48" alt="university" style="border-radius: 50%;" />
                    </div>
                </div>
                <div class="card-body px-3 py-2">
                    <p>
                        Bu süreçte çeşitli alanlarda kendimi geliştirme fırsatı buldum. Her işte olduğu gibi, kulüp
                        çalışmalarımızda da <strong>iletişim</strong> en önemli unsurlardan biriydi. Özellikle takım
                        arkadaşları ile olan
                        iletişim, başarımızın temel taşıydı. Kulüp faaliyetlerimiz sırasında birçok farklı insanla bir
                        araya geldik, yeni ekip arkadaşları edindik ve farklı kitlelere hitap eden <strong>Teknofest
                            projeleri</strong>ni
                        başarıyla gerçekleştirdik.
                    </p>
                    <p class="text-center">
                        Ekip Çalışması · Organizasyon Yetenekleri · Problem Çözme
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
                            <h3 class="h5 mb-1">Türkiye Teknoloji Takımı T3 Vakfı</h3>
                            <div class="text-muted text-small">Egitmen Mentor - Bursiyeri</div>
                            <div class="text-muted text-small">Şub 2024 - Halen</div>
                        </div>
                        <img src="https://cdnkariyer.t3vakfi.org/media/upload/userFormUpload/MjhKALkcOKCCDVaN4V7diEPbP0Rkjl2n.png"
                            width="70" height="48" alt="web design" style="border-radius: 50%;" />
                    </div>
                </div>
                <div class="card-body px-3 py-2">
                    <p>
                        T3 Vakfi'nin düzenledigi Özdemir Bayraktar Milli Teknoloji Burs Programi kapsaminda 720
                        üniversite ögrencisine 10 ay boyunca verilen, bölümlerine göre yetkin olduklari alanlarda
                        Deneyap Teknoloji Atölyelerinde
                        egitim alan ögrencilere egitmenlik yapma ve yarişmalar için desteklenen takimlara mentorluk
                        yapma imkani sunan burs programidir.
                    </p>
                    <p class="text-center">
                        Yönetici Desteği · Planlama · Mentorluk · Bilgi Teknolojisi
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5 items-center" id="project">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">Projelerim</h2>
            </div>
            <div class="text-center">
                <p class="mx-auto mb-2 text-center" style="max-width: 600px;">Diğer birçok projeme göz atmak için <a
                        href="https://linktr.ee/halilkoseh">GitHub</a> sayfamı ziyaret edebilirsiniz.</p>
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
                                İş Yönetimi Artık Çok Kolay!
                            </h2>
                            <p class="mt-2 text-gray-600">
                                Task Monitor ile işlerinizi ve projelerinizi daha verimli bir şekilde yönetin. Kullanıcı
                                dostu arayüzü ve kapsamlı özellikleriyle Task Monitor, iş takibinde yeni bir çağ
                                başlatıyor.
                            </p>
                            <p class="mt-2 text-gray-600">Laravel, PHP ve Tailwind CSS ile yazıldı.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">Web Sistem Yazılımı </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/Task-Monitor" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">Proje Detayları</a>
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
                                Güvenle Mesajlaş!
                            </h2>
                            <p class="mt-2 text-gray-600">
                                Kullanıcı dostu Flutter uygulaması ile mesajlaşın. APK dosyası ile indirin ve kullanmaya
                                başlayın. Size özel sohbet odası oluşturun ve arkadaşlarınızla mesajlaşın.
                            </p>
                            <p class="mt-2 text-gray-600">Flutter, dart ve Firebase ile yazıldı.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">Mobil uygulama Yazılımı </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/Firebase-for-Flutter" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">Proje Detayları</a>
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
                                Randevu Alım Botu:<br />
                                Başlatın ve Bekleyin!
                            </h2>
                            <p class="mt-2 text-gray-600">
                                Python ve Selenium ile yazılan bu bot, randevu alım işlemlerini sizin için hızlı ve
                                kolay bir hale getirir. Sadece başlatın ve bekleyin!
                            </p>
                            <p class="mt-2 text-gray-600">Python, Selenium ve Sevgi ile yazıldı.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">Otomasyon Yazılımı </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/proxyFinder" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">Proje Detayları</a>
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
                                2. Ele Can Suyu:<br />
                                Bütçenize Uygun Araç
                            </h2>
                            <p class="mt-2 text-gray-600">
                                Kullanıcıların araçlarını platform üzerinden ilan vermesine, araçları aramasına ve
                                hayalindeki aracı bulmasına olanak sağlıyor.
                            </p>
                            <p class="mt-2 text-gray-600">Java , Swing ve MySQL ile yazıldı.</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 pl-4">Java uygulama Yazılımı </span>
                        </div>
                        <div>
                            <a href="https://github.com/halilkoseh/aracAlimSatim-JAVA-" target="_blank"
                                class="font-semibold hover:underline" style="color: #212529;">Proje Detayları</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">İletişim</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-light my-2 p-3 pt-2">
                        @if (session('success'))
                            <div class="popup-message">
                                ㅤㅤㅤㅤㅤㅤ <i class="fa-solid fa-check-double"></i> {!! session('success') !!}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group my-2">
                                <label for="name" class="form-label fw-bolder">Adınız ve Soyadınız</label>
                                <input class="form-control" type="text" id="name" name="name" required />
                            </div>
                            <div class="form-group my-2">
                                <label for="email" class="form-label fw-bolder">Email adresiniz</label>
                                <input class="form-control" type="email" id="email" name="email" required />
                            </div>
                            <div class="form-group my-2">
                                <label for="message" class="form-label fw-bolder">Mesajınızı iletebilirsiniz</label>
                                <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
                            </div>


                            <style>
                                /* Popup Style */
                                .popup-message {
                                    display: none;
                                    position: fixed;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    background-color: #fff;
                                    color: #333;
                                    padding: 20px;
                                    border-radius: 10px;
                                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                                    z-index: 1000;
                                    text-align: center;
                                    max-width: 300px;
                                    font-family: Arial, sans-serif;
                                }

                                .popup-message h2 {
                                    font-size: 24px;
                                    margin-bottom: 10px;
                                }

                                .popup-message p {
                                    font-size: 16px;
                                    line-height: 1.6;
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
                                <button class="btn mt-2     custom-bg text-white border-2 border-black"
                                    type="submit">Gönder <i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-3 px-1">
                        <div class="h5">Dilediğiniz Zaman Ulaşabilirsiniz</div>
                        <p>
                            Herhangi bir konuda irtibata geçmek isterseniz,<br />
                            iletişim formu veya aşağıdaki bilgilerimle bana ulaşabilirsiniz.
                        </p>
                        <p>Görüşmek üzere!</p>
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
                                <div class="pb-1">Telefon:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">+90 538 200 44 66</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="pb-1">Konum:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="pb-1 fw-bolder">İstanbul, Türkiye</div>
                            </div>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385396.3209838703!2d28.68254236817699!3d41.005370229301256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1721059499756!5m2!1str!2str"
                            width="410" height="211" style="border: 1px;" allowfullscreen="" loading="lazy"
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
                    <strong>Yazılım mühendisliği</strong>, sadece kod yazmak değil; <br />
                    sorun çözme sanatı ve <strong>sürekli öğrenme tutkusudur</strong>.
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
                window.location.href = 'tr#contact';
            });
        });
    </script>
</body>

</html>
