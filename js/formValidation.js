// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

function validateForm() {
    var firstName = document.signupForm.fname.value;
    var lastName = document.signupForm.lname.value;
    var email = document.signupForm.email.value;
    var password = document.signupForm.password.value;
    var college = document.signupForm.college.value;
    var major = document.signupForm.major.value;
    var invalidInput = /^[a-zA-Zs]+$/;

    // Defining error variables with a default value
    var fnameError = lnameError = emailError = passwordError = collegeError = majorError = true;
    
    // Validate first name
    if (firstName == "") {
        printError("fnameError", "Please enter your first name");
        document.getElementById("firstName").style.borderColor = "red";
    } else {
        if (invalidInput.test(firstName) === false) {
            printError("fnameError", "Please enter a valid first name");
            document.getElementById("firstName").style.borderColor = "red";
        } else {
            printError("fnameError", "");
            fnameError = false;
            document.getElementById("firstName").style.borderColor = "";
        }
    }
    // Validate last name
    if (lastName == "") {
        printError("lnameError", "Please enter your last name");
        document.getElementById("lastName").style.borderColor = "red";
    } else {
        if (invalidInput.test(lastName) === false) {
            printError("lnameError", "Please enter a valid last name");
            document.getElementById("lastName").style.borderColor = "red";
        } else {
            printError("lnameError", "");
            lnameError = false;
            document.getElementById("lastName").style.borderColor = "";
        }
    }

    // Validate email address
    if (email == "") {
        printError("emailError", "Please enter your email address");
        document.getElementById("email").style.borderColor = "red";
    } else {
        printError("emailError", "");
        emailError = false;
        document.getElementById("email").style.borderColor = "";
    }

    // Validate password
    if (password == "") {
        printError("passwordError", "Please enter password");
        document.getElementById("password").style.borderColor = "red";
    } else {
        printError("passwordError", "");
        passwordError = false;
        document.getElementById("password").style.borderColor = "";
    }

    // Validate college name
    if (college == "") {
        printError("collegeError", "Please enter your college name");
        document.getElementById("college").style.borderColor = "red";
    } else {
        printError("collegeError", "");
        collegeError = false;
        document.getElementById("college").style.borderColor = "";
    }

    // Validate college major
    if (major == "") {
        printError("majorError", "Please enter your major");
        document.getElementById("major").style.borderColor = "red";
    } else {
        printError("majorError", "");
        collegeError = false;
        document.getElementById("major").style.borderColor = "";
    }
}

// Reset Form
function resetForm() {
    document.getElementById("signupForm").reset();
    // First name field reset
    document.getElementById("firstName").style.borderColor = "";
    // Last name field reset
    document.getElementById("lastName").style.borderColor = "";
    // Email field reset
    document.getElementById("email").style.borderColor = "";
    // Password field reset
    document.getElementById("password").style.borderColor = "";
    // College field reset
    document.getElementById("college").style.borderColor = "";
    // Major field reset
    document.getElementById("major").style.borderColor = "";
    // Hide error messages
    printError("fnameError", "");
    printError("lnameError", "");
    printError("emailError", "");
    printError("passwordError", "");
    printError("collegeError", "");
    printError("majorError", "");
}
