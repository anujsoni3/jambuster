// Function to validate login form
function validateLoginForm() {
    var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;

    const parts = email.split('@');
    if (parts.length !== 2) {
        alert("Invalid email format");
        return false;
    }

    const domainParts = parts[1].split('.');
    if (domainParts.length < 2) {
    alert("Invalid email format");
    return false;
    }
    if (password.length < 6) {
        alert("Password should contain at least 6 characters");
        return false;
    }
    return true;

    
}

// Function to validate create account form
function validateCreateAccountForm() {
    var username = document.forms["createAccountForm"]["username"].value;
    var email = document.forms["createAccountForm"]["email"].value;
    var password = document.forms["createAccountForm"]["password"].value;

    if (username.length < 6) {
        alert("First name should contain at least 6 characters");
        return false;
    }

    for (let i = 0; i < username.length; i++) {
        if (!(username[i] >= 'a' && username[i] <= 'z') && !(firstName[i] >= 'A' && firstName[i] <= 'Z')) {
            alert("First name should contain only alphabets");
            return false;
        }
    }

    const parts = email.split('@');
    if (parts.length !== 2) {
        alert("Invalid email format");
        return false;
    }

    const domainParts = parts[1].split('.');
    if (domainParts.length < 2) {
    alert("Invalid email format");
    return false;
    }

    if (password.length < 6) {
        alert("Password should contain at least 6 characters");
        return false;
    }
    



return 'true';
}

// Function to validate forgot password form
function validateForgotPasswordForm() {
    var email = document.forms["forgotPasswordForm"]["email"].value;

    const parts = email.split('@');
    if (parts.length !== 2) {
        alert("Invalid email format");
        return false;
    }

    const domainParts = parts[1].split('.');
    if (domainParts.length < 2) {
       alert("Invalid email format");
       return false;
    }

    return 'true';
}