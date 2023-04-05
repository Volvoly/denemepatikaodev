<?php


/*$sorgu= $db->prepare('INSERT INTO dersler SET

baslik = ?,
icerik = ?,
onay = ?');

$ekle=$sorgu->execute([
'deneme başlık','icerik',1
]);

if ($ekle){
    echo 'veriler eklendi!';
}
else{
    print_r( $sorgu->errorInfo());
}
*/

//FORM GÖNDERİLMİŞ

if (isset($_POST['submit'])) {

    $baslik=isset($_POST['baslik']) ?$_POST['baslik']:null;
    $icerik=isset($_POST['icerik']) ?$_POST['icerik']:null;
    $onay=isset($_POST['onay']) ?$_POST['onay']:null;

if (!$baslik){
    echo'Başlık ekleyin!';

}elseif(!$icerik){
    echo 'içeriği belirleyin!';

}
else 
{
    //EKLEME İŞLEMİ
    $sorgu= $db->prepare('INSERT INTO dersler SET

    baslik = ?,
    icerik = ?,
    onay =?');
}
    $ekle=$sorgu->execute([
        $baslik,$icerik,$onay
    ]);
    if ($ekle){
        header('Location:index.php');
    }else {
        $hata=$sorgu->errorInfo();
        echo 'mysql Hatası'. $hata[2];

}

}



?>
<form action="" method="post">
Başlık:<br>
<input type="text" name="baslik"> <br> <br>

İçerik:<br>
<textarea name="icerik" cols="30" rows="10"></textarea> <br>

Onay:<br>
<select name="onay">
    <option value="1">Onaylı</option>
    <option value="0">Onaylı Değil</option>
</select> <br> <br>
<input type="hidden" name="submit" value="1">
<button type="submit">Gönder</button>

</form>

