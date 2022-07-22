<?php
/*
*  Template Name: Homepage
*/

get_header();

?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        * {
            font-family: 'Raleway', sans-serif;
            margin: 0;
        }
        body {
            overflow: hidden;
        }
        .fullscreen-container {
            position: relative;
            background: #b0c0e1;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.3), rgb(255, 255, 255), rgb(255, 255, 255)), linear-gradient(to bottom, rgb(176, 192, 225), rgba(127, 238, 170, 0.8), rgba(10, 215, 255, 0.8));
            background-size: 600vw 600vh;
            width: 100vw;
            height: 100vh;
            -webkit-animation: bg-gradient-changer 100s linear infinite;
            animation: bg-gradient-changer 100s linear infinite;
        }
        .fullscreen-container .edit-page {
            position: absolute;
            top: 3%;
            left: 0;
            width: 100vh;
            font-size: 1vw;
            font-weight: 500;
            line-height: 1.4;
            padding-left: 25px;
        }
        .fullscreen-container .edit-page p {
            opacity: 0.8;
        }
        .fullscreen-container .edit-page.show {
            -webkit-animation: show 2s linear;
            animation: show 2s linear;
        }
        .fullscreen-container .edit-page.opacity-0 {
            opacity: 0;
        }
        .fullscreen-container .message-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            transform: translate(-50%, -50%);
        }
        .fullscreen-container .message-box p {
            font-size: 6rem;
            text-align: center;
        }
        .fullscreen-container .message-box .msg1 {
            font-size: 6vw;
            font-weight: 300;
            line-height: 1.4;
            opacity: 0.8;
        }
        .fullscreen-container .message-box .msg2 {
            font-size: 3vw;
            font-weight: 500;
            opacity: 0.5;
        }
        .fullscreen-container .opacity-0 {
            opacity: 0;
        }
        .fullscreen-container .show {
            -webkit-animation: show 2s linear;
            animation: show 2s linear;
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

        <span class="edit-page edit-page-box-1">
            <p class="edit">To edit, go to index.php</p>
        </span>
        <span class="edit-page edit-page-box-2 opacity-0 show">
            <p class="edit">To edit, go to index.php</p>
        </span>

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
                lang: 'English',
                msg1: 'Hello new user!',
                msg2: 'Welcome to Kallisto',
                edit: 'To edit, go to index.php'
            },
            {
                lang: 'Ukraine',
                msg1: 'Привіт друже!',
                msg2: 'Ласкаво просимо до Kallisto',
                edit: 'Щоб редагувати перейдіть у index.php'
            },
            {
                lang: 'Japanese',
                msg1: 'こんにちは新しいユーザー！',
                msg2: 'カリストへようこそ',
                edit: '編集するには、index.phpにアクセスします'
            },
            {
                lang: 'Polish',
                msg1: 'Witaj nowy użytkowniku!',
                msg2: 'Witamy w Kallisto',
                edit: 'Aby edytować, przejdź do index.php'
            },
            {
                lang: 'Hebrew',
                msg1: 'שלום משתמש חדש!',
                msg2: 'ברוכים הבאים לקליסטו',
                edit: 'כדי לערוך, עבור אל index.php'
            },
            {
                lang: 'Danish',
                msg1: 'Hej ny bruger!',
                msg2: 'Velkommen til Kallisto',
                edit: 'For at redigere, gå til index.php'
            },
            {
                lang: 'German',
                msg1: 'Hallo neuer Benutzer!',
                msg2: 'Willkommen bei Kallisto',
                edit: 'Gehen Sie zum Bearbeiten zu index.php'
            },
            {
                lang: 'Italian',
                msg1: 'Ciao nuovo utente!',
                msg2: 'Benvenuto a Callisto',
                edit: 'Per modificare, vai su index.php'
            },
            {
                lang: 'Slovak',
                msg1: 'Dobrý deň, nový používateľ!',
                msg2: 'Vitajte v Kallisto',
                edit: 'Ak chcete upraviť, prejdite na index.php'
            },
            {
                lang: 'Romanian',
                msg1: 'Salutare utilizator nou!',
                msg2: 'Bun venit la Kallisto',
                edit: 'Pentru a edita, accesați index.php'
            },
            {
                lang: 'Slovenian',
                msg1: 'Pozdravljeni novi uporabnik!',
                msg2: 'Dobrodošli v Kallistu',
                edit: 'Za urejanje pojdite na index.php'
            }
        ];

        const box1 = document.querySelector(".message-box-1");
        const box2 = document.querySelector(".message-box-2");
        const edit = document.querySelector(".edit");
        const editCn1 = document.querySelector(".edit-page-box-1");
        const editCn2 = document.querySelector(".edit-page-box-2");

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
                editCn2.classList.remove("show");
                box1.classList.remove("show");
                box1.classList.add("opacity-0");
                editCn1.classList.remove("opacity-0");

                nextRandomIndex = randomIndexes[indexCount];
                box2.innerHTML = displayMessageBox(nextRandomIndex);
                edit.innerHTML = displayEditBox(nextRandomIndex);
                indexCount++;

            } else if (secondCount % (2 * duration) === 0 && box2show) {

                box2show = false;
                box1show = true;

                box1.classList.add("show");
                editCn1.classList.add("show");
                box2.classList.remove("show");
                box2.classList.add("opacity-0");
                editCn2.classList.add("opacity-0");

                nextRandomIndex = randomIndexes[indexCount];
                box1.innerHTML = displayMessageBox(nextRandomIndex);
                edit.innerHTML = displayEditBox(nextRandomIndex);
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

        const displayEditBox = (index) => {
            return `
              <p class="edit">${hellos[index].edit}</p>
            `
        };

        // kick off timer animation

        animationTimer();

    </script>

<?php

get_footer();

?>