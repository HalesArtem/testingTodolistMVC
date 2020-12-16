<?php


class MigrateController extends Model
{

    public function actionIndex()
    {
        require_once '../components/arrayPublications.php';


        $sql = '
        CREATE TABLE tasks (
            `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            `name` VARCHAR(255),
            `email` VARCHAR(50),
            `description` VARCHAR(255),
            `status` VARCHAR (10)
            )
        ';
        $this->db->exec($sql);


        foreach ($publications as $publication){

                $sql = '
            INSERT INTO tasks SET 
                `name`=:name,
                `email`=:email,
                `description`=:description,
                `status`=:status
            ';
                $query = $this->db->prepare($sql);

                $query->bindValue(':name', $publication['name']);
                $query->bindValue(':email', $publication['email']);
                $query->bindValue(':description', $publication['description']);
                $query->bindValue(':status', $publication['status']);
                $query->execute();


        }
    echo 'complete';
    }
}