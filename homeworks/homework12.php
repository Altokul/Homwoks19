<?php


/*
Створити клас для представлення об'єкту "банківський рахунок", з такими властивостями, як номер рахунку та розмір балансу.

Визначити рівні доступу до властивостей класу за допомогою ключових слів public, protected та private.

Створити публічні методи для отримання та зміни значень властивостей об'єкту, а також методи для здійснення операцій з рахунком, таких як поповнення, зняття грошей.

Реалізувати в класі захист від негативних значень балансу рахунку (наприклад, не дозволяйте зняти більше грошей, ніж є на рахунку).

Написати програму, яка використовує клас "банківський рахунок" та його методи для створення об'єктів рахунків, встановлення їх властивостей та виконання різних операцій з ними.
*/


use homeworks\BankAccount;

require_once 'BankAccount.php';

try {

    $account1 = new BankAccount('3333333333', 300.0);


    $account1->withdraw(700);
    echo 'Deposit successful. New balance is:  ' . $account1->getBalance();
} catch (Exception $e) {
    echo " Deposit error: " . $e->getMessage() . PHP_EOL;
}





//var_dump($account1->getNumberAccount());
//var_dump($account2->getBalance() . PHP_EOL);

//print_r($account1->getNumberAccount() . " " . $account1->getBalance() . PHP_EOL);
//print_r($account2->getNumberAccount() . " " . $account2->getBalance() . PHP_EOL);
//print_r($account3->getNumberAccount() . " " . $account3->getBalance() . PHP_EOL);