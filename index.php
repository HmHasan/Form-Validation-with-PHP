<?php


if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST")
{
   $name=$_POST['name'];
   if(empty($name))
   {
       $name_error="Your Name Is Required";
   }

   else
   {
       $_REQUEST['name'];
   }

   if (empty($_POST['username'])) {
    $erroruser = 'Username is required';
  }else{
    $user = $_REQUEST['username'];
    $pattern = "/^[a-zA-Z0-9]$/";
    if (!preg_match($pattern, $user)) {
      $erroruser = 'Username must include uppercase,lowercase,number';
    }
  }

  if(empty($_POST['email']))
  {
      $email_error="Your Email Is Required";
  }

  else
  {
      $email=$_REQUEST['email'];
      if(!filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        $email_error="Your Mail Is Should Be Valid Format";
      }
  }

 $password=$_POST['password'];

  if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
    $error_pass= 'the password does not meet the requirements!';
}

$password1=$_POST['password'];
$password2=$_POST['confirm_password'];
if($password !=$password2)
{
    $mathc_error="Your Password Doesn't match";
}

else
{
    $_REQUEST['confirm_password'];
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Please Full-Fill Require Form</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
            <h2 class="display-4 text-center text-danger">Stay in Touch</h2>
                <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                        <small class="text-danger form-text"><?php if(isset($name_error)){echo($name_error);}?></small>
                    </div>
                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input type="text" class="form-control" name="username" id="user_name">
                        <small class="text-danger form-text"><?php if(isset($erroruser)){echo($erroruser);}?></small>
                    </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email">
                        <small class="text-danger form-text"><?php if(isset($email_error)){echo($email_error);}?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        <small class="text-danger form-text"><?php if(isset($error_pass)){echo($error_pass);}?></small> 
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                        <small class="text-danger form-text"><?php if(isset($mathc_error)){echo($mathc_error);}?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="form-control btn btn-primary" >Save Your Information</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>