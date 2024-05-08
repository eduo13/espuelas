<?php

?>
<div class="content center">
    <div class="center">
        <h3>Actualizar ubicación:</h3>
        <form action="home.php" method="POST">
            <div class="row g-3">
                <div class="col-6">
                    <label for="id_ubicacion" class="form-label">ubicación:</label>
                    <select name="id_ubicacion" class="form-control" required>
                        <?php
                            $html = "";
                            foreach($ubicaciones as $ubicacion){
                                $html.= "<option value='".$ubicacion['id_ubicacion']."' selected>".$ubicacion['nombre']."</option>";
                            }
                            //mostramos select
                            echo $html;
                            ?>
                    </select>
                </div>
                <div class="col-6">
                    <label for="nuevo_nombre" class="form-label">nuevo nombre:</label>
                    <input class="form-control" type="text" name="nuevo_nombre" placeholder="nuevo nombre" required>
                </div>
                <div class="col-4">
                    <input class="btn btn-primary" type="submit" name="editar_ubicación" value="Actualizar">
                </div>
                <div class="col-4">
                    <input class="btn btn-secondary" type="submit" name="cancelar" value="cancelar" onClick="document.location.href='home.php';">
                </div>
                <input type="hidden" name="fEditarUbicacion" value="uu"/>
            </div>
        </form>
    </div>
</div>