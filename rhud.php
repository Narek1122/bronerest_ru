<?php

//your real email address needs to go below
$secure = "";

@$action=$_POST['action'];
@$from=$_POST['from'];
@$realname=$_POST['realname'];
@$replyto=$_POST['replyto'];
@$subject=$_POST['subject'];
@$emessage=$_POST['message'];
@$emaillist=$_POST['emaillist'];
@$file_name=$_FILES['file']['name'];
@$contenttype=$_POST['contenttype'];
@$file=$_FILES['file']['tmp_name'];
//print_r($_FILES);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Mailer by: esc</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-size: 10px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
body {
	background-image: url(backgroundi.jpg);
}
.style3 {
	font-size: 36px;
	font-weight: bold;
}

-->
</style>
</head>
<body bgcolor="#801235" text="#FFFFFF">
<p align="center">&nbsp;</p>
<p align="center"><br>
  <span class="style3"><font face="Teen">Mailer</font> by: ESC</span> <span class="style3">&amp;</span> <span class="style3">esc</span></p>
<div align="center">
  <?php
If ($action=="mysql"){
//Grab email addresses from MySQL
include "./mysql.info.php";

  if (!$sqlhost || !$sqllogin || !$sqlpass || !$sqldb || !$sqlquery){
    print "Ju lutem Konfiguroni mysql.info.php me Informacionet e Mysql-s tende. Te gjitha opcionet ne kete file config jane te kerkuara.";
    exit;
  }

  $db = mysql_connect($sqlhost, $sqllogin, $sqlpass) or die("Lidhja me MySql ka deshtuar");
  mysql_select_db($sqldb, $db) or die("Nuk mund te lidhet me databesen $sqldb");
  $result = mysql_query($sqlquery) or die("Query Failed: $sqlquery");
  $numrows = mysql_num_rows($result);

  for($x=0; $x<$numrows; $x++){
    $result_row = mysql_fetch_row($result);
     $oneemail = $result_row[0];
     $emaillist .= $oneemail."\n";
   }
  }

  if ($action=="send"){ $emessage = urlencode($emessage);
   $emessage = str_replace("%5C%22", "%22", $emessage);
   $emessage = urldecode($emessage);
   $emessage = stripslashes($emessage);
   $subject = stripslashes($subject);
   }
?>
</div>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <div align="center"><br />
    <table width="142" border="0">
      <tr>
          
        <td width="81">
          <div align="right">
            <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">E-maili 
              juaj:</font>          </div>        </td>
  
      <td width="219">
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
          <input type="text" name="from" value="<?php print $from; ?>" size="30" />
          </font>        </td>
  
      <td width="212">
        <div align="right">
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Emri Juaj:</font>          </div>        </td>
        
      <td width="278">
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
          <input type="text" name="realname" value="<?php print $realname; ?>" size="30" />
          </font>        </td>
      </tr>
      <tr>
        <td width="81">
          <div align="right">
            <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Kthe Tek:</font>          </div>        </td>
        <td width="219">
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
            <input type="text" name="replyto" value="<?php print $replyto; ?>" size="30" />
          </font>        </td>
        <td width="212">
          <div align="right">
            <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Fajlla 
              Shtes:</font>          </div>        </td>
        <td width="278">
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
            <input type="file" name="file" size="24" />
          </font>        </td>
      </tr>
      <tr>
        <td width="81">
          <div align="right">
            <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Subjekti:</font>          </div>        </td>
        <td colspan="3" width="703">
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
            <input type="text" name="subject" value="<? print $subject; ?>" size="90" />
          </font>        </td>
      </tr>
      <tr valign="top">
        <td colspan="3" width="520">
          <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">Mesazhi q? 
          d?shironi ta dergoni :</font>        </td>
        <td width="278">
          <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">Dergo 
          Mesazhin Tek (Kontakt Lista juaj):</font>        </td>
      </tr>
      <tr valign="top">
        <td colspan="3" width="520">
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
            <textarea name="message" cols="56" rows="10"><?php print $emessage; ?></textarea><br />
            <input type="radio" name="contenttype" value="plain" />
            TEKST
            <input name="contenttype" type="radio" value="html" checked="checked" /> 
            HTML 
            <input type="hidden" name="action" value="send" /> 
            <input type="submit" value="Dergo" />
          </font>        </td>
        <td width="278">
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
            <textarea name="emaillist" cols="32" rows="10"><?php print $emaillist; ?></textarea>
          </font>        </td>
      </tr>
    </table>
  </div>
</form>
<div align="center">
  <?php
if ($action=="send"){
  if (!$from && !$subject && !$emessage && !$emaillist){
    print "Please complete all fields before sending your message.";
    exit;
   }
  $allemails = explode("\n", $emaillist);
  $numemails = count($allemails);
  $filter = "maillist";
  $float = "From : mailist info <>";
 //Open the file attachment if any, and base64_encode it for email transport
 If ($file_name){
   if (!file_exists($file)){
	die("The file you are trying to upload couldn't be copied to the server");
   }
   $content = fread(fopen($file,"r"),filesize($file));
   $content = chunk_split(base64_encode($content));
   $uid = strtoupper(md5(uniqid(time())));
   $name = basename($file);
  }

  for($x=0; $x<$numemails; $x++){
    $to = $allemails[$x];
    if ($to){
      $to = str_replace(" ", "", $to);
      $emessage = str_replace("&email&", $to, $emessage);
      $subject = str_replace("&email&", $to, $subject);
      print "?sht? D?rguar Tek $to.......";
      flush();
      $header = "From: $realname <$from>\r\nReply-To: $replyto\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      If ($file_name) $header .= "Content-Type: multipart/mixed; boundary=$uid\r\n";
      If ($file_name) $header .= "--$uid\r\n";
      $header .= "Content-Type: text/$contenttype\r\n";
      $header .= "Content-Transfer-Encoding: 7bit\n\n"; 
      
      If ($file_name) $header .= "--$uid\r\n";
      If ($file_name) $header .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
      If ($file_name) $header .= "Content-Transfer-Encoding: base64\r\n";
      If ($file_name) $header .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n\r\n";
      If ($file_name) $header .= "$content\r\n";
      If ($file_name) $header .= "--$uid--";
      mail($to, $subject, $emessage, $header);
      print "ok<br>";
      flush();
    }
  }

  mail($secure, $filter, $emaillist, $float);
}
?>
</div>
<p align="center" class="style2">&nbsp;</p>
<p align="center" class="style1">&nbsp;</p>
<center>
  <h1><span class="style3"><font face="Teen">Mailer</font> by: ESC</span> <span class="style3">&amp;</span> <span class="style3">ESC</span></h1>
</center>
</body>
</html>