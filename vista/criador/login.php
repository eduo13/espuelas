<?php
/**
* Gestión del login del usuario
*/
include '../../extra/session.php';

include '../../extra/criador-logica.php';

//solo aceptamos llamadas post en esta pagina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   //si check correcto..
   if(checkLogin()){
         header('location: home.php');
   }//si error login..
   else{
      //session_destroy();
      header('location: ../../index.php');
      //header('location: ../pagina_error.php');
   }
   
}else{
   header('location: ../pagina_error.php');
}