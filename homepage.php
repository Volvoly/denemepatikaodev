<a href="index.php?sayfa=insert">[İçerik Ekle]</a>

<?php

$dersler=$db->query('SELECT * FROM dersler')->fetchAll(PDO::FETCH_ASSOC)


?>