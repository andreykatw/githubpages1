<?php


class Db
{

    function createTables($connection){/*
        $check = $connection->query('CALL sys.table_exists("test", "users", @exists); SELECT @exists');;*/
        $check = $connection->query('SELECT EXISTS (
            SELECT 
                TABLE_NAME
            FROM 
                information_schema.TABLES 
            WHERE 
                TABLE_NAME = "test"
            );');
        if(!$check){ /* zero rows -> there is no table -> returns false -> else array -> then convert to boolean*/
            $query = 'CREATE TABLE users ( username varchar(255), password varchar(255))';
            $connection->query($query);
        }
    }
}