<?php

?>
                <div class="content center">
                    <div class="center">
                        <h3>Nuevo Animal:</h3>
                        <form action="home.php" method="POST">
                            <div class="row g-3">
                                <div class="col-4">
                                <label for="nombre" class="form-label">Nombre:</label>
                                    <input class="form-control" type="text" name="nombre" placeholder="nombre" required>
                                </div>
                                <div class="col-4">
                                <label for="raza" class="form-label">Raza:</label>
                                    <select name="raza" class="form-control" required>
                                        <?php
                                            $html = "";
                                            foreach(RAZAS as $key => $value){
                                                $html.= "<option value='".$value."' >".$value."</option>";
                                            }
                                            //mostramos select
                                            echo $html;
                                        ?>
                                    </select>

                                </div>
                                <div class="col-4">
                                    <label for="sexo" class="form-label">Sexo:</label>
                                    <select name="sexo" class="form-control" required>
                                        <?php
                                            $html = "
                                                <option value='macho' selected>macho</option>
                                                <option value='hembra'>hembra</option>
                                            ";

                                            //mostramos select
                                            echo $html;
                                        ?>
                                    </select>
                                </div>

                                <div class="col-4">
                                <label for="id_familia" class="form-label">Familia:</label>
                                    <select name="id_familia" id="id_familia" class="form-control" required>
                                        <?php
                                            $html = "";
                                            foreach($_SESSION['familias'] as $familia){
                                                $html.= "<option value='".$familia['id_familia']."'>".$familia['nombre']."</option>";
                                            }
                                            //mostramos select
                                            echo $html;
                                            ?>
                                    </select>
                                </div>
                                
                                <div class="col-4">
                                    <label for="fech_nacimiento" class="form-label">Fecha Nacimiento:</label>
                                    <input type="date" id="fech_nacimiento" name="fech_nacimiento" class="form-control" required/>                               
                                </div>
                                <div class="col-4">
                                    <label for="esterilizado" class="form-label">¿Esterilizado?</label>
                                    <select name="esterilizado" id="esterilizado" class="form-control" required>
                                        <?php
                                            $html = "
                                            <option value='no' selected>NO</option>
                                            <option value='si'>SI</option>
                                            ";

                                            //mostramos select
                                            echo $html;
                                            ?>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="objetivo" class="form-label">Objetivo:</label>
                                    <input type="text" id="objetivo" name="objetivo" class="form-control"/>
                                </div>
                                <div class="col-6">
                                    <label for="id_ubicacion" class="form-label">Ubicación:</label>
                                    <select name="id_ubicacion" class="form-control" required>
                                        <?php
                                            $html = "";
                                            foreach($_SESSION['ubicaciones'] as $ubicacion){
                                                $html.= "<option value='".$ubicacion['id_ubicacion']."' selected>".$ubicacion['nombre']."</option>";
                                            }
                                            //mostramos select
                                            echo $html;
                                        ?>
                                    </select>
                                </div>

                            
                                <div class="col-2">
                                    <input type="submit" class="btn btn-primary" name="nuevo_animal" value="Añadir">
                                </div>
                                <div class="col-2">
                                    <input type="submit" class="btn btn-secondary" class="form-control" name="cancelar" value="cancelar" onClick="document.location.href='home.php';">
                                </div>
                                <input type="hidden" name="form" value="ac"/>                            
                            </div>
                        </form>
                    </div>
                </div><!-- fin form -->