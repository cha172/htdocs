<?php 

header('Content-Type: '.$qrCode->getContentType());
        echo $qrCode->writeString();
        
        echo '<img src="' . $qrCode->writeDataUri() . '">';
        ?>
        
        
