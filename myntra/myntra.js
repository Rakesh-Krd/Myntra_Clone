
   function mobile() {
    var mobile = document.getElementById("phone").value;
    console.log("Mobile number:", mobile);

    if (mobile.length < 10 || mobile.length > 10 || isNaN(mobile)) {
        window.alert("Invalid Mobile Number");
        console.log("Invalid mobile number");
        return false;
    } else {
        console.log("Valid mobile number");
        return true;
    }
}

function Email() {
    var Email = document.getElementById("Email").value;
    console.log("Email:", Email);

    if (Email.length < 5||Email===NULL) {
        window.alert("Invalid Email");
        console.log("Invalid Email");
        return false;
    } else {
        console.log("Valid Email");
        return true;
    }

}

