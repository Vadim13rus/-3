<?php

/*
Задание 1: разместить строчки кода ниже и вызвать в браузере ваш первый php-скрипт:
echo "Hello world!";
*/

echo "Hello world!";

/*
Задание 2: Повторить весь код из роликов раздела "Материалы на обучение"
*/
//Изучение PHP для начинающих | Урок #4 - Комментарии в PHP

echo "Hi!"; //Эта строчка выводит Hi- вид записи для однострочного комментария (язык C)
/*комментарий 1
                комментарий 2  - вид записи для многострочных комментариев (язык C++)
                комментарий 3*/
echo "Hi!"; #Эта строчка выводит Hi- вид записи для однострочного комментария(Unix)    



//Изучение PHP для начинающих | Урок #5 - Переменные и их типы
$myNumber = 45; //числовая переменная
$float = -3.25; // переменная с плавающей точкой
$string = "Hello World!"; // строковая переменная
$bool = true; // булевская переменная

echo "Переменная = $myNumber"; // конструкция языка выводит на экран значение переменной - "Переменная = 45"
echo "<br />";
echo "Переменная myNumber = $float"; // конструкция языка выводит на экран значение переменной - "Переменная myNumber = -3.25"
echo "<br />";
echo "Переменная = $string"; // конструкция языка выводит на экран значение переменной - "Переменная = Hello World!"
echo "<br />";
echo "Переменная bool =$bool"; // конструкция языка выводит на экран значение переменной - "Переменная bool =1"
echo "<br />";
$myNumber = 12; // Переменная меняет свое значение на 12
echo "Переменная myNumber = $myNumber"; // конструкция языка выводит на экран значение переменной - "Переменная myNumber = 12"



// Изучение PHP для начинающих | Урок #6 - Константы
echo PHP_VERSION; // встроенная константа выводит на экран версию php
define("PI", 3.14); // константа, где define- ключевое слово определяющее именованную константу, PI- название константы, 3.14 - значение переменной
echo "<br />";
echo PI; // выводится на экран значение константы -3.14
echo defined(PI); // функция для установления испльзовалась константа или нет



// Изучение PHP для начинающих | Урок #7 - Арифметические операции
$x = 32;
$y = 22.13;
$summ = $x + $y; // сумма переменных
$diff = $x - $y; // разность 
$mult = $x * $y; // произведение
$dil = $x / $y; // частное

echo "Сумма из $x и $y = $summ<br />"; // вывод на экран суммы
echo "Разница из $x и $y = $diff<br />"; // вывод на экран разности
echo "Умножение из $x и $y = $mult<br />"; // вывод на экран произведения
echo "Деление из $x и $y = $dil<br />"; //  вывод на экран частного

$z = 12;

$ostatok = $x % $z; // деление с остатком
echo "Остаток при делении из $x и $z = $ostatok<br />"; //вывод на экран деления с остатком
$q = 400;

$q /= 10; // сокращенный вид записи деления значения переменной - 400 на 10 
echo $q; // вывод на экран результата деления значения переменной - 400 на 10 
echo "<br />";
$q = $q + 1; // прибавление единицы к значению переменной
$q += 1; // сокращенная запись прибавление единицы к значению переменной
$q++; // вид сокращенной запись прибавления единицы к значению переменной
$q--; // вид сокращенной запись убавления единицы от значения переменной



//Изучение PHP для начинающих | Урок #8 - Строковые операции
$str_1 = "<b>Первая строка</b> <input type=\"text\" />"; //строковая переменная
$str_2 = "<i>Вторая строка</i>"; // строковая переменная

echo $str_1 . " " . $str_2 . "\"\\"; // вывод строковой переменной, где точки позволяют объединить строковые переменные

echo '\' '; // вывод строковой переменной, где с помощью обратного слеша выводится одинарная ковычка



//Изучение PHP для начинающих | Урок #9 - Логические операции
$x = 12;
$y = 34;
$z = 4.25;

$bool_1 = $x != $z; // x не равен y - значение true

$bool_2 = $x <= $y; // x меньше или равен y - значение true

echo $bool_1 . "<br />" . $bool_2 . "<hr />";

$bool_3 = !($x == $y); // x равен значению y - значение false, но ! меняет результат равенства между x и y на противоположный, как итог результат true

$bool_4 = $x == $y || $z < $y; // в этом случае результат будет true если одно из значений будет true

$bool_5 = $z != $x && $y < $z; // в этом случае результат будет true если оба значения будут true

$bool_6 = $z != $x ^ $y < $z; // в этом случае результат будет false если одно из значений будет false

echo "<br />" . $bool_3 . "<br />" . $bool_4 . "<br />" . $bool_5 . "<br />" . $bool_6;

$bool = !($x != $y && $z < $x) || $x != $y; /* значения считываются сначала в скобках х не равен у - true затем  z < x - true, 
$x != $y && $z < $x - т.к. оба значени true, то результат true. знак ! меняет результат на противоположный - false. значение в правой стороне $x != $y- true. Т.к. false||true следовательно конечный результат true*/

echo "<br />" . $bool = !($x != $y && $z < $x) || $x != $y;



//Изучение PHP для начинающих | Урок #10 - Оператор эквивалентности
$string = "Example"; // строковая переменная
$num = 0; // числовая переменная

$bool_1 = $string == true; /*в данном случае подрузамевается, что
  строка содержит какое либо значение что верно. результат true*/

echo "<br />" . "$bool_1 = $string == true;"; // вывод результата на экран

$bool_2 = $num == "";/* в этом случае значение переменной равно нулю и оно
 приравнивается к false, 
т.к. строка не содержит какой либо информации и это верно. Результат true*/
echo "<br />$bool_2 = $num == \"\";"; //вывод на экран результата

$bool_3 = $string === "true"; /* оператор эквивалентности сравнивает тип переменных.
 Т.к. переменные разных типов, 
а оператор true, что не является верным, то результат будет false*/
echo "<br />$bool_3 = $string === true;"; //вывод на экран

$bool_4 = $num === ""; // переменные разные. результат false
echo "<br />$bool_4 = $num === \"\";"; // вывод на экран



//Изучение PHP для начинающих | Урок #11 - Условные операторы
$x = 10;
$y = 5;

if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15)  // условия оператора if являются false, результат не будет выводи0тся на экран
    echo 'Ура!';
elseif ($x == 15 || $y != 7) {
    $num = 5;                   /* оператор elseif используется в случае когда оператор if не сработал. 
     В данном случае результат будет выведен на экран, т.к. условия оператора - true*/
    echo "Число №" . $num;
} elseif ($x == 15 || $y != 7) {
    $num = 5;                   //Разрешается использовать неограниченное кол-во раз оператор elseif.
    echo "Число №" . $num;
} else {
    echo "<br />";
    echo 'Все сработало' . $num; // оператор else сработает в любом случае но только тогда когда не сработают if и elseif
}

if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15)
    echo 'Ура!';

$x == $y ? $string = "Да" : $string = "нет"; // данный оператор выведит результат "да" в случае если значения переменных будут равны, в противном случае будет результат нет
echo "<br />" . $string;



//Изучение PHP для начинающих | Урок #13 - Циклы For, While и Do While
for ($i = 100; $i >= 80; $i -= 2) { /* Цикл for имеет три основных параметра: в данном примере первый параметр означет что
    цикл начнется со №100 закончится на 80 с шагом -2 (100 98 96 ...80*/
    if ($i % 5 == 0) continue; /*Оператор if создает дополнительные условия для цикла.
    Из цикла исчезнут числа делимые на 5 с остатком 0.*/
    if ($i <= 87) break; // дополнительный параметр с оператором break полностью остановит функция на числе 87
    echo "Цикл под номером № $i<br />";
}

echo "<br />";

$x = 1;
while ($x <= 10) { // цикл while схож с for, отличие в том, что основные параметры записываются снаружи
    echo "Итерация под номером № $x<br / >";
    if ($x == 7)  // дполнительное условие выведет только до цифру 7
        for ($y = 0; $y < 5; $y += 3)
            echo "Еще одна итерация - $y<br />"; //выведет 0 , 3
    $x++; //  выведет 8,9,10
}

$z = 10;

echo "<br />";

do {
    echo "Операция выполнилась только один раз"; //цикл do while всегда выведет хотя бы одну итерацию. в данном случае результат будет "Операция выполнилась только один раз"
    $z++;
} while ($z < 5);






/*
Задание 3: Задачи на написания линейных алгоритмов. Необходимо сделать/нарисовать сначала блок-схему, затем воспроизвести блок-схему в коде на php.
3a. Посчитать и вывести на экран чему равен периметр четырехугольника. Дано сторона a=5, сторона b=3, сторона c=5, сторона d=11.
*/

//задача 3a
$a=5;
$b=3;
$c=5;
$d=11;
$z= $a+$b+$c+$d;
echo $z;

/*
3b. посчитать и вывести на экран значение S. Дано S = (a + b)^2, a = 7x, b=21x, x = ½
*/

$x = 1/2;
$a = 7 * $x;
$b = 21 * $x;
$z = ($a + $b);
$S = $z ^ 2;
echo "<br />" . $S;

/*
Задание 4: Задачи на написание вариативных алгоритмов (if...else)
4a. Посчитать площадь трапеции если переменная $Why заданная пользователем в начале сценария истина и периметр трапеции если эта переменная ложь. Значения необходимые для расчета площади и периметра задайте самостоятельно.
*/

//задача 4a

$a = 5;
$b = 3;
$c = 2;
$d = 2;
$h = 4;
$l = 0.5;
$S = $l * $h * ($a + $b);
$z = $a + $b + $c + $d;

if ($Why = $S > $z) {
    echo "<br />" . $S;
}

if ($Why = $S < $z) {
    echo "<br />" . $z;
} elseif ($Why = $S > $z) {
    echo "<br />" . $z;
}

/*
4b. Доработать предыдущую задачу добавив проверку корректности вводимых данных пользователем. Если данные введены некорректно, то сообщить об этом и не производить расчеты.
Подсказка: для проверки корректности вводимых данных, рекомендуется сравнить введенное значение и вычисленное значение высоты.
*/



/*
Задание 5: Задачи на написание алгоритмов с циклами (for, while)
5a. В задаче будем использовать функцию rand() она из заданного диапазона значений выбирает одно случайное.
Необходимо определить пессимист компьютер или оптимист.
Пусть $computer = rand(0,1). Если $computer выбирает 0, то он пессимист, если выбирает 1, то он оптимист.
Выполнить опрос компьютера 100 раз и вывести на экран по итогу всех этих итераций вывод - пессимист этот компьютер сегодня/сейчас или оптимист.
Подсказка: не нужно выводить 100 раз пессимист/оптимист, а нужен итог с цифрами, типа на 55% оптимист.
*/

$p = 0;
$o = 0;
$computer = rand(0, 1);
for ($x = 0; $x <= 99; $x++) {
    if ($computer == 0) {
        $p++;
    } elseif ($computer == 1) {

        $o++;
    }
}
echo "<br /> писсимист $p";
echo " <br /> оптимист $o";


/*
5b. В переменной $password хранится шестизначный пароль, состоящий только из цифр, например 302390.
Необходимо написать программу которая методом перебора найдет пароль.
Подсказка: 012345 - тоже вариант пароля.
*/



/*
5c. В переменных $pass1 и $pass2 хранятся трехзначные пароли.
Мы уже подобрали пароль $pass1, например он равен 436.
Пароль $pass2 удалось получить только в зашифрованном виде $pass2Se.
Мы узнали что шифр был сделан по следующему правилу - если "вторая цифра из $pass1" больше 5, 
то $pass2 = "цифра первого разряда из $pass2Se" . "число второго разряда из $pass2Se" . "число третьего разряда из $pass2Se", 
а если "второе число из $pass1" меньше либо равно 5, то $pass2 = "цифра второго разряда из $pass2Se" . "цифра третьего разряда из $pass2Se" . "цифра первого разряда из $pass2Se".
Вывести на экран $pass2 и описание правила по которому этот пароль был расшифрован из $pass2Se.
Значение для переменной $pass2Se задайте на своё усмотрение.
*/



/*
5d. Для предыдущей задачи написать алгоритм шифрования пароля $pass2
*/



/*
Задание 6: Задачи на выбор типов данных
6a. Даны два одноразрядных числа заданных с помощью слов (например $a='семь' и b='четыре').
Вывести на экран, в виде числа, результат сложения этих цифр.
Проверить результат сложения на разрядность, если разрядность больше 1, то вывести сообщение "большое число", иначе вывести сообщение "маленькое число".
*/



/*
6b. Предположим у нас в программе цены хранятся в виде целых чисел, но фактически - два последних разряда числа обозначают копейки.
Например, цена товара хранится в виде 10050, это значит что товар стоит 100 рублей 50 копеек.
Написать программу которая выведет на экран цену в двух форматах "N рубл[ей/я] M копе[ек/ки]." и "N.M руб." увеличив при этом цену товара на 13 процентов.
В программе использовать оператор % ($a % $b - целочисленный остаток от деления $a на $b).
*/



/*
6c. Как известно, при переводе IP-адреса компьютера в число, мы экономим ресурсы памяти, так как IP-адрес в четвертой версии — это 32-х битовое число и запись в строчном виде 192.168.1.1 будет занимать 15 байт, а в числовом виде всего 4 байта.
При этом удобной формой записи является запись в виде четырёх десятичных чисел значением от 0 до 255, разделённых точками, например, 192.0.2.60. но для хранения его в базе данных лучше перевести его в десятичное целое число.
Например 192.168.1.1 — это одно и то же, что 3232235777.
Алгоритм перевода строковой записи IP4 в числовую такой X = Y1 * 256 ^ 0 + Y2 * 256 ^ 1 + Y3 * 256 ^ 2 + Y4 * 256 ^3 (где ip адрес имеет формат Y4.Y3.Y2.Y1) Написать перевести алгоритм в php-код.
Пользователь программы вводит на входе $IP = '123.123.123.123' или $IP = 3232235777, программа должна определить какого вида IP ввел пользователь и показать альтернативную запись.
Для обработки адреса с "точкой" использовать функцию substr() - возвращает подстроку строки string длиной length, начинающегося с start символа по счету)
*/
?>