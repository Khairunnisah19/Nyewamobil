<?php
  if (isset($_POST["submit"])) {

      $email = $_POST["email"]; // sender
      $name = $_POST["name"];

	$to = 'vin.cse80@gmail.com';
	$subject = 'Contact Us';
	$header = "From: $email \r\n"; 
	$header.= "MIME-Version: 1.0\r\n";
	$header.= 'X-Mailer: PHP/'.phpversion();
	$header .= "X-Priority: 1";
	$header .= "Reply-To:" . $_POST['name']."<".$_POST['email'].">\n";
	$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message1 = '<div style=" border:1px solid #ccc; width:600px;">
  <div style="float:left; padding:10px;"><img src="http://www.agaramtech.com/templates/beez_20/agaram-logo.png" width="200" height="56" border="0" alt="Agaram"  /></div>
  <div style="clear:both;"></div>
  <div style="border-top:3px solid #055BA0; width:600px;">
    <div>
      <h2 style="background:#f1f1f1; border-bottom:1px solid #ccc; margin:0; padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:17px; width:580px; text-align:center; color:#666666;">Paperless lab-Amsterdam</h2>
    </div>
    <div style="width:580px; color:#666; height:auto; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px; background:#f9f9f9;">
      <table>
       
        <tr>
          <td valign="top" height="25" style="text-align:left;"><strong>Name</strong></td>
          <td valign="top" width="10" height="25">:</td>
          <td height="25" valign="top">'.$name.'</td>
        </tr>
    
        <tr>
          <td valign="top" height="25" style="text-align:left;"><strong>Email</strong></td>
          <td valign="top" height="25" width="10">:</td>
          <td height="25" valign="top">'.$email.'</td>
        </tr>
       
      </table>
    </div>
  </div>
</div>';
      // send mail
      $sent=mail($to,$subject,$message1,$header);
}
?>
