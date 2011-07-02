<?php

header('Content-type: text/html; charset=utf-8');
/*
 * Небольшой пример использования библиотеки
 * 1. Шаг подключаем библиотеку
 */
require '../Library/NCL.NameCase.ua.php';
/*
 * 2. Создаем объект
 */
$nc = new NCLNameCaseUa();
/*
 * =========================
 * Встроенные константы
 * =========================
 * NCL::$IMENITLN - именительный падеж
 * NCL::$RODITLN - родительные падеж
 * NCL::$DATELN - дательные падеж
 * NCL::$VINITELN - винительный падеж
 * NCL::$TVORITELN - творительный падеж
 * NCL::$PREDLOGN - предложный падеж
 * 
 * 
 * NCL::$UaNazyvnyi - називний відмінок
 * NCL::$UaRodovyi - родовий відмінок
 * NCL::$UaDavalnyi - давальный відмінок
 * NCL::$UaZnahidnyi - знахідний відмінок
 * NCL::$UaOrudnyi - орудний відмінок
 * NCL::$UaMiszevyi - місцевий відмінок
 * NCL::$UaKlychnyi - кличний відмінок
 */

echo 'Звіт, ' .
 $nc->q("Афонін Микола Сергійович", NCL::$RODITLN)
 . ' про виконану роботу разом з його сином ' .
 $nc->q("Афонін Микита", NCL::$TVORITELN) .
 ' на осінніх канікулах. Завдання трималося на ' .
 $nc->q("Маргарита Миколаївна", NCL::$PREDLOGN) .
 '; Вітаємо всіх, а також ' .
 $nc->q("Розумвський Андрій Миколайович", NCL::$VINITELN) . ' та ' .
 $nc->q("Лобудска Софія Вікторівна", NCL::$VINITELN) .
 '. Хочемо передати вітання ' .
 $nc->q("Воробей Хорив Іларіонович", NCL::$DATELN) . ' і ' .
 $nc->q("Мазепа Лев", NCL::$UaDavalnyi) . '. ' .
 $nc->q("Афродіта Іллівна", NCL::$UaKlychnyi) . ', триматесь!';

/*
 * ========================
 * Результат выполнения
 * ========================
 * Звіт, Афоніна Миколи Сергійовича про виконану роботу разом з його сином Афоніном Микитою на осінніх канікулах. Завдання трималося на Маргариті Миколаївні; Вітаємо всіх, а також Розумвського Андрія Миколайовича та Лобудску Софію Вікторівну. Хочемо передати вітання Вороб’єві Хоривові Іларіоновичу і Мазепі Левові. Афродіто Іллівно, триматесь!
 */





