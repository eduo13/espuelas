<?php


?>

<style type="text/css">

.nav__list{
	float: left;
	list-style: none;
	margin: 0;
	padding: 0;
	position: relative;
}

.nav__list a{
	display:block;
	color:#333;
	text-decoration:none;
	font-weight:700;
	font-size:12px;
	line-height:32px;
	padding:0 15px;
}

.nav__list li{
	position: relative;
	float:  right;
	margin: 0;
	padding: 0;
}

.nav__list li:hover{
	background-color: gray;
}

.nav__list ul{
	display: none;
	position: absolute;
	top: 100%;
	left: 0;
	background-color: #fff;
	padding: 0;
	list-style: none;
}

.nav__list ul li{
	float: none;
	width: 210px;
}

.nav__list ul a{
	line-height: 150%;
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

.containerForm {
    box-shadow:0 1px 3px 0 rgba(0,0,0,0.16),2px 0px 0px 0px rgba(0,0,0,0.12) inset; 
    min-width: 0;
    min-height: 0;
}

/* .w3-card{box-shadow:0 1px 3px 0 rgba(0,0,0,0.16),2px 0px 0px 0px rgba(0,0,0,0.12) inset;} */
/* .w3-card{box-shadow: rgba(0, 0, 0, 0.06) 2px 2px 2px 2px inset;} */

.bodyHome {
    padding: 100px;
    background-color: #fff;
}


</style>

    <div class="container bodyHome">
        <div class="">
            <nav class="nav">
                <ul class="nav__list">
                    <!-- MENU UBICACIONES -->
    <!--                 <li title="ubicaciones">
                        <a class="links" href="#"><img src="../../img/ubicacion.png" width="150" heiht="150" /></a>
                        <ul>
                            <li title="sub"><a class="links" href="home.php?action=uc">Nueva Ubicación</a></li>
                            <li title="lista">
                                <a class="links" href="home.php?action=uu">Actualizar Ubicación</a>
                                <ul>
                                    <li title="sub"><a class="links" href="home.php?action=uu">Actualizar Ubicación</a></li>
                                </ul>
                            </li>
                            <li title="sub"><a class="links" href="home.php?action=ud">Eliminar Ubicación</a></li>
                            <li title="sub"><a class="links" href="home.php?action=ur">Ver Ubicaciones</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#"><img src="../../img/ubicacion.png" width="150" heiht="150" /></a>
                        <ul>
                            <li><a href="home.php?action=uc">Nueva Ubicación</a></li>
                            <li>
                                <a href="home.php?action=uu">Actualizar Ubicación</a>
                                <ul>
                                    <li><a href="home.php?action=uu">Pradera verde</a></li>
                                    <li><a href="home.php?action=uu">Rancho grande</a></li>
                                </ul>
                            </li>
                            <li><a href="home.php?action=ud">Eliminar Ubicación</a></li>
                            <li><a href="home.php?action=ur">Ver Ubicaciones</a></li>
                        </ul>
                    </li>
                    <!-- SEPARADOR -->
                    <!-- </li><p></p><li> -->
                    <!-- MENU ANIMALES -->
    <!--                 <li title="animales">
                        <a class="links" href="#"><img src="../../img/caballo.png" width="150" heiht="150" /></a>
                        <ul>
                            <li title="sub"><a class="links" href="home.php?action=ac">Nuevo Animal</a></li>
                            <li title="sub"><a class="links" href="home.php?action=au">Actualizar Animal</a></li>
                            <li title="sub"><a class="links" href="home.php?action=ad">Eliminar Animal</a></li>
                            <li title="sub"><a class="links" href="home.php?action=ar">Ver Animales</a></li>
                        </ul>
                    </li> -->
                    <!-- SEPARADOR -->
                    <!-- </li><p></p><li> -->
                    <!-- MENU CRIADOR -->
    <!--                 <li title="criador">
                        <a class="links" href="#"><img src="../../img/guaso-perfil.png" width="150" heiht="150" /></a>
                        <ul>
                            <li title="sub"><a class="links" href="home.php?action=cu">Editar perfil</a></li>
                            <li title="sub"><a class="links" href="logout.php">Cerrar sesión</a></li>
                        </ul>
                    </li> -->
                    <!-- SEPARADOR -->
                    <!-- </li><p></p><li>   --> 
                    <!-- MENU VACUNAS -->                 
    <!--                 <li title="vacunas">
                        <a class="links" href="#"><img src="../../img/vacuna.png" width="150" heiht="150" /></a>
                        <ul>
                            <li title="sub"><a class="links" href="home.php?action=vc">Nueva vacuna</a></li>
                            <li title="sub"><a class="links" href="home.php?action=vu">Modificar vacuna</a></li>
                            <li title="sub"><a class="links" href="home.php?action=vd">Eliminar vacuna</a></li>
                            <li title="sub"><a class="links" href="home.php?action=vr">Ver vacunas</a></li>
                        </ul>
                    </li> -->
                </ul>
            </nav>

            <div class="containerForm">
                <div class="d-flex justify-content-center p-3">
                    <!-- AQUI MOSTRAMOS EL FORMULARIO SI SE SOLICITA -->
                    <?php if(isset($contenido)){ echo $contenido; } ?>
                </div>
            </div>
        </div>
    </div>
