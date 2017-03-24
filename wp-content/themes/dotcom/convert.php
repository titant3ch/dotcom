<?php
$myurl = 'dotcomStackPDF.pdf';
$image = new Imagick($myurl);
$image->setResolution( 300, 300 );
$image->setImageFormat( "png" );
$image->writeImage('newfilename.png');
?>