
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}


function validateForm() {
  var valid = true;
  var error= "<h4> check error</h4>";
  
  document.getElementById("msg").innerHTML= "";
  
  var a1= document.getElementByName("ful");
  var b1 = a1.value;
  
  if (a1 ===  "") 
  {
    valid = false;
   error= error+"please enter your first name";
  }
  var a2= document.getElementById("email");
  var b2 = a2.value;
  var c = b2.indexOf("@");
  var d = b2.lastIndexOf(".");
  if (c<2||d-c<2||b2.length-d-2)
  {
    value= false;
    error= error+"please enter valid E-mail<br>";
  }
  var a3= document.getElementById("password1");
  var b3= a3.value;
  if(b3 === "")
  {
    valid= false;
    error= error+"please enter valid password<br>";
    
  }

if(valid ===  false)
{
  document.getElementById("msg").innerHTML= error;
}
return valid; 
}