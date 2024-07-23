<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merve ♥ Halil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        .heart-footer::before,
        .heart-footer::after {
            content: "";
            position: absolute;
            bottom: 0;
            width: 50px;
            height: 80px;
            border-radius: 0 0 50px 50px;
            background: #ff6b6b;
        }

        .heart-footer::before {
            right: 50px;
            transform: rotate(45deg);
            transform-origin: 0 0;
        }

        .heart-footer::after {
            right: 0;
            transform: rotate(-45deg);
            transform-origin: 100% 0;
        }

        .heart-footer {
            position: relative;
            width: 100px;
            height: 80px;
            background: #ff6b6b;
            border-radius: 0 0 50px 50px;
            transform: rotate(45deg);
            margin: 0 auto;
        }

        .fade-in {
            animation: fadeIn 2s ease-in forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .pop-up {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 50;
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .pop-up-active {
            display: block;
        }
    </style>
</head>

<body class="bg-pink-100">
    <div class="bg-pink-100">
        <div class="container mx-auto p-6 fade-in">
            <header class="text-center mb-10">
                <div class="heart mb-4"></div>
                <h1 class="text-4xl mt-32 font-bold text-pink-600">Güzeller Güzeli Eşime </h1>


                <div class="flex items-center justify-center h-screen bg-pink-100">
                    <div class="heart-shape shadow-lg p-6 text-center text-red-600">
                        <p class="font-cursive">
                            O <span class= "text-green-300"> yemyeşil </span> gözlerinde kaybolmak hayatımın anlamını
                            orada
                            bulmak
                            istiyorum. gülüşünün ardındaki o
                            sevimli
                            sesler olmak istiyorum. <br>gözlerime aşkla bakıp <span class= "text-black">"seni
                                seviyorum"</span> demeni istiyorum.
                            seninle saatlerce metrobüs beklemek,
                        </p>
                    </div>
                </div>
            </header>

        </div>

        < <!-- Photo Section -->
            <section class="mb-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <img src="images/resim1.jpeg" alt="Photo 1"
                            class="w-full rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <img src="images/resim2.jpeg" alt="Photo 2"
                            class="w-full rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <img src="images/resim3.jpeg" alt="Photo 3"
                            class="w-full rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
                    </div>
                </div>
            </section>

            <!-- Meaningful Quote -->
            <section class="text-center mb-10">
                <p class="text-xl italic text-gray-700">" En komik, en tatlı ve en romantik couple kimmiş ? "</p>
            </section>





            <div class="heart-shape shadow-lg p-6 text-center text-red-600 mt-64 mb-64">
                <p class="font-cursive">
                    Seninle saatlerce yürümek istiyorum. seninle saatlerce konuşmak
                    istiyorum. seninle saatlerce susmak istiyorum.<br> seninle saatlerce uyumak istiyorum. seninle
                    saatlerce
                    uyanmak istiyorum. seninle saatlerce gülmek istiyorum.
                </p>
            </div>

            <!-- Music Player -->
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-pink-700 mb-10 mx-auto">
                <div class="relative" style="width: 400px; height: 300px; overflow: hidden;">
                    <img class="absolute inset-0 w-full h-full object-cover" src="images/gezme1.jpeg"
                        alt="Albüm Kapağı">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-50">
                    </div>
                </div>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-white">Sana Demek İstediğim</div>
                    <p class="text-gray-300 text-base">
                        her ne kadar eksik kalsa da
                    </p>
                </div>
                <div class="px-6 pt-2 pb-4">
                    <a href="https://www.youtube.com/watch?v=XKVa_JTDmC8&ab_channel=Destans%C4%B1Kelimeler"
                        target="_blank"
                        class="bg-white text-red-300 font-bold py-2 px-4 rounded-full hover:bg-red-700 inline-block text-center"><i
                            class="fa-solid fa-circle-play"></i></a>
                </div>
            </div>


            <div class="heart-shape shadow-lg p-6 text-center text-red-600 mt-64 mb-64">
                <p class="font-cursive">
                    seni saatlerce öpmek istiyorum. seninle saatlerce koklamak istiyorum. seninle saatlerce yan yana
                    olmak
                    istiyorum.
                    seninle saatlerce sevgi dolu olmak istiyorum.<br> seninle saatlerce mutlu olmak istiyorum. senin
                    gülürek
                    eğlenerek KERİZ demeni istiyorum.
                </p>
            </div>




            <section class="text-center mb-10">
                <h2 class="text-2xl font-bold text-pink-600 mb-4">Anılar Köşesi</h2>
                <button class="bg-pink-500 text-white font-bold py-2 px-4 rounded-full hover:bg-pink-700"
                    onclick="togglePopup()">Anıyı Göster</button>
            </section>

            <!-- Pop-up -->
            <div id="popup" class="pop-up">

                <div>
                    <img src="images/resim2.jpeg" alt="Photo 2"
                        class="w-full h-96 rounded-lg shadow-lg object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <p class="text-center">Bu fotimiz nereden aşkımm ? </p>
                <button class="bg-red-500 text-white font-bold py-2 px-4 rounded-full mt-4 hover:bg-red-700"
                    onclick="togglePopup()">Kapat</button>
            </div>




            <footer class="text-center mt-10 bg-pink-100 ">
                <p class="text-gray-700 mb-32 bg-pink-100">© 23.04 ♥ Merve ♥ Halil</p>
            </footer>
    </div>

    <script>
        function togglePopup() {
            var popup = document.getElementById("popup");
            popup.classList.toggle("pop-up-active");
        }
    </script>
</body>

</html>
