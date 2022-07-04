<?php

class User 
{
  // Create Properties \\
  public $name;
  public $username;
  public $followerCount;
}

$myObject = new User();
$myObject->name = 'Nadia Lazarek';
$myObject->username = '@nadialazarek';
$myObject->followerCount = 100;

print_r($myObject);

?>