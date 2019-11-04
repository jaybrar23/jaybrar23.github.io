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
  <h2 align="center">More information about the books</h2>
  <div class="container2">
  <form action="rating.php" method="Post">Enter ID of book to get ratings<input id="formrating" type="text" name="id"><input class="button_1" type="submit" value="Submit"></form>
  </div>
  <div class="formphp2">
    Click to sort the elements
  </div>
  <div class="formphp2">
    <form action="moreinfo2.php" id="formsort" method="post" name="formsort" onchange="submit();">
      <input checked id="hideit" name="select" type="radio" value="bookid"> <input name="select" type="radio" value="bookid"> ID <input name="select" type="radio" value="name"> Name <input name="select" type="radio" value="author"> Author <input name="select" type="radio" value="year"> Year
    </form>
  </div>

<?php
 
$dbc= mysqli_connect ('localhost', 'jay', 'pass', 'wt19591504')
    OR die (mysqli_connect_error());
mysqli_set_charset($dbc, 'utf8');

$query="SELECT * FROM books";


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
