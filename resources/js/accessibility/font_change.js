const defaultFontSize = "12pt";
const fontVariation = "14pt";

const changeFont = () => {
    const DOM = document.documentElement;
    const currentFontSize = DOM.style.fontSize;

    if (currentFontSize === defaultFontSize || !currentFontSize)
        DOM.style.fontSize = fontVariation;
    else
        DOM.style.fontSize = defaultFontSize;
}
