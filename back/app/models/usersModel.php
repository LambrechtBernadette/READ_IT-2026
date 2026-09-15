<?php
namespace App\Models\UsersModel;

use \PDO;
function findOneByLoginPwd (PDO $connexion, array $userData){
$sql = "SELECT id, firstname, lastname, created_at
        FROM users
        WHERE login = :login
        AND pwd = :pwd;";

$rs = $connexion -> prepare($sql);
$rs->bindValue(':login', $userData['login'], PDO::PARAM_STR);
$rs->bindValue(':pwd', $userData['pwd'], PDO::PARAM_STR);
$rs->execute();
$user = $rs->fetch(PDO::FETCH_ASSOC);
return $user;
}

