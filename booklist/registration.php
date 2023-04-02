<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">

</head>
<body>
  <div>
   
</div>

<div id="login-form-wrap">
  <h2>Register</h2>
  <form action="process.php" id="login-form" method="post">
    <p>
    <input type="text" id="firstname" name="firstname" placeholder="First Name" required><i class="validation"><span></span><span></span></i>
    </p>
    <input type="text" id="lastname" name="lastname" placeholder="Last Name" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="username" name="username" placeholder="username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="Password" name="Password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="Age" name="Age" placeholder="Age" required><i class="validation"><span></span><span></span></i>
    </p>
    <input type="text" id="Address" name="Address" placeholder="Address" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input name="create" type="submit" id="signup" value="Sign Up">
    </p>
    <p>
   <button type="reset" value="Reset" class="btn btn-outline-primary">Reset</button>
    </p>
    <br>
    <span></span><span></span></i>
  </form>
  
</body>
</html>