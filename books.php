<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Dream Books</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="container">
	<div id="box-shadow">
	  <div id="header">
       	  <a href="index.html"><img src="images/dreambooks.png"/></a>
          <table style="width:100%;"><tr>
            <td style="text-align:center;"><a href="index.html" class="button">index</a></td>
            <td style="text-align:center;"><a href="about.html" class="button">about</a></td>
            <td style="text-align:center;"><a href="map.html" class="button">map</a></td>
            <td style="text-align:center;"><a href="conditions.html" class="button">conditions</a></td>
            </tr></table>
        </div>
        <div id="text">
        <?php
        
			// connect to the database server
			$DServer = mysql_connect("localhost", "mywebsi2_admin", "Tumini05") or die("cannot connect");
			// select the database from the server
			$DBase = mysql_select_db("mywebsi2_library", $DServer) or die("not working");
			$sql = mysql_query("Select * from Books");
			echo "<table style='border:3px inset #FFF;	'>";
			while($row = mysql_fetch_array($sql))
			{
				echo "<tr style='border:#000 solid 3px;'>";
				echo "<td>".$row["book_id"]."</td>";
				echo "<td>".$row["Title"]."</td>";
				echo "<td>".$row["Price"]."</td>";
				echo "<td>".$row["release date"]."</td>";
				echo "</tr>";
			}
			echo "</table>";
		?>
		</div>
        <div id="footer"><text style="font-size:13px; color:#666;">Dream Books© Fictionland© library established 2013</text></div>
    </div>
</div>
</body>
</html>