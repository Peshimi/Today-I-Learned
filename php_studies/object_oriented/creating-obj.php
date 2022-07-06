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

// 1. Instantiate a new User object named after yourself
$catObject = new User();
// 2. Set name, username, and fallowerCount properties
$catObject->name = 'Puszek';
$catObject->username = '@proKitten05';
$catObject->followerCount = 246;
// 3. Use print_r to check that you have created it correctly
print_r($catObject);
// 4. Check your work in the browser

?>