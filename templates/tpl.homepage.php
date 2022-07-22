<?php
/*
*  Template Name: Homepage
*/

get_header();

?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        * {
            margin: 0;
        }
        .fullscreen-container {
            width: 100vw;
            height: 100vh;
            position: relative;
            background: yellowgreen;
            background-image: linear-gradient(to right, rgba(30, 52, 85, 0.3), rgba(190, 240, 130, 0.3), rgba(255, 50, 50, 0.3)), linear-gradient(to bottom, rgba(255, 250, 50, 0.8), rgba(127, 238, 170, 0.8), rgba(10, 215, 255, 0.8));
            background-size: 600vw 600vh;
            -webkit-animation: bg-gradient-changer 100s linear infinite;
            animation: bg-gradient-changer 100s linear infinite;
        }
        @-webkit-keyframes bg-gradient-changer {
            0% {
                background-position: 0% 0%;
            }
            25% {
                background-position: 100% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            75% {
                background-position: 0% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }
        @keyframes bg-gradient-changer {
            0% {
                background-position: 0% 0%;
            }
            25% {
                background-position: 100% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            75% {
                background-position: 0% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }
        .fullscreen-container .message-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Raleway', sans-serif;
            width: 60%;
        }
        @media screen and (min-width: 800px) {
            .fullscreen-container .message-box {
                width: 50%;
            }
        }
        @media screen and (min-width: 1000px) {
            .fullscreen-container .message-box {
                width: 40%;
            }
        }
        .fullscreen-container .message-box p {
            font-size: 6rem;
            text-align: center;
        }
        .fullscreen-container .message-box .msg1 {
            font-size: 2rem;
            font-weight: 300;
            line-height: 1;
            opacity: 0.8;
        }
        @media screen and (min-width: 500px) {
            .fullscreen-container .message-box .msg1 {
                font-size: 3rem;
            }
        }
        @media screen and (min-width: 800px) {
            .fullscreen-container .message-box .msg1 {
                font-size: 4rem;
            }
        }
        @media screen and (min-width: 1000px) {
            .fullscreen-container .message-box .msg1 {
                font-size: 5rem;
            }
        }
        .fullscreen-container .message-box .msg2 {
            font-size: 1.4rem;
            font-weight: 500;
            opacity: 0.5;
        }
        @media screen and (min-width: 500px) {
            .fullscreen-container .message-box .msg2 {
                font-size: 2.2rem;
            }
        }
        @media screen and (min-width: 800px) {
            .fullscreen-container .message-box .msg2 {
                font-size: 2.8rem;
            }
        }
        @media screen and (min-width: 1000px) {
            .fullscreen-container .message-box .msg2 {
                font-size: 4.2rem;
            }
        }
        .fullscreen-container .message-box footer {
            margin-top: 1rem;
            font-size: 1rem;
            text-align: right;
            opacity: 0.7;
        }
        @media screen and (min-width: 500px) {
            .fullscreen-container .message-box footer {
                font-size: 1.5em;
            }
        }
        @media screen and (min-width: 800px) {
            .fullscreen-container .message-box footer {
                margin-top: 2rem;
                font-size: 2rem;
            }
        }
        .fullscreen-container .opacity-0 {
            opacity: 0;
        }
        .fullscreen-container .show {
            -webkit-animation: show 2s linear;
            animation: show 2s linear;
        }
        @-webkit-keyframes show {
            0% {
                opacity: 0;
            }
            20% {
                opacity: 1;
            }
            80% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        @keyframes show {
            0% {
                opacity: 0;
            }
            20% {
                opacity: 1;
            }
            80% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
    </style>

    <div class="fullscreen-container">

        <div class="message-box message-box-1 opacity-0 show">
            <p class="msg1">Hello new user!</p>
            <p class="msg2">Welcome to Kallisto</p>
        </div>
        <div class="message-box message-box-2">
            <p class="msg1"></p>
            <p class="msg2"></p>
        </div>

    </div>

    <script>
        const hellos = [
            {
                lang: "English",
                msg1: "Hello new user!",
                msg2: "Welcome to Kallisto"
            },
            {
                lang: "Ukraine",
                msg1: 'Привіт друже!',
                msg2: 'Ласкаво просимо до Kallisto'
            },
            {
                lang: "Japanese",
                msg1: "こんにちは新しいユーザー！",
                msg2: "カリストへようこそ"
            },
            {
                lang: "Polish",
                msg1: "Witaj nowy użytkowniku!",
                msg2: "Witamy w Kallisto"
            },
            {
                lang: "Hebrew",
                msg1: "שלום משתמש חדש!",
                msg2: "ברוכים הבאים לקליסטו"
            },
            {
                lang: "Danish",
                msg1: "Hej ny bruger!",
                msg2: "Velkommen til Kallisto"
            },
            {
                lang: "German",
                msg1: "Hallo neuer Benutzer!",
                msg2: "Willkommen bei Kallisto"
            },
            {
                lang: "Italian",
                msg1: "Ciao nuovo utente!",
                msg2: "Benvenuto a Callisto"
            },
            {
                lang: "Slovak",
                msg1: "Dobrý deň, nový používateľ!",
                msg2: "Vitajte v Kallisto"
            },
            {
                lang: "Romanian",
                msg1: "Salutare utilizator nou!",
                msg2: "Bun venit la Kallisto"
            },
            {
                lang: "Slovenian",
                msg1: "Pozdravljeni novi uporabnik!",
                msg2: "Dobrodošli v Kallistu"
            }
        ];

        const box1 = document.querySelector(".message-box-1");
        const box2 = document.querySelector(".message-box-2");

        const duration = 2; // 2 seconds
        let startTime;
        let box1show = true;
        let box2show = false;

        let secondCount = 0;
        let indexCount = 0;

        const animate = (timestamp) => {

            let runtime = timestamp - startTime;
            runtime = (runtime / 1000).toFixed(0);

            if (runtime > secondCount + 1) {

                secondCount++;

            }

            if (indexCount >= hellos.length) {

                indexCount = 0;

            }

            if ((secondCount + duration) % (2 * duration) === 0 && box1show) {

                box2show = true;
                box1show = false;

                box2.classList.add("show");
                box1.classList.remove("show");
                box1.classList.add("opacity-0");

                nextRandomIndex = randomIndexes[indexCount];
                box2.innerHTML = displayMessageBox(nextRandomIndex);
                indexCount++;

            } else if (secondCount % (2 * duration) === 0 && box2show) {

                box2show = false;
                box1show = true;

                box1.classList.add("show");
                box2.classList.remove("show");
                box2.classList.add("opacity-0");

                nextRandomIndex = randomIndexes[indexCount];
                box1.innerHTML = displayMessageBox(nextRandomIndex);
                indexCount++;

            }

            requestAnimationFrame((timestamp) => {

                animate(timestamp);

            });

        };

        const animationTimer = () => {

            requestAnimationFrame((timestamp) => {

                startTime = timestamp;

                animate(timestamp);

            });

        };

        // create array of only indices

        let justIndexes = hellos.map((item, ind) => {
            return ind;
        });

        // create an array of indices that are in random order

        let randomIndexes = [];

        for (let i = 0, length = justIndexes.length; i < length; i++) {

            const randomIndex = Math.floor(Math.random() * justIndexes.length);
            randomIndexes[i] = justIndexes[randomIndex];

            // remove index from array

            justIndexes = justIndexes.filter((x) => x !== justIndexes[randomIndex]);

        }

        // generate HTML

        const displayMessageBox = (index) => {

            return `
              <p class="msg1">${hellos[index].msg1}</p>
              <p class="msg2">${hellos[index].msg2}</p>
            `;

        };

        // kick off timer animation

        animationTimer();

    </script>

<?php

get_footer();

?>