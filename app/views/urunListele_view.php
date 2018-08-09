<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Listesi</title>
</head>
<body>

<ul>

    <?

        foreach ($urunListesi as $urun){

            echo "<li>".$urun["urun_adi"]."</li>";

        }

    ?>

</ul>

</body>
</html>