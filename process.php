<?php


$firstName = filter_input(INPUT_POST, 'firstname');
$lastName = filter_input(INPUT_POST, 'lastname');  


echo "<p> Hey there $firstName $lastName </p>";


?>