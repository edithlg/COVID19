<?php  
  $conexion=mysqli_connect('localhost','root','','covid');
?>
<!DOCTYPE html>
<html>
<head>
	<title>San Luis Potosi</title>
	<link rel="stylesheet" href="stylos.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
	<nav>
        <h3>COVID-19</h3>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Estados <i class="icon ion-md-arrow-dropdown"></i></a>
            	<ul>
                    <li><a href="Aguascalientes.php">Aguacalientes</a></li>
                    <li><a href="Zacatecas.php">Zacatecas</a></li>
                    <li><a href="SanLuisPotosi.php">San Luis Potosi</a></li>
                    <li><a href="Jalisco.php">Jalisco</a></li>
                    <li><a href="Michoacan.php">Michoacan</a></li>
                    <li><a href="Guanajuato.php">Guanajuato</a></li>
                    <li><a href="Queretaro.php">Queretaro</a></li>
                </ul>
            </li>
            <li><a href="#">Servicios <i class="icon ion-md-arrow-dropdown"></i></a>
                <ul>
                    <li><a href="#">Diseño web</a></li>
                    <li><a href="#">Desarrollo web</a></li>
                    <li><a href="#">Aplicaciones nativas</a></li>
                </ul>
            </li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <div style="background-color: #1096c7; height: 200px;">
        <br>
        <br>
        <h2 style="color:white" class="borde">San Luis Potosí</h2>

		<section class="borde">
			<a href="SemaforoSL.php"><img align="right" src="img/naranja.png" width="100px"></a>
		</section>
    </div>
	<section class="borde">
		<br>
		<div align="center"><img class="maxh" src="https://slpcoronavirus.mx/wp-content/uploads/2020/10/30-de-Octubre-Actualizacio%CC%81n.png"></div>
		<br>
		<section class="borde">
			<div align="center" STYLE=" height: 35rem; overflow: auto;">
			    <table FRAME="void" RULES="rows"> 
			        <tr>
			            <td STYLE="padding:2px;">Municipio</td>
			            <td STYLE="padding:2px;">Confirmados</td>
			            <td STYLE="padding:2px;">Defunciones</td>
			            <td STYLE="padding:2px;">Recuperados</td>
			        </tr>
			        <?php  
			        $sql="SELECT municipio, confirmados, recuperados, defunciones FROM sanluis";
			        $result=mysqli_query($conexion, $sql);

			        while ($mostrar=mysqli_fetch_array($result)) {
			        ?>
			        <tr>
			            <td STYLE="padding:2px;"><?php echo $mostrar['municipio']; ?></td>
			            <td align="center"><?php echo $mostrar['confirmados']; ?></td>
			            <td align="center"><?php echo $mostrar['defunciones']; ?></td>
			            <td align="center"><?php echo $mostrar['recuperados']; ?></td>
			            
			        </tr>
			     <?php 
			 	}
			     ?>
			    </table>
			</div>
		</section>
		<br>

	</section>
	 <div style="background-color: #1096c7; height: 200px;">
	 	<div class="borde">
	        <br>
	        <h2 style="color:white">Sitios de interes</h2>
	        <br>
	        <a href="https://www.gob.mx/" style="text-decoration: none; color: white; margin-left: 4rem;">gob.mx</a>
	        <br>
	        <a href="https://beta.slp.gob.mx/SSALUD/Paginas/Inicio.aspx" style="text-decoration: none; color: white; margin-left: 4rem;">https://SSALUD/</a>
	        <br>
	        <a href="https://www.facebook.com/ssaslp/" style="text-decoration: none; color: white; margin-left: 4rem;">https://www.facebook.com/ssaslp/</a>
	        <br>
	        <a href="https://twitter.com/ssaslp" style="text-decoration: none; color: white; margin-left: 4rem;">https://twitter.com/ssaslp</a>
	        <br>
	        <a href="https://www.instagram.com/ssaslp/" style="text-decoration: none; color: white; margin-left: 4rem;">https://www.instagram.com/ssaslp/</a>
        </div>
    </div>
</body>
</html>