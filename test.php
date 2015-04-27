<?php

include('Factory.class.php');

$factory = new Factory('config.json');

$hello = $factory->getBean('enHello');
echo $hello->sayHello();
echo "\n";

$hello = $factory->getBean('cnHello');
echo $hello->sayHello();
echo "\n";

