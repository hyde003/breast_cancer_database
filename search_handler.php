<?php

$conn = mysql_connect('localhost', 'xingluwang', '');
$username = $_POST['username'];
$type_of_treatement = $_POST['type_of_treatement'];
$sex = $_POST['sex'];
$recurrence = $_POST['recurrence'];
$menopausal_status = $_POST['menopausal_status'];
$tissue_status = $_POST['tissue_status'];
$stage = $_POST['stage'];
$inflammatory_status = $_POST['inflammatory_status'];
$mestastatic_status = $_POST['mestastatic_status'];
$ER = $_POST['ER'];
$HER2 = $_POST['HER2'];
$NEU2 = $_POST['NEU2'];
$tumor_size = $_POST['tumor_size'];
$mamaprint_score = $_POST['mamaprint_score'];
$oncotype_DX_score = $_POST['oncotype_DX_score'];

mysql_select_db('test', $conn);

$find_query = "SELECT id FROM bio_marker WHERE username='$username'";

$find_retval = mysql_query($find_query);
$id = mysql_fetch_row($find_retval)[0];

echo $id;

if($find_retval == NULL) {
	$query = "INSERT INTO `bio_marker` (`id`, `username`, `type_of_treatement`,`sex`, `recurrence`, `menopausal_status`, `tissue_status`, `stage`, `inflammatory_status`, `mestastatic_status`, `ER`, `HER2`, `NEU2`, `tumor_size`, `mamaprint_score`, `oncotype_DX_score`)
 VALUES (NULL, '$username', '$type_of_treatement', '$sex', '$recurrence', '$menopausal_status', '$tissue_status', '$stage', '$inflammatory_status', '$mestastatic_status', '$ER', '$HER2', '$NEU2', '$tumor_size', '$mamaprint_score', '$oncotype_DX_score')";

} else {
	echo $find_retval;

	$query = "UPDATE `bio_marker` SET type_of_treatement='$type_of_treatement', sex='$sex', recurrence='$recurrence', menopausal_status='$menopausal_status', tissue_status='$tissue_status', stage='$stage', inflammatory_status='$inflammatory_status', mestastatic_status='$mestastatic_status', ER='$ER', HER2='$HER2', NEU2='$NEU2', tumor_size='$tumor_size', mamaprint_score='$mamaprint_score', oncotype_DX_score='$oncotype_DX_score' where id='$id'";
}



$retval = mysql_query($query);

echo $query;

if(!$find_retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
header("Location: patient_personal_page.php");

?>