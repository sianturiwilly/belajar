<?php
    for($i=0;$i<10;$i++){
        echo "Perulangan ke-".++$i."<br>";
        $i–;
        if($i==6)
        break;
    }
?>