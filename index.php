<?php


require  "vendor/autoload.php";
require 'app/classes/Email.php';

$email= new Email;
dump(1);
echo $email->send();
