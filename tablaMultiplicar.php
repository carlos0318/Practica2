<?php
$num1 = 0;
$num2 = 0;
if(empty ($_POST)){
    $num1="0";
    $num2="0";
}
else{
    $num1= $_POST["txtDato1"];
    $num2= $_POST["txtDato2"];
}
?>
<html>

<head>
    <link rel="stylesheet" href="estilos/principal.css">
    <title>Dioses Griegos</title>
</head>

<body style="background: #fefde1;">

    <form id="frmPrincipal" method="POST">



        <center>
            <table border="0" width="80%" cellspacing="0" cellpadding="5" class="sombreado">
                <tr>
                    <td colspan="3" bgcolor="negro">
                        <table width="100%" border="0">
                            <tr>
                                <td align="left" width="20%"><img src="imagenes/logo.jfif" width="90px" height="90px"> </td>
                                <td align="middle" width="60%">
                                    <font class="fontTitulo"><b>Dioses Griegos</b></font>
                                </td>
                                <td align="right" width="20%">
                                    <img src="imagenes/002-myspace.png" width="30px" height="30px" class="redondeo"><br>
                                    <font class="fontEtiqueta">
                                        Fecha: <b>dd/mm/aaaa</b>
                                        <br> Usuario: <b>(nombre)</b>
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="20%" align="left" bgcolor="#fffd81">
                        <br><br>
                        <a href="#" target="_self" class="fontVinculos">000webhost</a>
                        <br><br>
                        <a href="#" target="_self" class="fontVinculos">azure</a>
                        <br><br>
                        <a href="#" target="_self" class="fontVinculos">amazon</a>
                    </td>
                    <td width="60%" bgcolor="white">
                        <table border="0" width="100%">
                            <tr>
                                <td colspan="2" align="left">
                                    <font class="fontTrabajoTitulo"><b>Multiplicación</b></font>
                                    <br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font class="fontTrabajoEtiqueta"><b>Numero 1: </b></font>
                                    <br><br>
                                </td>
                                <td>
                                    <input type="number" id="txtDato1" name="txtDato1" value="<?php echo $num1 ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font class="fontTrabajoEtiqueta"><b>Numero 2: </b></font>
                                    <br><br>
                                </td>
                                <td>
                                    <input type="number" id="txtDato2" name="txtDato2" value="<?php echo $num2 ?>">
                                    <br><br>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>
                                    <?php 
                                    echo "<br>";
                                    $i = 0;
                                    $dato = 0;
                                    for($i=1;$i<=$num2;$i++){
                                        $dato=$num1*$i;
                                        echo "<br><font class='fontTrabajoEtiqueta'>$num1 x $i= <b>$dato</b> </font> &nbsp;";
                                    }
                                    ?>
                                    </center>
                                
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br><br>
                                    <input type="submit" id="btnSubmit" value="Enviar">
                                </td>
                                <td></td>
                            </tr>

                        </table>
                    </td>
                    <td width="20%" align="middle" bgcolor="#fffd81">
                        <br><br>
                        <img src="imagenes/zeus.jfif" class="imgPromocion">
                        <br><br>
                        <img src="imagenes/poseidon.jfif" class="imgPromocion">
                        <br><br>
                        <img src="imagenes/hades.jpg" class="imgPromocion">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" bgcolor="negro">
                        <font class="fontEtiqueta">
                            Derechos reservados
                        </font>
                        &nbsp;
                        <a href="https://www.facebook.com" target="_blank"><img src="imagenes/021-facebook.png " class="imgRedes"></a> &nbsp;
                        <a href="https://www.instagram.com" target="_blank"> <img src="imagenes/025-instagram.png " class="imgRedes"></a> &nbsp;
                        <a href="https://www.twitter.com" target="_blank"><img src="imagenes/043-twitter.png " class="imgRedes"></a>
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>

</html>