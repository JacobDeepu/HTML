function calculate() {
    let regno = parseInt(document.getElementById('regno').value);

    if (isNaN(regno)) {
        alert('Please Enter A Valid Regisration Number');
        document.getElementById('regno').focus();
        return 0;
    }

    let mark_one = parseInt(document.getElementById('mark1').value);
    let mark_two = parseInt(document.getElementById('mark2').value);
    let mark_three = parseInt(document.getElementById('mark3').value);

    if (isNaN(mark_one)) {
        alert('Please Enter MARK 1');
        document.getElementById('mark1').focus();
    } else if (isNaN(mark_two)) {
        alert('Please Enter MARK 2');
        document.getElementById('mark2').focus();
    } else if (isNaN(mark_three)) {
        alert('Please Enter MARK 3');
        document.getElementById('mark3').focus();
    } else {
        let total = mark_one + mark_two + mark_three;
        let result = findResult(mark_one, mark_two, mark_three);
        let grade = findGrade(total);
        document.getElementById('total').value = total;
        document.getElementById('result').value = result;
        document.getElementById('grade').value = grade;
    }
}

function findResult(mark_one, mark_two, mark_three) {
    if (mark_one <= 30 || mark_one <= 30 || mark_three <= 30) {
        return 'Failed';
    } else {
        return 'Passed';
    }
}

function findGrade(total) {
    if (total / 3 > 90)
        return 'S';
    else if (total / 3 > 80)
        return 'A';
    else if (total / 3 > 70)
        return 'B';
    else if (total / 3 > 60)
        return 'C';
    else if (total / 3 > 50)
        return 'D';
    else if (total / 3 > 30)
        return 'E';
    else
        return 'F';
}

function clearAll() {
    document.getElementById('regno').value = null;
    document.getElementById('mark1').value = null;
    document.getElementById('mark2').value = null;
    document.getElementById('mark3').value = null;
    document.getElementById('total').value = null;
    document.getElementById('result').value = null;
    document.getElementById('grade').value = null;
}
