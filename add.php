<!DOCTYPE HTML>  
<html>
<head>
 <title>Add ABCD Button Textfile PHP</title>
 <link rel="shortcut icon" href="favicon.ico" />
 <link href="styles.css" rel="stylesheet" />
 
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
//  This is a comment:
//  Tiny PHP code for a notepad for education purpose and students (*easily hackable, no warranty!*) 
//include('menu.html'); 
?>

 <hr/> 
 <a href="textfile.txt">Visit the text file</a> | <a href="textfile.txt">Documents</a>
 <hr/> 

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Comment: <textarea name="quval" rows="5" cols="40"><?php echo $quval;?></textarea>
 <br><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
  <input type="submit" name="submit" value="submit">  
 <br><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
  <input type="submit" name="btn_submit" value="Button0"  />
 <br><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button1"  />
 <br><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button2"  />
 <br><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button3"  />
 <br><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button4"  />
 <br><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Linefeed"  />
 <br><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Nothing"  />
 <br>
</form>



<?php
// echo "<h2>Your Input:</h2>";
echo "<br>";
echo $comment;
?>



<?php    
/// do not forget to make the txt file, to make it work
$now = time();
$num = date("w");
if ($num == 0)
{ $sub = 6; }
else { $sub = ($num-1); }
$WeekMon  = mktime(0, 0, 0, date("m", $now)  , date("d", $now)-$sub, date("Y", $now));    //monday week begin calculation
$todayh = getdate($WeekMon); //monday week begin reconvert

$dd = $todayh[mday];
$mm = $todayh[mon];
$yy = $todayh[year];
$timenow = date("Ymd-His-w"); 

if( $_REQUEST['btn_submit'] == "presskey" )
{
  echo "<button type=\"button|submit|reset\">";
  echo 'Press Key<br><br>' ;
}

else if( $_REQUEST['btn_submit'] == "Linefeed" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("textfile.txt", "ab+") or die("Unable to open file!");
  $txt = "\n"  ;
  fwrite($myfile, $txt);
  fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button0" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("textfile.txt", "ab+") or die("Unable to open file!");
  $txt = "0" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button1" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("textfile.txt", "ab+") or die("Unable to open file!");
  $txt = "0.75" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button2" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("textfile.txt", "ab+") or die("Unable to open file!");
  $txt = "1.5" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button3" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("textfile.txt", "ab+") or die("Unable to open file!");
  $txt = "2.25" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}


else if( $_REQUEST['btn_submit'] == "Button4" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("textfile.txt", "ab+") or die("Unable to open file!");
  $txt = "3.00" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}


else if(isset($_POST['submit']))
{ 
$input = $_POST['quval']; //get input text
echo "|IM Sent!| You entered (hello): " .$input . "<br>" ;
echo '<br><br>' ;
$myfile = fopen("textfile.txt", "ab+") or die("Unable to open file!");
$txt = $input . ";" ;
fwrite($myfile, $txt);
fclose($myfile);
}    
?>
 

<br/><br/>
</body>
</html>



