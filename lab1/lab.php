
<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  

<?php

require_once 'conf.php';
$nameErr = $emailErr = $messageErr= "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = ($_POST["name"]);
  $email = ($_POST["email"]);
  $message = $_POST["message"];
  if (empty($name)) {
    $nameErr = "Name is empty";
    echo "$nameErr <br><br>";
  } else{
    if (strlen($name)>NAME_MAX_LENGTH){
        $nameErr="Name should't be more than 100 letter!";
        echo "$nameErr <br><br>";
    }

  }
  
  if (empty($email)) {
    $emailErr = "Email is empty";
    echo "$emailErr <br> <br>";
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Email not valid";
      echo "$emailErr <br> <br>";

    }
  }
    


  if (strlen($message)>MSG_MAX_LENGTH ) {
    $messageErr = "Message should be less than 255 letter ";
    echo "$messageErr <br> <br>";

  }
  else {
    if (empty($messageErr)&& empty($nameErr)&& empty($emailErr)){
      echo "Thank you $name, for contacting us ";
    }
  }

 
}

?>

<h2>Contact form</h2>
<form method="post" action="lab.php">  
  Name: <input value="<?php echo $_POST['name']  ?>" type="text" name="name">
  <br><br>
  E-mail: <input  value="<?php echo $_POST['email']  ?>" type="text" name="email">
  
  <br><br>
  Message: <textarea value="<?php echo $_POST['message']  ?>" name="message" rows="5" cols="40"></textarea>
  
  <br><br>
  <input  type="submit" name="submit" value="Submit">  
</form>



</body>
</html>
