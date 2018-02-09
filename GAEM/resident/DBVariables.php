<?php
$HostName = "WincingDevilDB1.db.5959446.hostedresource.com";
$DBName = "WincingDevilDB1";
$ShibFile = "/home/content/46/5959446/shibboleth.txt";
$Shibboleth = "";
$InFile = fopen($ShibFile,"r");
while (! (feof($InFile)) && ($DBIn != $DBName)) {
	$Ct++;
	$InLine = rtrim(fgets($InFile));
	list($UserIn,$PassIn,$DBIn) = explode("\t", $InLine);
	$DBIn=rtrim($DBIn);
	if ($DBIn == $DBName) {
		$UserName = $UserIn;
		$Shibboleth = str_rot13($PassIn);
	} 
}
fclose($InFile);
#print "$Ct --- U:[$UserName] S:[$Shibboleth]\n";
?>

