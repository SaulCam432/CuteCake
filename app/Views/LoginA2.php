<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url();?>/assets/images/user.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" method="post" action="<?php echo base_url();?>/index.php/Pastel/validarA"  onsubmit="return validarLogin()">
                    <div class="form-group glyphicon glyphicon-cloud">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="user" id="usern" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="contrasenia" id="contrasenias"/>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn" id="name"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>/assets/js/validacionLogin.js"></script>
</body>
</html>