<?php
$MainTitle="Issues &amp; Suggestions";
require '/home/content/46/5959446/html/GAEM/resident/CommonCode.php';

print<<<EOM
$TopOfPage
<!-- Top of Content -->

<h1>$MainTitle</h1>
	<font size=+1>Use this form to submit any issues or suggestions you may have.</font></b><P>
<!-- table border=0><tr><td -->

<form action="issues.php" method="post" enctype="multipart/form-data">
<input type=hidden name="txtype" value="A">
<table border=1>
<tr><td>Name</td><td><input type=text name="name"></td></tr>
<tr><td>Email</td><td><input type=text name="email"></td></tr>
<tr><td>Address</td><td><input type=text name="address"><br>Ellicott City, MD 21043
<tr><td valign=top>Description of Issue or Suggestion</td><td><textarea name="issue" rows=5 cols=50></textarea></td></tr>
<tr><td>Onset of Issue (Change as needed) </td><td><input type=text name="onset" value="$DTG1"></td></tr>
<tr><td>If you have a picture, select the file to be uploaded:<br>(must be less that 3MB JPG, JPEG, PNG or GIF)</td><td>
<input type="file" name="fileToUpload" id="fileToUpload">
</td></tr>
</table>
<P>
<input type="submit" value="Submit" name="submit">
</form>
<!-- /td></tr></table -->




$DTG2

<!-- Bottom of Content -->
$BottomOfPage
EOM;

?>
