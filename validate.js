function validateForm() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("mobile").value.trime();
    let password = document.getElementById("password").value.trim();
    let mobileRegex = /^[0-9]{10}$/;
    if (name === "" || email === "" || password === "" || phone === "") {
        alert("All fields are required!");
        return false;
    }
    if (password.length < 6) {
        alert("Password must be at least 6 characters!");
        return false;
    }
    if (!mobileRegex.test(phone)) {
        alert("Enter a valid 10-digit mobile number!");
        return false;
    }
    return true;
}

function validateLogin() {
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    if (email === "" || password === "") {
        alert("All fields are required!");
        return false;
    }
    return true;
}