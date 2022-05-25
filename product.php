<?php
include_once 'model/products.php';
include_once 'model/comments.php';

$id = $_GET['id'];

if (!$id) {
    header('location: /index.php');
}

$product = productById($id)[0];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if ($product): ?>
    <div style="display:flex;flex-direction: column;">
        <strong><?=$product['name']?></strong>
        <div>
            <?=$product['description']?>
        </div>
        <div>
            Цена: <?=$product['price']?>
        </div>
        <img src="<?='/images/'.$product['image']?>" alt="" height="200px" style="object-fit: cover;width: fit-content">
        <FORM name = "comment_module" action="/model/comments.php" method="post" style="object-fit: cover;width: 300px; align-items: center; border: solid black">
            <input type="text">
            <button value="<?=$product['id']?>" type = "submit"> Добавить </button>
        </FORM>

    </div>
<!--    -->
<!--<form>-->
<!--    <input type="text">-->
<!--    -->
<!--    <button type="submit">Отправить</button>-->
<!--</form>-->
<?php else: ?>
    <div>
        Не найдено товара с id = <?=$id?>
    </div>
<?php endif; ?>
</body>
</html>

