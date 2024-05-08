
<style>
    input[type="file"]::file-selector-button {
    background-image: linear-gradient(
        to right,
        #ff7a18,
        #af002d,
        #319197 100%,
        #319197 200%
    );
    background-position-x: 0%;
    background-size: 200%;
    border: 0;
    border-radius: 8px;
    color: #fff;
    padding: 0.5rem 1rem;
    text-shadow: 0 1px 1px #333;
    transition: all 0.25s;
    }
    input::file-selector-button:hover {
    background-position-x: 100%;
    transform: scale(1.1);
    }
</style>

                <div class="content center">
                    <div class="center">
                        <h3>Editar Perfil:</h3>
                        <!-- form upload foto -->
                        <div class="d-flex justify-content-between">
                            <form action="home.php" method="POST" enctype="multipart/form-data">
                                <div class="row g-3 justify-items-center">
                                    <label for="imagen">elige una imagen para ti:</label>
                                    <div class="justify-content-between">
                                        <input type="file" name="imagen"/>
                                        <input type="submit" class="btn btn-primary" name="confoto" value="Subir foto"/>
                                    </div>
                                </div>
                                <p style="font-size:x-small;color:blue"><?php
                                 global $resUpload; echo (isset($_SESSION['uploadMsj']) != null) ?  $_SESSION['uploadMsj'] : ""; 
                                 ?></p>
                                <input type="hidden" name="form" value="cu"/>
                            </form>                        
                            <img src="<?php echo $_SESSION['criador']['imagen'] == '' ? IMAGEN_SIN_FOTO : $_SESSION['criador']['imagen']; ?>" 
                            style="border-radius: 50%" alt="ups" width="100" height="100">
                        </div>
                        <!-- form datos criador -->
                        <form action="home.php" method="POST">
                            <div class="row g-3">
                                <div class="col-6">
                                <label for="nombre" class="form-label">nombre:</label>
                                    <input name="nombre" type="text" class="form-control" value="<?php echo $_SESSION['criador']['nombre'];?>" required>
                                </div>
                                <div class="col-6">
                                <label for="primer_apellido" class="form-label">primer apellido:</label>
                                    <input name="primer_apellido" type="text" class="form-control" value="<?php echo $_SESSION['criador']['primer_apellido'];?>" required>
                                </div>
                                <div class="col-4">
                                <label for="segundo_apellido" class="form-label">segundo apellido:</label>
                                    <input name="segundo_apellido" type="text" class="form-control" value="<?php echo $_SESSION['criador']['segundo_apellido'];?>" required>
                                </div>
                                <div class="col-4">
                                <label for="dni" class="form-label">dni:</label>
                                    <input name="dni" type="text" class="form-control" style="background-color: lightgrey" 
                                    value="<?php echo $_SESSION['criador']['dni'];?>" readonly>
                                </div>
                                <div class="col-4">
                                <label for="ciudad" class="form-label">ciudad:</label>
                                    <input name="ciudad" type="text" class="form-control" value="<?php echo $_SESSION['criador']['ciudad'];?>" required>
                                </div>

                                <div class="col-12 d-flex flex-row-reverse">
                                    <input class="btn btn-primary m-2" type="submit" name="editar_perfil" value="Actualizar">
                                    <input class="btn btn-secondary m-2" type="submit" name="cancelar" value="Cancelar" onClick="document.location.href='home.php';">
                                </div>
                                <input type="hidden" name="form" value="cu"/>
                            </div>
                        <hr style="color: rgba(255, 255, 255, 0);">    
                        </form>
                    </div>
                </div>
                <hr style="color: rgba(255, 255, 255, 0);">
                <hr class="hr hr-blurry" />
                <hr style="color: rgba(255, 255, 255, 0);">
                <!-- form cambio password -->
                <div class="content center">
                    <h5>Cambiar password:</h5>
                    <form action="home.php" method="POST">
                        <div class="row g-3">
                            <div class="col-6">
                                <label for="pass" class="form-label">nueva contraseña:</label>
                                <input type="password" class="form-control" name="pass" required>
                            </div>
                            <div class="col-6">
                                <label for="pass2" class="form-label">repite contraseña:</label>
                                <input type="password" class="form-control" name="pass2" required>

                            </div>
                            <div class="col-12 d-flex flex-row-reverse">
                                <input type="submit" class="btn btn-primary" name="cambiar_pass" value="Cambiar">
                            </div>
                        </div>
                        <input type="hidden" name="form" value="pu"/>
                    </form>
                </div>

