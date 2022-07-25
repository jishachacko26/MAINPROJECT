var gender = document.reg_form.gender;
var email = document.reg_form.email;
var mobile = document.reg_form.mobile;
var course = document.reg_form.course;

if (fname.value.length <= 0) {
    alert("Name is required");
    fname.focus();
    return false;
}
var dob = document.reg_form["ProcessInfo"]["txtDOB"].birthday;
var pattern = /^([0-9]{2})-([0-9]{2})-([0-9]{4})$/;
if (dob == null || dob == "" || !pattern.test(dob)) {
    errMessage += "Invalid date of birth\n";
    return false;
}
else {
    return true
}

if (gender.value.length <= 0) {
    alert("Gender is required");
    gender.focus();
    return false;
}
if (email.value.length <= 0) {
    alert("Email Id is required");
    email.focus();
    return false;
}
var gender = document.reg_form.gender;
var email = document.reg_form.email;
var mobile = document.reg_form.mobile;
var course = document.reg_form.course;

if (fname.value.length <= 0) {
    alert("Name is required");
    fname.focus();
    return false;
}
var dob = document.reg_form["ProcessInfo"]["txtDOB"].birthday;
var pattern = /^([0-9]{2})-([0-9]{2})-([0-9]{4})$/;
if (dob == null || dob == "" || !pattern.test(dob)) {
    errMessage += "Invalid date of birth\n";
    return false;
}
else {
    return true
}

if (gender.value.length <= 0) {
    alert("Gender is required");
    gender.focus();
    return false;
}
if (email.value.length <= 0) {
    alert("Email Id is required");
    email.focus();
    return false;
}
