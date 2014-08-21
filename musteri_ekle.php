<?php


require 'config.php';

// Are you AJAX request ?
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    // Yes , I am!
    
    // So, add data
    
    $query = $db->prepare("INSERT INTO musteriler SET
    musteri_adi   = ?,
    musteri_ekmek = ?,
    musteri_su    = ?");
    $insert = $query->execute(array(
        $_POST['musteri_adi'],
        $_POST['musteri_ekmek'] == "" ? $_POST['musteri_ekmek'] = 0 : $_POST['musteri_ekmek'],
        $_POST['musteri_su'] == "" ? $_POST['musteri_su'] = 0 : $_POST['musteri_su']
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