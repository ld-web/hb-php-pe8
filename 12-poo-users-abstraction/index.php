<?php

require_once 'classes/User.php';
require_once 'classes/Employee.php';
require_once 'classes/Customer.php';
require_once 'classes/Manager.php';

require_once 'functions/user.php';

// $user = new User("Norman", "zambilag@kuhbugol.fj");
// var_dump($user);

$emp = new Employee("Genevieve", "kufuzor@mogimic.vc");
var_dump($emp);

$client = new Customer("Ernest", "siwitumuc@webkodte.mv");
var_dump($client);

$mgr = new Manager("Philip", "abirez@puzut.il");
var_dump($mgr);

var_dump($client->getDescription(), $emp->getDescription(), $mgr->getDescription());

describeUsers([$emp, $client, $mgr]);
