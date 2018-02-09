<?php
// $date=date_create("",timezone_open("America/New_York"));
/*
$DTG= date_format($date,"m/d/y @ H:i:s");
$DTG1= date_format($date,"m/d/Y");
$DTG2= date_format($date,"ymd_His");
*/
$DTG= date("m/d/y @ H:i:s");
$DTG1= date("m/d/Y");
$DTG2= date("ymd_His");

$Ref1= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "?";
#$Ref1 = $_SERVER['HTTP_REFERER'];
$Remt = $_SERVER['REMOTE_ADDR'];
$Agent = $_SERVER['HTTP_USER_AGENT'];
$ScriptName = $_SERVER["PHP_SELF"];
$Request_URI = $_SERVER["REQUEST_URI"];
$LogFileName= "/home/content/46/5959446/html/GAEM/resident/CombinedLog.txt";
$T = "\t";
$C = ",";
$LogFile = fopen($LogFileName,"a");
$LogLine = $DTG2 . $T.  $ScriptName . $T . $Ref1 .$T . $Remt . $T . $Agent . $T .$Request_URI . "\n";
fwrite($LogFile, $LogLine);
fclose ($LogFile);

$TopColor= "#E9E5DC";
$BottomColor="#cbc2ad";

$MainMenu1=<<<EOM
<div id="wrapper">
<div id="navmenu">
<center>
EOM;

$Spacer=1;

$MainMenu2=<<<EOM
<center>
<table border=0><tr>
<td width=$Spacer>&nbsp;</td>
<td>
<ul id="drop-nav">
<li><a href="">Who's Who</a>

<ul>
<li><a href="/resident/bod.php">Board of Directors</a></li>
<li><a href="/resident/committee.php">Committees</a></li>
<li><a href="/resident/newphone.php">Phone List</a></li>
<li><a href="http://www.EllicottMills.net/NewDigs/newdigs2.php"">Directions and maps</a></li>
<li><a href="/resident/directory2.php">Resident Directory</a></li>

</ul>
</li>

<li><a href="">Newsletters</a>

<ul>
<li><a href="/resident/September_2017_Newsletter.pdf" target="_blank">September 2017</a></li>
<li><a href="/resident/August-2017-Newsletter.pdf" target="_blank">August 2017</a></li>
<li><a href="/resident/June2017Newsletter.pdf" target="_blank">June 2017</a></li>
<li><a href="/resident/April_2017_Newsletter_GAEM.pdf" target="_blank">April 2017</a></li>
<li><a href="/resident/February-March-2017-Newsletter.pdf" target="_blank">Feb-Mar 2017</a></li>
<li><a href="/resident/November-December-2016-Newsletter.pdf" target="_blank">Nov-Dec 2016</a></li>
<li><a href="/resident/September-October-2016-Newsletter.pdf" target="_blank">Sep-Oct 2016</a></li>
<li><a href="/resident/July-August-2016-Newsletter.pdf" target="_blank">Jul-Aug 2016</a></li>
<li><a href="/resident/May-June-2016-Newsletter.pdf" target="_blank">May-June 2016</a></li>
<li><a href="/resident/March2016Newsletter.pdf" target="_blank">March 2016</a></li>
<li><a href="/resident/GEM-January-2016-Newsletter.pdf" target="_blank">January 2016</a></li>
<li><a href="/resident/GEMOct2015Newsletter.pdf" target="_blank">October 2015</a></li>
<li><a href="/resident/GEM_Aug_2015_Newsletter.pdf" target="_blank">August 2015</a></li>
<li><a href="/resident/June-July-2015-Newsletter-Final.pdf" target="_blank">June/July 2015</a></li>
<li><a href="/resident/May-2015-Newsletter-150518.pdf" target="_blank">May 2015</a></li>
<li><a href="/resident/GAEM_AprilNewsLetter.pdf" target="_blank">April 2015</a></li>
<li><a href="/resident/GEM-NewsletterV1N1-150209a.pdf" target="_blank">March 2015</a></li>
</ul>

<li>
<a href="/resident/financials">Financials</a>
</li>

<li>
<a href="/resident/hoadox.php">HOA Documents</a>
</li>

<li>
<a href="/resident/calendar.php">Calendar</a>
</li>

<li>
<a href="/resident/clubhouse/">Clubhouse</a>
</li>

<li>
<a href="/resident/otherinfo.php">Other Info</a>
</li>


</ul>
</li>
</ul>

</td>
<td width=$Spacer>&nbsp;</td>
</tr></table>
</center>

EOM;

$MainMenu3=<<<EOM
<p>
<center>
</div>
</div>
<center>
<a href="https://www3.senearthco.com/index.cfm?fuseaction=home.sign_in&mgtCompanyName=tidewater&association=6518">Tidewater Property Management Homeowners Login</a><p>
<a href="http://www.ellicottmills.net/resident/hcac.php">Summary of Howard County Animal Control Laws</a>
<!-- hr -->
<!-- h3>Special BoD Meeting, 7/29 6:30PM Clubhouse</h3 -->
<!-- font color=black><h4>Next Board meeting Tuesday, 8/25/15, 6:30PM Miller Library.  Click <a href="https://goo.gl/maps/SOMC3"><font color=black>here</font></a> for directions. -->
<!-- The agenda is <a href="/resident/May-2015-Agenda.pdf">here</a>.</h4></font -->
</center>
</h4>
EOM;

$MainMenu = $MainMenu1 . $MainMenu2 . $MainMenu3;

$TopOfPage=<<<EOM
<!doctype html>
<html lang="en">
<head>
  <title>$MainTitle</title>
  <meta charset="UTF-8">
  <meta name="Author" content="Vince Wilding">
  <meta name="Keywords" content="HOA, Condo Association, Ellicott City, Gatherings at Ellicott Mills, $MainTitle">
  <meta name="Description" content="$MainTitle, Gatherings at Ellicott Mills">
</head>

<!-- link href="/navcss.css" rel="stylesheet" type="text/css" / -->

<style>
.wrapper { min-height: 100%; height: auto !important; height: 100%; margin: 0 auto -250px;
 background: $TopColor; /* old browsers */
    background: -moz-linear-gradient(top, $TopColor 0%, $BottomColor 100%); /* firefox */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,$TopColor), color-stop(100%,$BottomColor)); /* webkit */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='$TopColor', endColorstr='$BottomColor',GradientType=0 ); /* ie */ 
    border-style: solid;
    border-color: black;
    border-width: 3px;

} /* corresponds to height of #footer */

#body-wrapper {

    height: 100%;
    width: 100%;
}
  ul {list-style: none;padding: 0px;margin: 0px;}
  ul li {display: block;position: relative;float: left;border:1px solid #000}
  li ul {display: none;}
  ul li a {display: block;background: #a88f8b;padding: 5px 21px 5px 10px;text-decoration: none;
           white-space: nowrap;color: #000;}
  ul li a:hover {background: #FAF0E6;}
  li:hover ul {display: block; position: absolute;}
  li:hover li {float: none;}
  li:hover a {background: #FDF5E6;}
  li:hover li a:hover {background: #FAEBD7;}
  #drop-nav li ul li {border-top: 0px;}
</style>
</head>
<body font face=verdana, sans-serif background="/bricks.jpg" link=black vlink=black alink=black>
<center>
<table cellpadding = 52><tr><td>
<div id ="body-wrapper">
    <div class="wrapper">
<br>&nbsp;
<center>
<img src="/smallsign.jpg" border=2 alt="Logo">
<br><b><font size=+2>An Absolute <I>GEM</I> of a Community</font></b><br>
</center>
<blockquote>
<hr>
$MainMenu
<p>
<hr>
<p>
EOM;

$BottomOfPage=<<<EOM
<p>&nbsp;
<p>&nbsp;

<div class="push"></div>
</div>
</td>
</tr>
</table>
</div>
<p>&nbsp;
<p>&nbsp;

</body>
</html>
EOM;

?>
