<?php
$MainTitle="Gatherings at Ellicott Mills";
require 'resident/CommonCode.php';
print<<<EOM
$TopOfPage
<!-- Top of Content -->

<center>
<h3>Some of the links above require login. Residents, please click <a href="mailto:info@EllicottMills.net?subject=Access">here</a> to request access.</h3>
</center>
<table><tr><td valign=top align=left>
<img src="clubhouse.jpg" width=640 alt="view of clubhouse" border=2>&nbsp;&nbsp;
</td><td valign=top align=left>
<blockquote>
<h3>Public Links</h3>
	<li><a href="/NewDigs/newdigs2.php">Directions and maps</a></li>
	<li><a href="mailto:info@ellicottmills.net">Contact Us</a>
  <p>&nbsp;
  <p>&nbsp;
  <p>&nbsp;
  <p>&nbsp;
  <a href="https://www.facebook.com/groups/407660772732907/" target="_blank"><img src="/fb.jpg" height=44></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/gem.xml"><img src="/rss.png" height=44></a>
</blockquote>
</td></tr></table>


<!-- Bottom of Content -->
$BottomOfPage
EOM;

?>
