<?php

include('index1.php'); //Aquí obtiene las variables del archivo config.php que está dentro del directorio config. En ese documento está la información de las DB.
 
$conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
if (!$conexion) {
    die ('Error al conectar con la base de datos: ' . mysqli_connect_error());  
}
 
$sql = 'SELECT * FROM jugadores';
         
$consulta = mysqli_query($conexion, $sql);
 
if (!$consulta) {
    die ('Error SQL: ' . mysqli_error($conexion));
}

?>
<html>
<HEAD>

    <META http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
    <META name="robots" content="noindex">
    <META name="googlebot" content="noindex">
    <LINK HREF="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <LINK HREF="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <LINK HREF="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <LINK HREF="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <LINK REL="shourtcut icon" TYPE="image/png" HREF=""/>

    <TITLE>&Iacutendice de trabajos Alberto Reyes</TITLE>

 </HEAD>
<BODY BGCOLOR="white">

    <FONT SIZE="6">
    <FONT FACE="Gloria Hallelujah">
        <BR>
        <CENTER><p>Desde aqu&iacute puedes acceder a todos los trabajos</p>

	<p>que he hecho desde el prinicipio del curso.</p></CENTER>
        <BR>

    </FONT>
    <FONT FACE="Acme">
    <TABLE BORDER="1" STYLE="margin: 0 auto;" >
        <THEAD>
            <TR>
	 			<TH><CENTER><H2>Fecha</H2></CENTER></TH>
	 			<TH><CENTER><H2>Trabajo</H2></CENTER></TH>
                <TH><CENTER><H2>Breve comentario</H2></CENTER></TH>
	 		    <TH><CENTER><H2>Enlace</H2></CENTER></TH>
	 		</TR>
        </THEAD>
        <TBODY>
        <?php
        while ($datosconsulta = mysqli_fetch_array($consulta))
        {
            echo '.$datosconsulta['jugador'].';
        }?>
        </TBODY>
    </TABLE>


<BR>
	<P>
	<BR>
	<a href="b1dreyesalbertoindex.html"><img height="50" src="http://icon-icons.com/icons2/247/PNG/512/BACK4_26875.png"></a>
</BODY>
</html>