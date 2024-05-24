<?php
declare(strict_types=1);

/*
 * Створити клас який має одну властивість $text зі значенням "some text" маленькими літерами і один метод print(), який виводить $this->text із заглавної літери ("Some text")

Після цього віднаслідуйтесь від батьківського класу і перезавантажте метод print(), щоб він виводив $this->text великими літерами ("SOME TEXT")
 */


//require_once  'Text.php';
use homeworks\ModificetText;

require_once 'ModificetText.php';


//$text = new Text();
//$text->print();

$modificetText = new ModificetText();
$modificetText->print();