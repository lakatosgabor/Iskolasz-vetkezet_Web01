<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

  <link type="text/css" href="infodiak.css" rel="stylesheet">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Inf&oacute; Di&aacute;k
Iskolasz&ouml;vetkezet</title>
 <!-- add icon link -->
        <link rel = "icon" href =  infologo2.png 
        type = "image/x-icon"> 


</head>


<body>

<div style="text-align: center;">
<div style="text-align: center;"><br>

<table style="text-align: left; margin-left: auto; margin-right: auto; width: 1000px; height: 30px;" border="0" cellpadding="0" cellspacing="0">

  <tbody>

    <tr>

      <td align="undefined" valign="undefined">
    <div class="fej">INFÓ-DIÁK ISKOLASZÖVETKEZET</div>  

      </td>

      <td style="text-align: right;"><a href="https://www.google.com/maps/place/Debrecen,+Simonffy+u.+21,+4025/@47.5285654,21.6185711,17z/data=%213m1%214b1%214m5%213m4%211s0x47470e0cfd9c06e5:0xad761a55060238ac%218m2%213d47.5285618%214d21.6207651?hl=hu"><img title="Kattints!" style="border: 2px solid ; width: 35px; height: 31px;" alt="" src="terkep.png"></a><a href="https://www.facebook.com/groups/226064104246138/"><img title="Kattints!" style="border: 2px solid ; width: 100px; height: 31px;" alt="Kattints!" src="fb.png"></a><a href="https://www.instagram.com/info_diak/"><img title="Kattints!" style="border: 2px solid ; width: 100px; height: 31px;" alt="Kattints!" src="ig.png"></a> </td>

    </tr>

  </tbody>
</table>

</div>

<table style="text-align: center; margin-right: auto; margin-left: auto; width: 1000px; height: 40px; background-color: #FBE52F;" border="0" cellpadding="3" cellspacing="2">

  <tbody>

    <tr >

      <td style="text-align: center; font-weight: bold;" valign="undefined" class="menuelem"><span style="color: black;"><a href="index.php">Főoldal</a><br>

      </span></td>

      <td style="font-weight: bold;" align="undefined" valign="undefined" class="menuelem"><a href="munkaink.php"><span>Munk&aacute;ink</span></a></td>

      <td style="text-align: center; font-weight: bold;" valign="undefined" class="menuelem"><a href="tudnivalok.php"><span>Tudnival&oacute;k</span></a></td>

      <td style="font-weight: bold;" align="undefined" valign="undefined" class="menuelem"><a href="nyeremenyjatek.php"><span>Nyerem&eacute;nyj&aacute;t&eacute;k</span></a></td>

    </tr>

  </tbody>

</table>

<table style="text-align: center; margin-right: auto; margin-left: auto; width: 1000px; height: 400px; background-image: url(munkak.jpg);" border="0" cellpadding="0" cellspacing="0">

  <tbody>

    <tr>
<?php
$nev=$_POST[nev];
$email=$_POST[email];
$telefon=$_POST[telefon];
$munka=$_POST[munka];
$uzi=$_POST[uzenet];
$uzenet=$nev."\r\n"."JELENTKEZES: ".$munka."\r\n"."\r\n".$uzi."\r\n"."\r\n"."EMAIL: ".$email."\r\n"."TELEFON: ".$telefon;
$subj=$nev." | ".$munka;

if (strlen($nev)!=0 and strlen($telefon)!=0 and strlen($email) and strlen($munka)!=0 and strlen($uzi)!=0)
{mail("imre.bojtor@gmail.com", $subj, $uzenet); print("<p style=\" margin: auto; width:1000px; background: darkgreen; font-size: 30px; color: white; font-weight: bold;\">Az üzenetet megkaptuk, hamarosan felvesszük veled a kapcsolatot!</p>");}
elseif(strlen($nev)!=0 and (strlen($telefon)==0 or strlen($email)==0 or strlen($suli)==0 or strlen($raeres)==0))
{print("<p style=\"  margin: auto; width:1000px; background: red; font-size: 25px; color: white; font-weight: bold;\">A jelentkezéshez minden mező kitöltése kötelező!</p>");}

?>
      <td align="center" valign="top" style="font-size: 100px; color: black;  font-weight: bold;">AKTUÁLIS DIÁKMUNKÁK<br></td>
<td style="padding-right: 20px;"><div class="munka2" ><p style="border-bottom: 3px dotted rgb(204, 204, 204); border-top: 3px dotted rgb(204, 204, 204); padding: 0px; font-weight: bold; font-size: 140%; color: rgb(0, 51, 102);"><a href="munkaink.php">LEGFRISSEBB</a></p></div>
<div class="munka2" ><p style="border-bottom: 3px dotted rgb(204, 204, 204); border-top: 3px dotted rgb(204, 204, 204); padding: 0px; font-weight: bold; font-size: 140%; color: rgb(0, 51, 102);"><a href="it.php">IT INFORMATIKAI</a></p></div>
<div class="munka2" ><p style="border-bottom: 3px dotted rgb(204, 204, 204); border-top: 3px dotted rgb(204, 204, 204); padding: 0px; font-weight: bold; font-size: 140%; color: rgb(0, 51, 102);"><a href="szaktudas.php">SZAKTUDÁS IGÉNYLŐ</a></p></div>
<div class="munka2"><p style="border-bottom: 3px dotted rgb(204, 204, 204); border-top: 3px dotted rgb(204, 204, 204); padding: 0px; font-weight: bold; font-size: 140%; color: rgb(0, 51, 102);"><a href="fizikai.php">KÖNNYŰ FIZIKAI</a></p></div>
<div class="munka2" style="box-shadow: 6px 12px 12px 5px green;" ><p style="border-bottom: 3px dotted rgb(204, 204, 204); border-top: 3px dotted rgb(204, 204, 204); padding: 0px; font-weight: bold; font-size: 140%; color: rgb(0, 51, 102);"><a href="etterem.php">ÉTTERMI MUNKÁK</a></p></div>
</td>


<br></td></tr>


  </tbody>
</table>


<table style="margin: auto; text-align: left; width: 1000px; background-image: url(orange.png);" border="0" cellpadding="0" cellspacing="0">

  <tbody>

    <tr>

      <td align="center" valign="undefined"><br>
      <?php
$file = fopen("Munkák/ettermimunkak.csv", "r");
$tomb =[];
if (($handle = $file) !== FALSE) {
  while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $tomb[] = $row;
  }
  fclose($handle);
}
for ($k=1; $k<count($tomb); $k++){
print("<div class=\"szovegdoboz2\">");
print("<b>".$tomb[$k][0]."</b><br /><br />".$tomb[$k][1]."<br /><br />".$tomb[$k][2]."<br /><br />".$tomb[$k][3]);
print("</div><br \>");
}

?>
      <br>
      <br>


      <br>
<br>      <br>

      <br>


      <br>
<br>      <br>


      <br>
<br>      <br>


      <br>
<br>
      <br>
<br>
      </td>

    </tr>

  </tbody>
</table>
<table align="center" style="color: white; text-align: center; background-image: url(jelentkezes.png); width: 1000px; height: 400px;">
<tr><td style=" font-size: 30px; font-weight: bold;">
<form method="POST" action="etterem.php">
Neved:<br> <input type="text" class="munkajelentkezes" name="nev"><br><br>
Email címed:<br> <input type="email" class="munkajelentkezes" name="email"><br><br>
Telefonszám: <br><input type="text" class="munkajelentkezes" name="telefon" value="+36"><br><br>
Melyik munkára szeretnél jelentkezni? <br><input type="text" class="munkajelentkezes" name="munka"><br><br>
Üzeneted:<br> <input type="textarea" class="munkajelentkezes" name="uzenet"><br><br>
<input type="submit" class="msubmit" name="submit" value="KÜLDÉS"><br><br>
</form>




</td></tr>
<table>
<div class="udvozlo"><br><p style=" float: left; padding: 10px; color: white; font-weight: bold;">Bojtor Imre<br>Tel.: +36704221205<br>
E-mial: bojtor.imre@info-diak.hu<br><br>Lakatos Gábor<br>Tel.:+36305841590<br>E-mail: lakatos.gabor@info-diak.hu</p><p style=" float: left; padding: 10px; color: white; font-weight: bold;">NYITVATARTÁS:<br>Hétfőtől Péntekig 12:00-16:00,<br>
vagy erőle egyeztetett időpontban.<br><br><br><br><a style="color: black; font-weight: bold;" href="adatkezelesi_nyilatkozat_info-diak.pdf">Adatkezelési nyilatkozat</a></p><img style=" float: right; width: 400px; height: 170px;"src="ujfej.png"></div>
</div>



</body>
</html>
