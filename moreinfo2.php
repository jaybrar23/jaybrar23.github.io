<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="A list of good IT books">
	  <meta name="keywords" content="IT books, education, university">
  	<meta name="author" content="Jatinder Brar">
    <title>Jay's list | Books </title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <a href="main.html"><img src="./img/logo.png" alt="Jay's list" style="width:13%;height:8%;"></a>
        
        <nav>
          <ul>
            <li><a href="main.html">Home</a></li>
            <li><a href="aboutme.html">About me</a></li>
            <li><a href="books.html">Books</a></li>
          </ul>
        </nav>
		</div>
      </div>
    </header>
	
<h2 color="white" align="center">More information about the books</h1>
  <div class="container2">
  <form action="rating.php" method="Post">Enter ID of book to get ratings<input id="formrating" type="text" name="id"><input class="button_1" type="submit" value="Submit"></form>
  </div>
<div class="formphp2">
Click to sort the elements
</div>
<div class="formphp2">
<form method = "post" action ="moreinfo2.php" onchange="submit();" id = "formsort">
              <input id="hideit" type="radio" name="select" value="bookid" checked>
			  <input type="radio" name="select" value="bookid"> ID
			  <input type="radio" name="select" value="name"> Name
			  <input type="radio" name="select" value="author"> Author
			  <input type="radio" name="select" value="year"> Year</form>
</div>

<?php
 
$dbc= mysqli_connect ('localhost', 'jay', 'pass', 'wt19591504')
    OR die (mysqli_connect_error());
mysqli_set_charset($dbc, 'utf8');
$select = $_POST["select"];

$query="SELECT * FROM books ORDER BY ".$select;


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
echo '<th>Book ID</th><th>Name of the book</th><th>Author</th><th>Year of publication</th>';
 
while ( $row = mysqli_fetch_row( $result ) )
{
    print( "<tr>" );
    foreach ( $row as $value ) print( "<td>&nbsp;$value</td>" );
    print( "</tr>" );
}
 
print "</table></body></html>\n";
?>

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
