<?php

class Post extends Model
{
    public static function readAllPosts($page = 0, $limit = 0)
    {
        try {
            if ($page == 0 & $limit == 0 ){
                $bd =new Model();
                $sql = 'SELECT * FROM tasks';
                $query = $bd->db->prepare($sql);
                $query->execute();
                $arrValues = $query->fetchAll();
            }else{
                $offset = $page * $limit;
                $bd =new Model();
                $sql = 'SELECT * FROM tasks LIMIT ' . $limit . ' OFFSET ' . $offset ;
                $query = $bd->db->prepare($sql);
                $query->execute();
                $arrValues = $query->fetchAll();
            }
            for ($i=count($arrValues); $i> -1; $i--){
                $reverseArray[] = [
                    'id' => $arrValues[$i]['id'],
                    'name' =>$arrValues[$i]['name'] ,
                    'email' =>$arrValues[$i]['email'] ,
                    'description' =>$arrValues[$i]['description'] ,
                    'status' => $arrValues[$i]['status'] ,
                ];
            }
            unset($reverseArray[0]);
        }catch (PDOException $error){
            echo 'problem with select posts  ';
        }
        return $reverseArray;
    }
    public static function searchAdmin($name){
        $db = new Model();
        $sql = '
            SELECT user_id, user_password FROM admins WHERE user_login="'.$name.'" LIMIT 1;

        ';
        $query = $db->db->prepare($sql);
        $query->execute();
        $arr = $query->fetchAll();
        return $arr;
    }
    public static function findOnePost($id)
    {
        $bd = new Model();
        $sql = 'SELECT * FROM tasks WHERE id=' . $id  ;
        $query = $bd->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    public static function createTask($array){
        try {
            $bd = new Model();
            $sql = '
            INSERT INTO tasks SET
                `name`=:name,
                `email`=:email,
                `description`=:description,
                `status`=:status
            ';
            $query = $bd->db->prepare($sql);

            $query->bindParam(':name', htmlspecialchars($array['name']));
            $query->bindParam(':email', htmlspecialchars($array['email']));
            $query->bindParam(':description', htmlspecialchars($array['description']));
            $query->bindParam(':status', htmlspecialchars('true'));
            $query->execute();
        }catch (PDOException $error){
            echo 'problem with create task  ';
        }
    }
    public static function updateTask($array){
        $id = $array['id'];
        $name = $array['name'];
        $email = $array['email'];
        $description = $array['description'];
        $status = $array['status'];

        $bd =new Model();
        $sql = '
            UPDATE tasks SET
                `name`=:name,
                `email`=:email,
                `description`=:description,
                `status`=:status
                WHERE `id`=:id 
            ';
        $query = $bd->db->prepare($sql);
        $query->bindParam(':id', htmlspecialchars($id));
        $query->bindParam(':name', htmlspecialchars($name));
        $query->bindParam(':email', htmlspecialchars($email));
        $query->bindParam(':description', htmlspecialchars($description));
        $query->bindParam(':status', htmlspecialchars($status));
        $query->execute();

    }
    public static function deleteTask($id){

        $bd =new Model();

        $sql = 'DELETE FROM tasks WHERE id =  :filmID';
        $stmt = $bd->db->prepare($sql);
        $stmt->bindParam(':filmID', $id['id'], PDO::PARAM_INT);
        $stmt->execute();
    }
}
