<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Validation</h2>

<form action="/action_page.php" method="post">
  name:<input type="text" name="name" required><br>
   age:<input type="number" name="age" required><br>
    email:<input type="email" name="email" required><br>
     phone:<input type="text" name="phone" required><br>
  <input type="submit" value="Submit">
</form>

<script>

function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }

    var x = document.forms["myForm"]["age"].value;
    if (x == "") {
        alert("age must be filled out");
        return false;
    }

    var x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("email must be filled out");
        return false;
    }

    var x = document.forms["myForm"]["phone"].value;
    if (x == "") {
        alert("phone must be filled out");
        return false;
    }
//     checking phone number
    var x = document.forms["myForm"]["phone"].value;
    if (x.length != 10) {
        alert("phone number must be 10 digits");
        return false;
    }

    var x = document.forms["myForm"]["phone"].value;
    if (isNaN(x)) {
        alert("phone number must be numeric");
        return false;
    }
    

}

</script>

</body>
</html>
