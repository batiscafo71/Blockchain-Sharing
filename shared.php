<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Oswald|Quicksand" rel="stylesheet">
<meta charset="UTF-8">
<title>Hacking Submarino</title>
<link href="estilos/estilos-hacking-submarino.css" rel="stylesheet" type="text/css">
</head>

<body>

        <div id="grandelogo">
                <div id="logo">
                         <img src="imagenes/logo.png" width="960" height="90" alt=""/>
                </div>

	</div>

	<div id="menugrande">
		<div id="menu">
			<ul>
				<li><a href="shared.php">Shared Smart Contracts</a></li>
				<li><a href="blockchain.html">Blockchain Sharing</a></li>
			</ul>
		</div>
	</div>


	<div id="cabeceratutoriales"></div>
    
	<div id="contenido">
   	  <h1>Shared Smart Contract Data</h1>
 

        	</div>
    </div>

<table>
<?php

$conn   = new mysqli("localhost", "root", "MMM111mmm", "blockchain", 3306);
$sql    = "SELECT Timestamp, ABI, Address from invoke";
$result = $conn->query($sql);

echo "<table border='1' align='center'>
<tr>
<th>Timestamp</th>
<th>ABI</th>
<th>Address</th>
</tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Timestamp"] . "</td><td>" . $row["ABI"] . "</td><td>" . $row["Address"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 result";
}

$conn->close();
?>

</table>



</body>
</html>
