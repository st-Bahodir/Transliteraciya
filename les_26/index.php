<?php

//Из кириллицы в латиницу

function transliterateen($input){
$gost = array(
"a"=>"а","b"=>"б","v"=>"в","g"=>"г","d"=>"д","e"=>"е","yo"=>"ё",
"j"=>"ж","z"=>"з","i"=>"и","i"=>"й","k"=>"к",
"l"=>"л","m"=>"м","n"=>"н","o"=>"о","p"=>"п","r"=>"р","s"=>"с","t"=>"т",
"y"=>"у","f"=>"ф","h"=>"х","c"=>"ц",
"ch"=>"ч","sh"=>"ш","sh"=>"щ","i"=>"ы","e"=>"е","u"=>"у","ya"=>"я","A"=>"А","B"=>"Б",
"V"=>"В","G"=>"Г","D"=>"Д", "E"=>"Е","Yo"=>"Ё","J"=>"Ж","Z"=>"З","I"=>"И","I"=>"Й","K"=>"К","L"=>"Л","M"=>"М",
"N"=>"Н","O"=>"О","P"=>"П",
"R"=>"Р","S"=>"С","T"=>"Т","Y"=>"Ю","F"=>"Ф","H"=>"Х","C"=>"Ц","Ch"=>"Ч","Sh"=>"Ш",
"Sh"=>"Щ","I"=>"Ы","E"=>"Е", "U"=>"У","Ya"=>"Я","'"=>"ь","'"=>"Ь","''"=>"ъ","''"=>"Ъ","j"=>"ї","i"=>"и","g"=>"ґ",
"ye"=>"є","J"=>"Ї","I"=>"І",
"G"=>"Ґ","YE"=>"Є"
);
return strtr($input, $gost);
}

//Из латиницы в кириллицу

function transliterate($input){
$gost = array(
"а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d",
"е"=>"e", "ё"=>"yo","ж"=>"j","з"=>"z","и"=>"i",
"й"=>"i","к"=>"k","л"=>"l", "м"=>"m","н"=>"n",
"о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t",
"у"=>"y","ф"=>"f","х"=>"h","ц"=>"c","ч"=>"ch",
"ш"=>"sh","щ"=>"sh","ы"=>"i","э"=>"e","ю"=>"u",
"я"=>"ya",
"А"=>"A","Б"=>"B","В"=>"V","Г"=>"G","Д"=>"D",
"Е"=>"E","Ё"=>"Yo","Ж"=>"J","З"=>"Z","И"=>"I",
"Й"=>"I","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
"О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
"У"=>"Y","Ф"=>"F","Х"=>"H","Ц"=>"C","Ч"=>"Ch",
"Ш"=>"Sh","Щ"=>"Sh","Ы"=>"I","Э"=>"E","Ю"=>"U",
"Я"=>"Ya",
"ь"=>"","Ь"=>"","ъ"=>"","Ъ"=>"",
"ї"=>"j","і"=>"i","ґ"=>"g","є"=>"ye",
"Ї"=>"J","І"=>"I","Ґ"=>"G","Є"=>"YE"
);
return strtr($input, $gost);
}


//Lat > cyr
$lat = $_GET ['lat'];
$cyr=transliterateen($lat);


//Cyr > Lat
$cyr = $_GET ['cyr'];
$lat=transliterate($cyr);





?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Транслитерация на PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Транслитерация на PHP</h3>
    <form action="" method="GET">
        <label for=""> Из латиницы в кириллицу
            <input type="text" name="lat"> <?php echo $cyr; ?>
        <br>
        </label>
        <label for=""> Из кириллицы в латиницу
             <input type="text" name="cyr"> <?php echo $lat; ?>
        <br>
        </label>
       
        <button type="submit">Транслитерировать</button>
        
    </form>
</body>
</html>