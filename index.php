<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>No Drugs only Друг</title>
</head>
<body>
<?php
//Задание 1
$a = $_GET['a'];
$b = $_GET['b'];
//if($a>=0 & $b>=0) echo $a-$b;
//else
//    if($a<0 & $b<0) echo $a*$b;
//    else echo $a+$b;

//Задание 2
//$a = mt_rand(0,15);
//for ($i=$a;$i<=15;$i++)
//    echo $i."


//Задание 3
//function  mathOperation($arg1, $arg2, $operation){
//    switch ($operation){
//        case "+": return $arg1 + $arg2;
//        case "-": return $arg1 - $arg2;
//        case "*": return $arg1 * $arg2;
//        case "/": return $arg1 / $arg2;
//        default: return "Операция не найдена";
//    }
//}
//echo mathOperation($a,$b, "*")


//Задание 4
//echo "Текущий год: ".date("Y")



//Задание 5
//function getStringDescriptionFromNumber($num){
//    if($num == 0) return $num." - это ноль.";
//    if($num % 2 == 0) return $num." - это четное число.";
//    else return $num." - это нечетное число.";
//}
//$i=0;
//while($i <= 10){
//    echo "<div>".getStringDescriptionFromNumber($i)."</div>";
//    $i++;
//}


//Задание 6
//$city_dict = [
//        "Московская область" => ["Москва", "Иваново", "Зеленоград"],
//        "Тюменская область" => ["Тюмень", "Тобольск", "Ялуторовск"],
//        "Курганская область" => ["Курган", "Шадринск"]
//];
//foreach ($city_dict as $district => $cities){
//    echo "<div>".$district.":"."<div>";
//    for ($i=0; $i<count($cities);$i++){
//        if($i==count($cities)-1) echo $cities[$i].".";
//        else echo $cities[$i].", ";
//    }
//    echo "</div> </div>";
//}



////Задание 7
//$dict = [
//        'a' => "a",
//        'б' => "b",
//        'в' => "v",
//        'г' => "g",
//        'д' => "d",
//        'е' => "e",
//        'ё' => "yo",
//        'ж' => "zh",
//        "з" => "z",
//        'и' => "i",
//        'й' => "y",
//        'к' => "k",
//        'л' => "l",
//        'м' => "m",
//        'н' => "n",
//        'о' => "o",
//        'п' => "p",
//        'р' => "r",
//        'с' => "s",
//        'т' => "t",
//        'у' => "u",
//        'ф' => "f",
//        'х' => "h",
//        'ц' => "c",
//        'ч' => "ch",
//        'ш' => "sh",
//        'щ' => "sch",
//        'ъ' => "",
//        'ы' => "y",
//        'ь' => "",
//        'э' => "e",
//        'ю' => "yu",
//        'я' => "ya",
//
//];
//echo strtr('здарова отец',$dict)

////Задание 8
//$menu = [
//    "Меню1" => ["Подменю1", "Подменю2"=>["Подподдменю1", "Подподдменю2"],"Подменю3"=>["Подподменю3"]],
//    "Меню2" => ["Подменю4","Подменю5"=>["Подподменю4","Подподменю5"]]
//];
//renderMenu($menu);
//function renderMenu($menuArray){
//    foreach($menuArray as $menu => $submenu) {
//        if(is_array($submenu)) {
//            echo('<li>'.$menu.'</li>');
//            echo ('<ul>');
//            renderMenu($submenu);
//            echo ('</ul>');
//        } else {
//            echo('<li>' . $submenu . '</li>');
//        }
//
//    }
//}
?>
</body>
</html>