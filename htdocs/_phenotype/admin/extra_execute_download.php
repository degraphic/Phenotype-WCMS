<?php
// -------------------------------------------------------
// Phenotype Content Application Framework
// -------------------------------------------------------
// Copyright (c) 2003-2010 Nils Hagemann, Paul Sellinger,
// Peter Sellinger, Michael Kr�mer.
//
// Open Source since 11/2006, I8ln since 11/2008
// -------------------------------------------------------
// Thanks for your support: 
// Markus Griesbach, Alexander Wehrum, Sebastian Heise,
// Dominique Boes, Florian Gehringer, Jens Bissinger
// -------------------------------------------------------
// www.phenotype-cms.com - offical homepage
// www.sellinger-design.de - inventors of phenotype
// -------------------------------------------------------
// Version 3.0 vom 31.01.2010
// -------------------------------------------------------
?>
<?php


require ("_config.inc.php");
require ("_session.inc.php");
$myPT->loadTMX("Extras");
?>
<?php


if (!$mySUser->checkRight("elm_extras"))
{
	$url = "noaccess.php";
	Header("Location:".$url."?".SID);
	exit ();
}
?>
<?php 


$id = $myRequest->getI("id");
$cname = "PhenotypeExtra_".$id;
$myExtra = new $cname ();

$myExtra->execute($myRequest);

?>
