// Tabling the questions in product page

export function tabQuestions({tabChanger, tabContent}) {

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