<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    
                </div>
                <form method="post" action="<?php echo base_url();?>/index.php/Pastel/LoginU" class="form-register" onsubmit="return validar();">
                        <div class="form-group ">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="Nombre"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apellidos" name="apellido" id="Apellido"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Edad" name="edad" id="Edad"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telefono" name="telefono" id="Telefono"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Correo Electronico" name="correo" id="Correo"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" id="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Contraseña" name="password" id="Password"/>
                        </div>
                    <button type="submit" class="btn btn-primary" ><i class="fas fa-sign-in-alt"></i>  Registrar </button>
                </form>   
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>/assets/js/validacion.js"></script>
</body>
</html>