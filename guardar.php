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


        <div id="cabecerablockchain">

        </div>
	
	<div>

	</div>
    </div>
<?php

if (isset($_POST["ABI"])) {
    $ABI     = $_POST["ABI"];
    $Address = $_POST["Address"];
    
    
    
    $consulta = "INSERT INTO invoke (ABI, Address)VALUES('$ABI','$Address')";
    
    $conexion = new mysqli("localhost", "root", "MMM111mmm", "blockchain", 3306);
    
    $respuesta = new stdClass();
    
    if ($conexion->query($consulta)) {
        $respuesta->mensaje = "Successfully stored";
    } else {
        $respuesta->mensaje = "Uppps... some error appears";
    }
    echo json_encode($respuesta);
}

?>

	
</body>
</html>
