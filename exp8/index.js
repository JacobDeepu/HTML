let fahrenheit;
let celsius;

function fahrenheitToCelsius() {
    fahrenheit = parseInt(document.getElementById('input').value);
    if (isNaN(fahrenheit)) {
        alert('Enter a valid temperature');
    } else {
        celsius = (fahrenheit - 32) * (5 / 9);
        document.getElementById('output').value = celsius + " C";
    }
}

function celsiusToFahrenheit() {
    celsius = parseInt(document.getElementById('input').value);
    if (isNaN(celsius)) {
        alert('Enter a valid temperature');
    } else {
        fahrenheit = celsius * (9 / 5) + 32;
        document.getElementById('output').value = fahrenheit + " F";
    }
}

function clearAll() {
    document.getElementById('input').value = null;
    document.getElementById('output').value = null;
}
