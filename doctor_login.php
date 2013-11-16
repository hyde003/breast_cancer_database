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
        <h2 id="nav-tabs">Welcome Doctor</h2>

          <div class="bs-example">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
              <li><a href="#signup" data-toggle="tab">Create Account</a></li>                
            </ul> 

      </div>
      <div class="services">
            <div id="myTabContent" class="tab-content">

              <div class="tab-pane fade active in" id="login">
                <form action=doctor_personal_page.php method=POST class="form-horizontal" role="form">
                  <br>

                    <div class="form-group">
                      <label for="inputUsername3" class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-3">
                        <input type="username" name="username" class="form-control" id="inputUsername3" placeholder="Username">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-3">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember me
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Login</button> 
                        <button type="reset" class="btn btn-default">Cancel</button>    
                      </div>
                    </div>
                </form>
              </div>

              <div class="tab-pane fade" id="signup">
                <form action=doctor_register_handler.php method=POST class="form-horizontal" role="form">
                   <br>
                    <div class="form-group">
                      <label for="inputUsername3" class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-3">
                        <input type="username" class="form-control" name="username" id="inputUsername3" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-3">
                        <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-3">
                        <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Comfirm Password</label>
                      <div class="col-sm-3">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" value="register">Submit</button> 
                        <button type="reset" class="btn btn-default">Cancel</button>    
                      </div>
                    </div>
                </form>
              </div>
              
          </div>

        </div>   
                        <a href="./index.php" class="btn btn-primary btn-lg ">Home</a>
        
    
      </div>
      </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>