<?php
//$file = "104db402742c6829aeacd915361cffe2.pdf";
$file = $_GET["file"];
$filename = 'placement.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename= " ' .$file.' " ');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>