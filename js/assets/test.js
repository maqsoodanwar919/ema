window.onload = function() {
    var inputs = document.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('blur', myFun);
    }
};


function myFun() { 

    var correct_way = /^[A-Za-z ]+$/;  
    var correct_pass = /^[A-Za-z0-9!@#$%^&*()_]{5,25}$/;   

    var a = document.getElementById("user_name").value;
    var p = document.getElementById("password").value;
    var c = document.getElementById("confirm_password").value;
    var e = document.getElementById("email").value;
    var ph = document.getElementById("phone").value;
    var social = document.getElementsByName("social");
    var custom_check = document.getElementsByClassName("custom_check");


    
    // User Name
    if (a == "") {
        document.getElementById("massage").innerHTML = "*please enter first name*";
        document.getElementById("user_name").classList.add("error");
        return false;
    } 
    else if (!a.match(correct_way)) {
        document.getElementById("massage").innerHTML = "*please enter only alphabets*";
        document.getElementById("user_name").classList.add("error");
        return false;
    } else if (a.length < 3) {
        document.getElementById("massage").innerHTML = "*please enter min 3 characters*";
        document.getElementById("user_name").classList.add("error");
        return false;
    } else if (a.length > 20) {
        document.getElementById("massage").innerHTML = "*please enter max 20 characters*";
        document.getElementById("user_name").classList.add("error");
        return false;
    } else {
        document.getElementById("user_name").classList.add("Success");
        document.getElementById("massage").innerHTML = "";
    }


    // Email
    if (e == "") {
        document.getElementById("email_massage").innerHTML = "*please enter an email*";
        document.getElementById("email").classList.add("error");
        return false;
    }
    else if (e.indexOf('@') <= 0) {
        document.getElementById("email_massage").innerHTML = "*invalid @ position*";
        document.getElementById("email").classList.add("error");
        return false;
    }
    else if ((e.charAt(e.length - 4)!='.') && (e.charAt(e.length - 3)!='.')) {
        document.getElementById("email_massage").innerHTML = "*invalid . position*";
        document.getElementById("email").classList.add("error");
        return false;
    } 
    else {
        document.getElementById("email").classList.add("Success");
        document.getElementById("email_massage").innerHTML = ""; 
    }

    // Password
    if (p == "") {
        document.getElementById("p_password").innerHTML = "*please enter a password*";
        document.getElementById("password").classList.add("error");
        return false;
    }  
    else if (p.length < 5) {
        document.getElementById("p_password").innerHTML = "*please enter min 5 characters*";
        document.getElementById("password").classList.add("error");
        return false;
    }  
    else if (p!= c) {
        document.getElementById("c_massage").innerHTML = "*passwords do not match*";
        document.getElementById("confirm_password").classList.add("error");
        return false;
    }  
    else {
        document.getElementById("password").classList.add("Success");
        document.getElementById("p_password").innerHTML = "";
        document.getElementById("confirm_password").classList.add("Success");
        document.getElementById("c_massage").innerHTML = "";
    }  

    // Phone
    if (ph == "") {
        document.getElementById("phone_massage").innerHTML = "*please enter a phone number*";
        document.getElementById("phone").classList.add("error");
        return false;
    }  
    else if (isNaN(ph)) {
        document.getElementById("phone_massage").innerHTML = "*please enter only digits*";
        document.getElementById("phone").classList.add("error");
        return false;
    }  
    else if (ph.length < 10) {
        document.getElementById("phone_massage").innerHTML = "*please enter min 10 characters*";
        document.getElementById("phone").classList.add("error");
        return false;
    }  
    else if (ph.charAt(0) != '9' && ph.charAt(0) != '7' && ph.charAt(0) != '8') {
        document.getElementById("phone_massage").innerHTML = "*please start with 9, 7, or 8*";
        document.getElementById("phone").classList.add("error");
        return false;
    }   
    else {
        document.getElementById("phone").classList.add("Success");
        document.getElementById("phone_massage").innerHTML = ""; 
    }  

    // Radio buttons
    var socialChecked = false;
    for (var i = 0; i < social.length; i++) {
        if (social[i].checked) {
            socialChecked = true;
            break;
        }
    }
    if (!socialChecked) {
        document.getElementById("social_massage").innerHTML = "*please select one*";
        return false;
    } else {
        document.getElementById("social_massage").innerHTML = ""; 
    }

    // checkbox buttons
    var customCheck = false;
    for (var i = 0; i < custom_check.length; i++) {
        if (custom_check[i].checked) {
            customCheck = true;
            break;
        }
    }
    if (!customCheck) {
        document.getElementById("custom_check_massage").innerHTML = "*please select one*";
        return false;
    } else {
        document.getElementById("custom_check_massage").innerHTML = ""; 
    }
 
    
    // If all are valid
    return true;
}
