<?php
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow", "h" => "cyan");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a1,$a2,$a3);
print_r($result);

// $result=array_diff($a1,$a2);
// print_r($result);
?>