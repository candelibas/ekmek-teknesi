<?php


require 'config.php';

// Are you AJAX request ?
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    // Yes , I am!
    
    // So, add data
    
    $veri = explode(" ",$_POST['veresiye_veri']);
    
    $query = $db->prepare("UPDATE musteriler SET
    musteri_ekmek = musteri_ekmek + :ekmek,
    musteri_su    = musteri_su + :su WHERE musteri_adi = :musteri  ");
    $insert = $query->execute(array( 
        ":ekmek"   => $veri[1] == "" ? $veri[1] = 0 : $veri[1],
        ":su"      => $veri[2] == "" ? $veri[2] = 0 : $veri[2],
        ":musteri" => $veri[0]
    ));
    
    if ($insert)
    {
        $last_id = $db->lastInsertId();
        echo "Başarıyla eklendi!";
    }
    else
    {
        echo "Eklenemedi";
    }
    
    
}
else
{
    exit("Yanlış sulardasın kardeş!!");
}