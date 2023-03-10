<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>formulario de contacto</title>
<style type="text/css">
<!--
body,td,th {
	color: #FFF;
}
body {
	background-color: #000;
}
-->
</style>
<link href="fnxmimodiprincipal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	width:622px;
	height:290px;
	z-index:1;
	top: 19px;
	left: 357px;
}
#apDiv2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:2;
}
-->
</style>
</head>

<body>

<center>



 
 <?
if(!$_POST){
?>
</p>
<form action="../formulario.php" method=post name="form1" id="form1">
  <table border="0" cellspacing="2" cellpadding="5">
    <tr>
      <td class="letrablanca">Nombre:</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" /></td>
      <td class="letrablanca">Apellidos:</td>
      <td><label for="ape"></label>
      <input name="ape" type="text" id="ape" size="50" maxlength="50" /></td>
    </tr>
    <tr>
      <td class="letrablanca">Tlf:</td>
      <td><input type="text" name="tfn" id="tfn" /></td>
      <td class="letrablanca">Direccion:</td>
      <td><label for="dir"></label>
        <input name="dir" type="text" id="dir" size="50" maxlength="50" /></td>
    </tr>
    <tr>
      <td class="letrablanca">C.P.:</td>
      <td><label for="cp"></label>
      <input name="cp" type="text" id="cp" size="5" maxlength="5" /></td>
      <td class="letrablanca">Mail:</td>
      <td><label for="mai"></label>
        <input name="mai" type="text" id="mai" size="50" maxlength="50" />
      </td>
    </tr>
    <tr>
      <td class="letrablanca">Localidad:</td>
      <td><label for="loc"></label>
      <input type="text" name="loc" id="loc" /></td>
      <td class="letrablanca">Provincia:</td>
      <td><label for="pro"></label>
      <label for="pro"></label>
      <select name="pro" id="pro">
        
        <option value="acor">A Coruña</option>
        <option value="alav">Álava</option>
        <option value="alba">Albacete</option>
        <option value="alic">Alicante</option>
        <option value="alme">Almería</option>
        <option value="astu">Asturias</option>
        <option value="avil">Ávila</option>
        <option value="bada">Badajoz</option>
        <option value="bale">Baleares</option>
        <option value="barc">Barcelona</option>
        <option value="bizk">Bizkaia</option>
        <option value="burg">Burgos</option>
        <option value="cace">Cáceres</option>
        <option value="cadi">Cádiz</option>
        <option value="cant">Cantabria</option>
        <option value="cast">Castellón</option>
        <option value="ceut">Ceuta</option>
        <option value="ciud">Ciudad Real</option>
        <option value="corb">Córdoba</option>
        <option value="cuen">Cuenca</option>
        <option value="giro">Girona</option>
        <option value="gran">Granada</option>
        <option value="guad">Guadalajara</option>
        <option value="gipu">Gipuzkoa</option>
        <option value="huel">Huelva</option>
        <option value="hues">Huesca</option>
        <option value="jaen">Jaén</option>
        <option value="lasp">Las Palmas</option>
        <option value="leon">León</option>
        <option value="llei">Lleida</option>
        <option value="lari">La Rioja</option>
        <option value="lugo">Lugo</option>
        <option value="madr">Madrid</option>
        <option value="mala">Málaga</option>
        <option value="meli">Melilla</option>
        <option value="murc">Murcia</option>
        <option value="nava">Navarra</option>
        <option value="oure">Ourense</option>
        <option value="pale">Palencia</option>
        <option value="pont">Pontevedra</option>
        <option value="sala">Salamanca</option>
        <option value="sant">Santa Cruz de Tenerife</option>
        <option value="sego">Segovia</option>
        <option value="sevi">Sevilla</option>
        <option value="sori">Soria</option>
        <option value="tarr">Tarragona</option>
        <option value="teru">Teruel</option>
        <option value="tole">Toledo</option>
        <option value="vale">Valencia</option>
        <option value="vall">Valladolid</option>
        <option value="zamo">Zamora</option>
        <option value="zamo">Zaragoza</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2" class="letrablanca">&nbsp;Comentarios:</td>
      <td colspan="2" class="letrablanca"><p>
        <textarea name="come" cols="48" rows="5" id="ape2"></textarea>
        <br />
      </p>
      <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
        <input type="reset" name="enviar2" id="enviar2" value="Restablecer" />
      </p></td>
    </tr>
  </table>
</form>

<?
}else{
	$cuerpo="Formulario enviado\n";
	$cuerpo.="Nombre:".$_POST["nom"]."\n";
	$cuerpo.="Apellidos:".$_POST["ape"]."\n";
	$cuerpo.="Direccion:".$_POST["dir"]."\n";
	$cuerpo.="C.P.:".$_POST["cp"]."\n";
	$cuerpo.="TFN:".$_POST["tfn"]."\n";
	$cuerpo.="Localidad:".$_POST["loc"]."\n";
	$cuerpo.="Provincia:".$_POST["pro"]."\n";
	$cuerpo.="Mail:".$_POST["mai"]."\n";
	$cuerpo.="Comentarios:".$_POST["come"]."\n";
	
	
	mail("mimodi@live.com","Formulario recibido de la web",$cuerpo);
		
	echo"gracias por rellenar el formulario. Se ha enviado correctamente.";
}
?>
 	
<center/>
</body>
</html>