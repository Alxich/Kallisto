
//if page is rtl, we make it true else false (For owl carousel attr + Adding class to body)

export function rtlIndicator() {
    let rtlIndicator = false; //False by default

    if (document.documentElement.lang === "en-GB") {
        rtlIndicator = false;
        document.body.classList.add("en");
    }else if (document.documentElement.lang === "ru-RU") {
        rtlIndicator = false;
        document.body.classList.add("ru");
    }else if (document.documentElement.lang === "he-IL") {
        rtlIndicator = true;
        document.body.classList.add("he");
    }
    console.log(`The RTL indicator tells that the mode is : ${rtlIndicator}`);
}