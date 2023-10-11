var username = document.forms['form']['Username'];
var password = document.forms['form']['Password'];

var username_error = document.getElementById('Username_error')
var password_error = document.getElementById('password_error')

username.addEventListener('textInput', username_verify)
password.addEventListener('textInput', password_verify)

function validated()
{
    if(Username.value.length < 2){
        Username.style.border = "1px solid red";
        Username_error.style.display = "block";
        Username.focus();
        return false;
    }
    if(Passwordword.value.length < 8){
        Passwordword.style.border = "1px solid red";
        Password_error.style.display = "block";
        Passwordword.focus();
        return false;
    }

    /*var mail = document.getElementById("username").value;
    var regx = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/

    if(regx.Uname(mail)){
        return true;
    }
    else{
        alert("Enter Valid username ID")
        return false;
    }*/
}

function username_verify(){
    if(Username.value.length >= 1)
    {
        Username.style.border = "1px solid silver";
        Username_error.style.display = "none";
        return true;
    }
}
function password_verify(){
    if(Passwordword.value.length >= 7)
    {
        Passwordword.style.border = "1px solid silver";
        Password_error.style.display = "none";
        return true;
    }
}
function generateCaptcha() {
    var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
       'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
       'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
       'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    var i;
    for (i = 0; i < 5; i++) {
       var a = alpha[Math.floor(Math.random() * alpha.length)];
       var b = alpha[Math.floor(Math.random() * alpha.length)];
       var c = alpha[Math.floor(Math.random() * alpha.length)];
       var d = alpha[Math.floor(Math.random() * alpha.length)];
       var e = alpha[Math.floor(Math.random() * alpha.length)];
    }
    var code = a + '' + b + '' + '' + c + '' + d + '' + e;
    document.getElementById("Captcha").value = code;

 }
 function CheckValidCaptcha() {
    var string1 = removeSpaces(document.getElementById('Captcha').value);
    var string2 = removeSpaces(document.getElementById('txtInput').value);
    if (string1 == string2) {
       document.getElementById('success').innerHTML = "Captcha is validated Successfully";
       //alert("Form is validated Successfully");
       return true;
    }
    else {
       document.getElementById('error').innerHTML = "Please enter a valid captcha.";
       //alert("Please enter a valid captcha.");
       return false;
    }
 }
 function removeSpaces(string) {
    return string.split(' ').join('');
 }
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  