<?php


class Db
{
    function startConnectiion (){
        $connection = new mysqli('localhost', 'root', '', 'test');
        $this->connectionLink = $connection;
        return  $connection;
    }
}