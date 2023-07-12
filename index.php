<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <!--задача 1-->
    <?php
    $var = 'hell';
    echo $var[0];
    echo $var[1];
    echo $var[4];
    ?>
    <!--задача 2-->
    <?php
    echo 60 * 60;
    ?>
    <!--задача 3-->
    <?php
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var++;
    $var--;
    echo $var;
    ?>
    <!--задача 4-->
    <?php
    $a = 3;
    echo $a;
    ?>
    <!--задача 5-->
    <?php
    $a = 10;
    $b = 2;
    echo $a+$b;
    echo $a-$b;
    echo $a*$b;
    echo $a/$b;
    ?>
    <!--задача 6-->
    <?php
    $c = 15;
    $d = 2;
    $result = $c+$d;
    echo $result
    ?>
    <!--задача 7-->
    <?php
    $a = 10;
    $b = 2;
    $c = 5;
    $result = $a+$b+$c;
    echo $result
    ?>
    <!--задача 8-->
    <?php
    $a = 17;
    $b = 10;
    $c = $a+$b;
    $d = 7;
    $result = $c+$d;
    echo $result;
    ?>
    <!--задача 9-->
    <?php
    $text = 'Ïðèâåò, Ìèð!'
    echo $text;
    ?>
    <!--задача 10-->
    <?php
    $text1 = 'Ïðèâåò'
    $text2 = ', Ìèð!'
    echo $text1 . $text2;
    ?>
    <!--задача 11-->
    <?php
    $name = 'Èâàí'
    echo 'ïðèâåò,' . $name;
    ?>
    <!--задача 12-->
    <?php
    $age = '22';
    echo 'ìíå' . $age . 'ëåò';
    ?>
    <!--задача 13-->
    <?php
    $text = 'abcde';
    $text[0] = '!';
    $text[2] = 'e';
    echo $text;
    ?>
    <!--задача 14-->
    <?php
    $text = 'abcde';
    $text[0] = '!';
    echo $text;
    ?>
    <!--задача 15-->
    <?php
    $num = '12345';
    $sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
    ?>
    <!--задача 16-->
    <?php
    $hour = 60 * 60;
    $day = $hour * 24;
    $month = $day * 30;
    ?>
    <!--задача 17-->
    <?php
    $hour = 0;
    $min = 19;
    $sec = 33;
    echo $hour . ':' . $min . ':' . $sec;
    ?>
    <!--задача 18-->
    <?php
    $a = 6;
    $a *= $a;
    echo $a;
    ?>
    <!--задача 19-->
    <?php
    $var = 47;
    $var += 7;
    $var -= 18;
    $var *= 10;
    $var /= 20;
    echo $var;
    ?>
    <!--задача 20-->
    <?php
    $text = 'ß';
    $text .= ' õî÷ó';
    $text .= ' çíàòü';
    $text .= ' PHP!';
    echo $text;
    ?>
    <!--задача 21-->
    <?php
    $var = 10;
    $var++;
    $var++;
    $var--;
    echo $var;
    ?>
    <!--задача 22-->
    <?php
    $var = 10;
    $var += 7;
    $va++;
    $var--;
    $var += 12;
    $var *= 7;
    $var -= 15;
    echo $var;
    ?>
</body>
</html>