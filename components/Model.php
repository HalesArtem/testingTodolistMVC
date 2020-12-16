<?php


class Model
{
    protected  $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=localhost;dbname=todolist',
                'root',
                'artem11555'
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $error){
            echo 'problem with connect DatabaseConnect ';
        }
    }

}