<!DOCTYPE html>
<html>
    <head>
        <title>form</title>

    </head>
<body>
    <h1>students form </h1>
<form action="phpserver/database.php" method="POST"  onsubmit ="return validateform()">
NAME:<input type="text" name="name" value="" id="name"       ><br><br>
CITY: <input type="text" name="city" value="" id="city"       ><br><br>
MOBILE: <input type="text" name="mob"  value="" id="mob"         ><br><br>
AGE: <input type="text" name="age"  value=""  id="age"        ><br><br>
EMAIL:<input type="text" name="email" value=""  id="email"    ><br><br>
<input type="SUBMIT" name="submit" value="submit">


</form>

<a href="phpserver/show.php"> show data </a>


<script>
function validateform(){

var name = document.getElementById("name").value;
var city = document.getElementById("city").value;

var mobile = document.getElementById("mob").value;
var age = document.getElementById("age").value;

var email = document.getElementById("email").value;
    
if(name == "" || name == " "){
    alert("please enter you name");
    return false;
}
else if (city == "" || city == " "){
    alert("enter city name");
    return false;
}
else if(mobile == "" || mobile == " "){
    alert("enter mobile number");
    return false;
}
else if(age == "" || age == " "){
    alert("enter age");
    return false;

}
else if(email == "" || email == " "){
    alert("enter email");
    return false;
}
else{
    return true;
}

   
}

    </script>
 

</body>

</html>