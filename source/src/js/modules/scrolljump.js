
// Function that removes jumping page on "overflow:hidden"

export function removeScrollJump() {

    if(window.screen.width >= 1000) {

        if($('body').hasClass('stop')) {

            $('body').css('margin-right', '17px');

        } else {

            $('body').css('margin-right', '0');


        }
    }

}