<?php

function login_without_cookie ($username_input, $password_input, $conn) {
  $query = "SELECT password FROM bio_users WHERE username = '$username_input'";
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
  header("Location: index.php");
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
              <form action=search_handler.php method=POST class="bs-example form-horizontal">
                <fieldset>
                  <legend>Donate Your Data</legend>

                  <input type="hidden" name="username" value=<?php echo $_POST['username']; ?>>

                  
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">type of treatement</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="type_of_treatement" id="select">
                        <option>Hormone therapy</option>
                        <option>Targeted therapy</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Sex</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="sex" id="select">
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Recurrence</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="recurrence" id="select">
                        <option>N/A</option>
                        <option>Yes</option>
                      </select>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Menopausal status  </label>
                    <div class="col-lg-10">
                      <select class="form-control" name="menopausal_status" id="select">
                        <option>Postmenopausal</option>
                        <option>Premenopausal</option>
                        <option>N/A</option>
                      </select>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Tissue status</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="tissue_status" id="select">
                        <option>Not determine</option>
                        <option>Ductal Carcinoma In Situ</option>
                        <option>Lobular Carcinoma</option>
                      
                      </select>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Stage</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="stage" id="select">
                        <option>In Situ</option>
                        <option>Stage II</option>
                        <option>Stage III</option>
                        <option>Stage IV</option>
                      </select>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Inflammatory status</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="inflammatory_status" id="select">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Mestastatic status</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="mestastatic_status" id="select">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">ER</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="ER" id="select">
                        <option>Positive</option>
                        <option>Negative</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">HER2</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="HER2" id="select">
                        <option>Positive</option>
                        <option>Negative</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">NEU2</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="NEU2" id="select">
                        <option>Positive</option>
                        <option>Negative</option>
                        <option>Not tested</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Tumor size</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="tumor_size" id="select">
                        <option>Less than 2.0cm</option>
                        <option>2.1cm-5.0cm</option>
                        <option>Not sure</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Mamaprint score</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="mamaprint_score" id="select">
                        <option>Low</option>
                        <option>High</option>
                        <option>Not tested</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Oncotype DX score</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="oncotype_DX_score" id="select">
                        <option>Low</option>
                        <option>High</option>
                        <option>Not tested</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Cancel</button>  
                      <button onclick="myFunction()" type="submit" class="btn btn-primary">Submit</button> 
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          <!-- </div> -->
          
        </div>
      </div>
      <script>
function myFunction()
{
alert("Thanks for donating!");
}
</script>

  </body>

</html>