<?php

use Domain\Entity\UserEntity;
use Domain\ValueObject\Email;
use Domain\ValueObject\Phone;
use Presentation\Http\UserController;

require __DIR__ . '/../vendor/autoload.php';

$name = "Almir Toledo";
$email = new Email('almirtoledo@gmail.com');
$phone = new Phone('17992676829');

$userController = new UserController;

// save user
$userController->save($name, $email, $phone);
