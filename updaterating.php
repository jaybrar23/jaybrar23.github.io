<?php
 
$dbc= mysqli_connect ('localhost', 'jay', 'pass', 'wt19591504')
    OR die (mysqli_connect_error());
mysqli_set_charset($dbc, 'utf8');
$bookid=filter_input(INPUT_POST, 'bookid');
$rating=filter_input(INPUT_POST, 'rating');
$ratedby=filter_input(INPUT_POST, 'ratedby');
$query="UPDATE rating SET rating=$rating, ratedby='$ratedby' WHERE id=$bookid";

$dbname="wt19591504";
mysqli_select_db($dbc, $dbname)
    OR die( "could not open database $dbname" );
if ($dbc->query($query)){
	header("Location:moreinfo.php");
}
else
{
	echo "no";
}
mysqli_close( $dbc );
?>