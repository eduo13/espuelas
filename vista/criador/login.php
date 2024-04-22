<?php
/**
* Gestión del login del usuario
*/
if(session_status() === PHP_SESSION_NONE){
   session_start();
}

include '../../extra/comprobaciones.php';

if($_SERVER['REQUEST_METHOD'] == 'GET') {

   //header('location: http://www.espuelas.com');

}else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(checkLogin()){
         echo 'login OK';
      }else{
         session_destroy();
         header('location: ../../index.php');
      }

}