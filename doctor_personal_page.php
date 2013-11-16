<?php

function login_without_cookie ($username_input, $password_input, $conn) {
  $query = "SELECT password FROM doctors WHERE username = '$username_input'";
  mysql_select_db('test', $conn);
  $result = mysql_fetch_assoc(mysql_query($query));
  if ($result) {
    $password = $result['password'];

    if ($password == md5($password_input)) {      
      setcookie('username', $_POST['username'], time()+60*60*24*365);
      setcookie('password', $password, time()+60*60*24*365);
      // echo "Hello ". $_POST['username']. "!<br>";
    } else {
      // echo 'invalid password';
      header("Location: warning.php");
    }

  } else {
    // echo 'invalid username';
    header("Location: warning.php");
  } 
}

function login_using_cookie ($username_input, $password_input, $conn) {

    if(isset($_POST['verify']))
    {
       if($_POST['verify'] == "True")
       {
           echo "verify pass!\n";
           
       }
    }
  $query = "SELECT password FROM users WHERE username = '$username_input'";
  mysql_select_db('test', $conn);
  $result = mysql_fetch_assoc(mysql_query($query));
  if ($result) {
    $password = $result['password'];
    if ($password == $password_input) {     
      echo "Welcome back ". $username_input. "!\n";
    } else {
      header("Location: warning.php");
    }

  } else {
    header("Location: warning.php");
  }   
}

$conn = mysql_connect('localhost', 'xingluwang', '');



if(isset($_POST['username']) && isset($_POST['password'])) {
  $username_input = $_POST['username'];
  $password_input = $_POST['password'];
  login_without_cookie($username_input, $password_input, $conn);
} else {
  echo "invalid user!";
  // header("Location: doctor_login.php");
}   


mysql_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Breast Cancer Trials</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="bs-docs-section">
    <div class="call-to-action">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Welcome <?php echo $_POST['username']; ?>!</h1>
              <a href="./index.php" class="btn btn-primary btn-lg col-md-offset-11">Home</a>
            </div>
          </div>
        </div>
    </div>
        <div class="row">
          <!-- <div class="col-lg-6"> -->
            <div class="well">
              <form action=doctor_search_result_page.php method=POST class="bs-example form-horizontal">
                <fieldset>
                  <legend>search user: </legend>

                  <div class="form-group">
                    <div class="col-lg-10">
                      <input type='text' name="username">
                    </div>
                  </div>

        

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-0">
                      <button type="reset" class="btn btn-default">Cancel</button>  
                      <button type="submit" class="btn btn-primary">Search</button> 
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          <!-- </div> -->
          
        </div>
      </div>

  </body>

</html>