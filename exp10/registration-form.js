function validate() {
    let name = document.getElementById('name').value;
    let empCode = document.getElementById('empcode').value;
    let basicSalary = document.getElementById('salary').value;
    let designation = document.getElementById('designation').value;
    let address = document.getElementById('address').value;
    let gender = document.registration.gender.value;
    let qualification = getQualification();
    let email = document.getElementById('email').value;

    if (name == '') {
        alert('Name field cannot be empty');
    } else if (empCode == '') {
        alert('Employee Code field cannot be empty');
    } else if (isNaN(empCode)) {
        alert('Employee Code must be in numeric');
    } else if (basicSalary == '') {
        alert('Basic Salary field cannot be empty');
    } else if (isNaN(basicSalary)) {
        alert('Basic Salary must be in numeric');
    } else if (designation == 'default') {
        alert('Designation field cannot be empty');
    } else if (address == '') {
        alert('Address field cannot be empty');
    } else if (gender == '') {
        alert('Gender field cannot be empty');
    } else if (qualification == null) {
        alert('Qualification field cannot be empty');
    } else if (email == '') {
        alert('E-Mail ID field cannot be empty');
    } else if (email.search('@') < 0 || email.search('.') < 0) {
        alert('Invalid E-Mail ID');
    } else {
        alert('Registered Successfully');
    }
}

function getQualification() {
    let isChecked = false;
    let qualification = null;
    for (let i = 0; i < 4; i++) {
        isChecked = document.registration.qualification[i].checked;
        if (isChecked) {
            if (qualification == null)
                qualification = document.registration.qualification[i].value;
            else
                qualification +=
                    ', ' + document.registration.qualification[i].value;
        }
    }
    return qualification;
}
