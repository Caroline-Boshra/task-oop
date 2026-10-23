<?php

session_start();

class Session
{

 public static function set($key,$value){
     $_SESSION[$key]=$value;

 }

 public static function get($key){

    return $_SESSION[$key];
 }

    public static function check($key){
        if(isset($_SESSION[$key])){
            return true;
        }
        return false;
    }
 
    public static function flash($key){
        if (isset($_SESSION[$key])) {
            $value = $_SESSION[$key]; 
            unset($_SESSION[$key]);   
            return $value;           
        }
        return false;
    }
 
 public static function remove($key){
  
 if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
 } 

    public static function getAll(){
        return $_SESSION;
    }

 public static function removeAll(){
  session_destroy();
  echo "<br> no data";
 }


}


$sessions= new Session();

$sessions->set("message","success");
echo $sessions->get("message") ."<br>";
echo $sessions->check("message") ."<br>";
echo $sessions->flash("message")."<br>";
$sessions->remove("message") ;
var_dump($sessions->getAll());
$sessions->removeAll() ;