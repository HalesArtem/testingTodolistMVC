<?php


class Validator
{
    public function isValid($array){
        if (!is_string($array['name'])){
            return false;
        }
        if (!filter_var($array['email'], FILTER_VALIDATE_EMAIL)){
            return false;
        }
        if ($array['description'] == null ){
            return false;
        }
//        if (!filter_var($array['status'], FILTER_VALIDATE_BOOLEAN) == true){
//            return false;
//        }
        return true;
    }


}