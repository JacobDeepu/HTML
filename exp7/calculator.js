var operator = "";
var firstOperand = "";
var secondOperand = "";
var opCount = 0;
var result = 0;

function inputData(val) {
    document.getElementById("input").value += val;

    if (getOperator(val)) {
        operator = getOperator(val);
        opCount += 1;
    }

    if (opCount == 0 && !(getOperator(val))) {
        firstOperand += val;
    }
    else if (opCount > 0 && !(getOperator(val))) {
        secondOperand += val;
        result = findResult();
    }
    else if (opCount > 1 && (getOperator(val))) {
        firstOperand = result;
        secondOperand = "";
    }
}
function getOperator(operator) {
    switch (operator) {
        case '+': return operator;
        case '-': return operator;
        case '*': return operator;
        case '/': return operator;
        default: return "";
    }
}
function findResult() {
    if (operator == "+") {
        result = parseFloat(firstOperand) + parseFloat(secondOperand);
    }
    else if (operator == "-") {
        result = parseFloat(firstOperand) - parseFloat(secondOperand);
    }
    else if (operator == "/") {
        if (secondOperand != "0") {
            result = parseFloat(firstOperand) / parseFloat(secondOperand);
        }
        else {
            result = "Can't divide by 0";
        }
    }
    else if (operator == "*") {
        result = parseFloat(firstOperand) * parseFloat(secondOperand);
    }
    else {
        result = 0;
    }
    return result;
}
function outputData() {
    document.getElementById("input").value = findResult();
}

function clearAll() {
    document.getElementById("input").value = "";
    operator = "";
    firstOperand = "";
    secondOperand = "";
    result = 0;
    opCount = 0;
}