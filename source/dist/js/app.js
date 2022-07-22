/*!
Theme Name: kallisto
Theme URI: https://concept1.co.il/
Author: Roman Dudnyk
Author URI: http://dudnyk.rb@gmail.com
Description: This is wordpress theme made by Concept1. The url: <a href=\"https://concept1.co.il/\">concept1.co.il</a>
Version: 1.0.0
*/

'use strict'

// if page is rtl, we make it true else false (For owl carousel attr + Adding class to body)

function rtlIndicator() {

    if (document.documentElement.lang === "en-US") {

        document.body.classList.add("en");
        return false;

    } else if (document.documentElement.lang === "ru-RU") {

        document.body.classList.add("ru");
        return false;

    } else if (document.documentElement.lang === "he-IL") {

        document.body.classList.add("he");
        return true;

    } else {

        document.body.classList.add("unknown");
        return false;

    }

}

jQuery( document ).ready(function ($) {

    console.log(`The RTL indicator tells that the mode is: %c${rtlIndicator()}`, 'background: #363636; color: #67da55; font-weight: 700; text-transform: uppercase; letter-spacing: 1px');

    // Tabling the questions in product page

    function tabQuestions({tabChanger, tabContent}) {

        $(tabChanger).each(function (index) {

            if(index === 0) {

                $(this).addClass('active')
                $(`${tabContent}:nth-child(${index + 1})`).addClass('active');

            }

            $(this).on('click', function () {

                if(!($(this).hasClass('active'))) {

                    $(tabChanger).removeClass('active');
                    $(tabContent).removeClass('active');

                    $(this).addClass('active');
                    $(`${tabContent}:nth-child(${index + 1})`).addClass('active');

                }

            });

        });


    }

    // Function that removes jumping page on "overflow:hidden"

    function removeScrollJump() {

        if(window.screen.width >= 1000) {

            if($('body').hasClass('stop')) {

                $('body').css('margin-right', '17px');

            } else {

                $('body').css('margin-right', '0');
            }

        }

    }

    // Function to add scroll to anchor

    function scrollto() {

        $(document).on('click', 'a[href^="#"]', function (event) {

            event.preventDefault();

            $('html, body').animate({

                scrollTop: $($.attr(this, 'href')).offset().top

            }, 500);

        });

    }

});
