var textToType = "Juul Runner";
var typingSpeed = 200;

function typeText(text, speed) {
    var index = 0;
    var interval = setInterval(function() {
        document.getElementById("typed-text").textContent += text[index];
        index++;
        if (index === text.length) {
            clearInterval(interval);
        }
    }, speed);
}

window.onload = function() {
    typeText(textToType, typingSpeed);
};


