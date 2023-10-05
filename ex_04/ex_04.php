<?php

function my_password_hash(string $password){
    $salt = uniqid();
    $hash = md5($password.$salt);

    return [
    "hash" => $hash, 
    "salt" => $salt,
    ];
};

//var_dump(my_password_hash("salut"));

function my_password_verify(string $password, string $salt, string $hash){
    $test1 = md5($password.$salt);
    return ($test1==$hash); 
}
//var_dump(my_password_verify("salut","651ecb5b86210","e93db34b3be4e349e349bbd4a759b7fd"));
