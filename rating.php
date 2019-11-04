<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width" name="viewport">
  <meta content="A list of good IT books" name="description">
  <meta content="IT books, education, university" name="keywords">
  <meta content="Jatinder Brar" name="author">
  <title>Jay's list | Books</title>
  <link href="./css/style.css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="container">
      <div id="branding">
        <a href="main.html"><img alt="Jay's list" src="./img/logo.png" style="width:13%;height:8%;"></a>
        <nav>
          <ul>
            <li>
              <a href="main.html">Home</a>
            </li>
            <li>
              <a href="aboutme.html">About me</a>
            </li>
            <li>
              <a href="books.html">Books</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
<h2 align="center">Rating of the book</h2>
<?php
 
$dbc= mysqli_connect ('localhost', 'jay', 'pass', 'wt19591504')
    OR die (mysqli_connect_error());
mysqli_set_charset($dbc, 'utf8');
$select = $_POST["id"];

$query="SELECT * FROM rating WHERE id=$select";


$dbname="wt19591504";
mysqli_select_db($dbc, $dbname)
    OR die( "could not open database $dbname" );
 
 
if ( !( $result = mysqli_query($dbc, $query) ) )
{
    print( "could not execute $query" );
    die ( mysqli_error() );
}
 
mysqli_close( $dbc );

echo '<table id = "tablephp" align="center">';
echo '<th>Book ID</th><th>Rating</th><th>Rated By</th>';
 
while ( $row = mysqli_fetch_row( $result ) )
{
    print( "<tr>" );
    foreach ( $row as $value ) print( "<td>&nbsp;$value</td>" );
    print( "</tr>" );
}
 
print "</table></body></html>\n";
?>


      <form action="updaterating.php" method="post">
        <table id="tablesubmit">
          <tr>
            <td>Book ID</td>
            <td><input id="form21" name="bookid" type="text"></td>
          </tr>
          <tr>
            <td>Rating(1-5):</td>
            <td><input id="form22" name="rating" type="number"></td>
          </tr>
          <tr>
            <td>Your Name:</td>
            <td><input id="form23" name="ratedby" type="text"></td>
          </tr>
          <tr>
            <td><button id="button25" type="submit">Update Rating</button></td>
          </tr>
        </table>
      </form>
</br><article class = "twobuttons">
<div class = "twobuttons">
<button type="button" class = "buttoninfo" onclick="window.location.href='moreinfo.php'">More information about these books</button>
<button type="button" class ="buttonsuggest" onclick="window.location.href='suggest.html'">Suggest your own books</button>

</div>
</article>
	


    <footer>
      <p>Jay's list, Copyright &copy; 2019</p>
    </footer>
  </body>
</html>