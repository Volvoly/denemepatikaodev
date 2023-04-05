<?php

$sorgu= $db->prepare ('UPDATE dersler SET

baslik=?,
icerik=?,
onay=?,

WHERE id=?');

$guncelle=$sorgu->execute([ 
    'yeni başlık','yeni içerik',1,3
]);

if ($guncelle){
    echo 'Güncelleme işlemi başaralı';

}else'güncelleme yapılmadı bro';



?>