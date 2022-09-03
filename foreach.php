<?php
    $nama = array(
            1=>"Willi",
            6=>"Darwis",
            12=>"Nike",
            45=>"Reisa",
            55=>"Aura");
    
    foreach ($nama as $kunci =>$isi)
    {
        echo "Urutan ke-$kunci adalah $isi";
        echo "<br />";
    }
?>