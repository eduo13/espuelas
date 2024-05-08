<?php
    //$_SESSION['ubicaciones'] = listaUbicaciones($_SESSION['criador']['id_criador']);
    $ubicaciones = listaUbicaciones($_SESSION['criador']['id_criador']);

    $animales = listaAnimales($_SESSION['criador']['id_criador']);
   
    $_SESSION['familias'] = listaFamilias();
?>


<style type="text/css">

/* separador de menus */
p {
    padding-left: 50px;
}

body{
    background-image: url('../../img/textura-fondo.png');
    background-repeat: repeat;
}


.containerForm {
    display: flex;
    justify-content: center;
    box-shadow:0 1px 3px 0 rgba(0,0,0,0.16),2px 0px 0px 0px rgba(0,0,0,0.12) inset; 
    min-width: 0;
    min-height: 0;
    padding: 10px;
}

.bodyHome {
    padding: 100px;
    min-height: 40vw;
}

.nav__list{
    margin-bottom: 15%;
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
	list-style: none;
	position: relative; 
}

.nav__list a{
	display:block;
	color:#333;
	text-decoration:none;
	font-weight:700;
	font-size:12px;
	line-height:32px;
	padding:10px 10px;
}

.nav__list li{
	position: relative;
    min-width: 180px;
	float:  left;
	margin: 0;
	padding: 0;
}

.nav__list li:hover{
	background-color: gray;
}

.nav__list ul{
	display: none;
	position: absolute;
    min-width: 180px;
	top: 100%;
	left: 0;
	background-color: #fff;
	padding: 0;
	list-style: none;
}

.nav__list ul li{
    position: relative;
/* 	float: none;
	width: 200px; */
}

.nav__list ul a{
 	line-height: 120%;
	padding: 10px 15px;
}

.nav__list ul ul{
	position: absolute;
	top: 0;
	left: 50%;
	background-color: #fff;
}

.nav__list li:hover > ul{
	display: block;
}

.sub-menu {
  display: none;
  margin-left: 80px;
  margin-top: 10px;
  position: relative;
  min-width: 100px;
}

.sub-menu > li > a {
  padding: 10px 20px;
  background: #fff;
  display: block;
  color: #333;
}

.sub-menu > li a:hover {
  color: #fff;
  background: #9DDA3E;
}

</style>

    <div class="container bodyHome">
        <nav>
            <ul class="nav__list">
                <!-- MENU UBICACIONES -->
                <li>
                    <a href="#"><img src="../../img/ubicacion.png" width="150" heiht="150" /></a>
                    <ul>
                        <li><a href="home.php?action=uu">Actualizar Ubicación</a></li>
                        <li><a href="home.php?action=uc">Nueva Ubicación</a></li>
                        <li><a href="home.php?action=ud">Eliminar Ubicación</a></li>
                        <li>
                            <a href="">Lista Ubicaciones</a>
                            <ul class="sub-menu">
                                    <?php /* llamada a bd para recuperar lista de ubicaciones */
                                        //$ubicaciones = listaUbicaciones($_SESSION['criador']['id_criador']);
                                        foreach($ubicaciones as $ubicacion){
                                            echo '<li><a href="">' . $ubicacion['nombre'] . '</a></li>';
                                        }
                                    ?>
                            </ul>                            
                        </li>
                    </ul>
                </li>
                <!-- SEPARADOR -->
                <!-- </li><p></p><li> -->
                <!-- MENU ANIMALES -->
                <li>
                    <a href="#"><img src="../../img/caballo.png" width="150" heiht="150" /></a>
                    <ul>
                        <li><a href="home.php?action=ac">Nuevo Animal</a></li>
                        <li>
                            <a href="">Actualizar Animal</a>
                            <ul class="sub-menu" >
                                <?php 
                                        global $animales;
                                        //var_dump($animales);
                                    foreach($animales as $animal){
                                        echo '<li><a href="home.php?action=au&data=' . $animal['id_animal'] . '">' . $animal['nombre'] . '</a></li>';
                                    }
                                ?>
                            </ul>
                        </li>
                        <li><a href="home.php?action=ad">Eliminar Animal</a></li>
                        <li>
                            <a href="">Lista Animales</a>
                            <ul class="sub-menu">
                                    <?php /* llamada a bd para recuperar lista de animales*/
                                        foreach($animales as $animal){
                                            echo '<li><a href="">' . $animal['nombre'] . '</a></li>';
                                        }
                                    ?>
                            </ul>                             
                        </li>
                    </ul>
                </li>
                <!-- SEPARADOR -->
                <!-- </li><p></p><li> -->
                <!-- MENU CRIADOR -->
                <li>
                    <a href="#"><img src="../../img/guaso-perfil.png" width="150" heiht="150" /></a>
                    <ul>
                        <li><a href="home.php?action=cu">Editar perfil</a></li>
                        <li><a href="logout.php">Cerrar sesión</a></li>
                    </ul>
                </li>
                <!-- SEPARADOR -->
                <!-- </li><p></p><li>   --> 
                <!-- MENU VACUNAS -->                 
                <li>
                    <a href="#"><img src="../../img/vacuna.png" width="150" heiht="150" /></a>
                    <ul>
                        <li><a href="home.php?action=vc">Nueva vacuna</a></li>
                        <li><a href="home.php?action=vu">Modificar vacuna</a></li>
                        <li><a href="home.php?action=vd">Eliminar vacuna</a></li>
                        <li><a href="home.php?action=vr">Ver vacunas</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- <div class="containerForm"> -->
            
                <!-- AQUI MOSTRAMOS EL FORMULARIO SI SE SOLICITA -->
                <?php 
                if(isset($contenido)){ include $contenido; } 
                if(isset($mensaje)){ echo $mensaje; } 
                ?>

        <!-- </div> --><!-- fin containerform -->
    </div><!-- fin bodyhome -->
