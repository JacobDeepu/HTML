function stringOperaions() {
    let string = document.getElementById('input').value;
    let sIndex = parseInt(document.getElementById('start').value);
    let eIndex = parseInt(document.getElementById('end').value);
    if (string == '') {
        alert('Enter the string !');
    } else if (!isNaN(string)) {
        alert('Enter a valid string');
    } else {
        document.getElementById('length').innerHTML =
            'String length: ' + string.length;
        document.getElementById('reverse').innerHTML =
            'Reversed String: ' + string.split('').reverse().join('');
        if (isNaN(sIndex) || isNaN(eIndex)) {
            alert('Starting or Ending index\nNull or Invalid');
        } else if (sIndex > string.length || eIndex > string.length) {
            alert('Starting or Ending index Invalid');
            document.getElementById('substring').innerHTML =
                'Substring: ' + 'Invalid';
        } else {
            document.getElementById('substring').innerHTML =
                'Substring: ' + string.substring(sIndex, eIndex);
        }
    }
}

function clearAll() {
    document.getElementById('input').value = null;
    document.getElementById('start').value = null;
    document.getElementById('end').value = null;
    document.getElementById('length').innerHTML = null;
    document.getElementById('reverse').innerHTML = null;
    document.getElementById('substring').innerHTML = null;
}
