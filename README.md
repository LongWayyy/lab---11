# lab---11
<p></p>

<h2 align="center">ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ <br> «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ» <br> КАФЕДРА ИНФОРМАТИКИ </h2>
<p align="center">Лабораторная работа №11 <br>
по предмету «Web-технологии, языки и средства создания web-приложений» 

<p align="center"><b>""PHP""</b><p>
<p align="right"><b>Выполнил: </b> студент 231 группы Хорошко Илья Алексеевич</p>
<p  align="right"><b>Проверил: </b> Соболев Е. И., старший преподователь</p>
<br>
<br>
<br>
<p align="center">Южно-Сахалинск <br> СахГУ <br> 2023</p>
<h2> Введение </h2>
<p>Лабораторные работы по дисциплине «Web-технологии, языки и средства создания web-приложений» предназначены для освоения полученных теоретических знаний на практике. <br>
<h2 align="center">Задачи</h2>

1.  Создайте переменную $var и присвойте ей значение 'hello'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'.
2.	Напишите скрипт, который считает количество секунд в часе.
3.	Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:
```php
<?php
	$var = 1;
	$var = $var + 12;
	$var = $var - 14;
	$var = $var * 5;
	$var = $var / 7;
	$var = $var + 1;
	$var = $var - 1;
	echo $var;
?>
```
4.	 Создайте переменную `$a` и присвойте ей значение 3. Выведите значение этой переменной на экран.
5.	Создайте переменные `$a=10` и `$b=2`. Выведите на экран их сумму, разность, произведение и частное (результат деления).
6.	Создайте переменные `$c=15` и `$d=2`. Просуммируйте их, а результат присвойте переменной `$result`. Выведите на экран значение переменной `$result`.
7.	Создайте переменные `$a=10`, `$b=2` и `$c=5`. Выведите на экран их сумму.
8.	 Создайте переменные `$a=17` и `$b=10`. Отнимите от `$a` переменную `$b` и результат присвойте переменной `$c`. Затем создайте переменную `$d`, присвойте ей значение 7. Сложите переменные `$c` и `$d`, а результат запишите в переменную `$result`. Выведите на экран значение переменной `$result`.
9.	Создайте переменную `$text` и присвойте ей значение `'Привет, Мир!'`. Выведите значение этой переменной на экран.
10.	 Создайте переменные `$text1='Привет, '` и `$text2='Мир!'`. С помощью этих переменных и операции сложения строк выведите на экран фразу `'Привет, Мир!'`.
11.	 Создайте переменную `$name` и присвойте ей ваше имя. Выведите на экран фразу `'Привет, %Имя%!'`. Вместо `%Имя%` должно стоять ваше имя.
12.	 Создайте переменную `$age` и присвойте ей ваш возраст. Выведите на экран `'Мне %Возраст% лет!'`.
13.	Создайте переменную `$text` и присвойте ей значение `'abcde'`. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
14.	 Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
15.	 Создайте переменную `$num` и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
16.	Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
17.	 Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
18.	 Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.
19.	Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
```php
$var = 47;
$var = $var + 7;
$var = $var - 18;
$var = $var * 10;
$var = $var / 20;
echo $var;
```
20.	 Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.
```php
$text = 'Я';
$text = $text.' хочу';
$text = $text.' знать';
$text = $text.' PHP!';
echo $text;
```
21.	 Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.
```php
$var = 10;
$var = $var + 1;
$var = $var + 1;
$var = $var - 1;
echo $var;
```
22.	 Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
```php
$var = 10;
$var = $var + 7;
$var = $var + 1;
$var = $var - 1;
$var = $var + 12;
$var = $var * 7;
$var = $var - 15;
echo $var;
```


<h2 align="center">Решение задач</h2>

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



<h2 align="center">Вывод</h2>
В ходе лабораторной работы были изучены элементы языка PHP  и рассмотрены способы задания переменных.
