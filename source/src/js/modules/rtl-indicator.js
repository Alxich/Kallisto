
//if page is rtl, we make it true else false (For owl carousel attr + Adding class to body)

export function rtlIndicator() {
    let rtlIndicator = false; //False by default

    if (document.documentElement.lang === "en-GB") {
        document.body.classList.add("en");
        rtlIndicator = false;
        console.log(`The RTL indicator tells that the mode is : ${rtlIndicator}`);
        return rtlIndicator;
    }else if (document.documentElement.lang === "ru-RU") {
        document.body.classList.add("ru");
        rtlIndicator = false;
        console.log(`The RTL indicator tells that the mode is : ${rtlIndicator}`);
        return rtlIndicator;
    }else if (document.documentElement.lang === "he-IL") {
        document.body.classList.add("he");
        rtlIndicator = true;
        console.log(`The RTL indicator tells that the mode is : ${rtlIndicator}`);
        return rtlIndicator;
    }
}