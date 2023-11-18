<?php


class Model
{
    function getAllUsers($dbConnection){
        $query = 'SELECT username FROM users';
        $result = $dbConnection->query($query);
        return $result;
    }

    function getAllUsersTemplate($users){
        $template = '';
        foreach ($users as $user){
            $template .= $template . '<tr><td>' . $user['username'] . '</td></tr>';
        }
        return $template;
    }
}