<?php
function search ($username_input, $conn) {

	$query = "SELECT * FROM bio_marker WHERE username = '$username_input'";
	mysql_select_db('test', $conn);
	$result = mysql_query($query);
	
	if ($result) {

		// echo "<table border='1'>
		// 	<tr>
		// 	<th>username</th>
		// 	<th>email</th>
		// 	<th>password</th>
		// 	</tr>"; 
		// while($row = mysql_fetch_array($result, MYSQL_NUM)) {
		// 	echo "<tr>";
		// 	echo "<td>". $row[1]. "</td>";
		// 	echo "<td>". $row[2]. "</td>";
		// 	echo "<td>". $row[3]. "</td>";
		// 	echo "</tr>";
		// }
		// echo "</table>";
		$row = mysql_fetch_array($result, MYSQL_NUM);
		return $row;

	} else {
		header("Location: warning.php");
	}	
}

$conn = mysql_connect('localhost', 'xingluwang', '');
$row = null;

if(isset($_POST['username'])) {
	$username_input = $_POST['username'];

	$row = search($username_input, $conn);

} else {
	echo "invalid user!";
	header("Location: doctor_personal_page.php");
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

  <!-- Tables
      ================================================== -->
      <div class="bs-docs-section ">

        <div class="row">
          <div class="col-lg-12 col-sm-offset-0" >
            <div class="page-header">
              <h1 id="tables">Results</h1>
            </div>

            <div class="bs-example table-responsive text-center">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                  	<th>Username</th>
                    <th>Sex</th>
                    <th>Recurrence</th>
                    <th>Menopausal Status</th>
                    <th>Tissue Status</th>
                    <th>Stage</th>
                    <th>Inflammatory Status</th>
                    <th>Mestastatic Status</th>
                    <th>ER</th>
                    <th>HER2</th>
                    <th>NEU2</th>
                    <th>Tumor Size</th>
                    <th>Mamaprint Score</th>
                    <th>Oncotype DX Score</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <td><?php echo $row[8]; ?></td>
                    <td><?php echo $row[9]; ?></td>
                    <td><?php echo $row[10]; ?></td>
                    <td><?php echo $row[11]; ?></td>
                    <td><?php echo $row[12]; ?></td>
                    <td><?php echo $row[13]; ?></td>
                    <td><?php echo $row[14]; ?></td>
                    <td><?php echo $row[15]; ?></td>
                  </tr>
                  
                </tbody>
              </table>
            </div><!-- /example -->
          </div>
        </div>
        <a href="./index.php" class="btn btn-default btn-lg">Home</a>
      </div>

  </body>

</html>