function validateForm() {
  let x = document.forms["myform"]["fname"].value;
  let y = document.forms["myform"]["district"].value;
  let z = document.forms["myform"]["phone"].value;
  var letters = /^[a-zA-Z]+ [a-zA-Z]+$/;
  var letter= /^[a-zA-Z]+$/;
   var phoneno = /^\d{10}$/;
  if(!letters.test(x))
   {
    alert("Name must contain letters only");
    return false;
  }
  if(!letter.test(y))
   {
    alert("District must contain letters only");
    return false;
  }
  if(!phoneno.test(z)){
    alert("Mobile No. should be a 10 digit number");
  }
  else{
    return true;
  }

/*let y = document.forms["myform"]["district"].value;
var letter = /^[A-Za-z]+$/;
if(!letter.test(y))
 {
  alert("District must contain letters only");
  return false;
}
else{
  return true;
}*/
}
