 var x = document.forms["myform"]["fullname"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
  var x = document.forms["myform"]["birthday"].value;
  if (x == "" || x == null) {
    alert("birthday must be filled out");
    return false;
  }
  var x = document.forms["myform"]["gender"].value;
  if (x == "" || x == null) {
    alert("gender must be filled out");
    return false;
  }
  var x = document.forms["myform"]["email"].value;
  if (x == "" || x == null) {
    alert("email be filled out");
    return false;
  }
  var x = document.forms["myform"]["password"].value;
  if (x == "" || x == null) {
    alert("password must be filled out");
    return false;
  }

   /*var x = document.forms["myform"]["email"].value;
    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert("Name must be filled out");
    return false;
}*/
}