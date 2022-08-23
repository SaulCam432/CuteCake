<body class="w3-light-blue">

<div class="d-flex" id="wrapper">

    <div class="w3-pale-red border-right" id="sidebar-wrapper">
      <div class="sidebar-heading" id="M">Pasteles</div>
      <div class="list-group list-group-flush">
        <a href="<?php echo base_url();?>/index.php/Pastel/adminUsuarios" class="list-group-item list-group-item-action w3-pale-red" id="M">Usuarios</a>
        <a href="<?php echo base_url();?>/index.php/Pastel/adminBoda" class="list-group-item list-group-item-action w3-pale-red" id="M">Boda</a>
        <a href="<?php echo base_url();?>/index.php/Pastel/adminInfantiles" class="list-group-item list-group-item-action w3-pale-red" id="M">Infantiles</a>
        <a href="<?php echo base_url();?>/index.php/Pastel/adminJumbo" class="list-group-item list-group-item-action w3-pale-red" id="M">Jumbo</a>
        <a href="<?php echo base_url();?>/index.php/Pastel/adminAnios" class="list-group-item list-group-item-action w3-pale-red" id="M">XV años</a>
      </div>
    </div>
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light w3-gray border-bottom">
        <button class="navbar-toggler-icon" id="menu-toggle"></button> 

        <form class="form-inline" action="/action_page.php">
    <input id="txtBuscar" class="form-control mr-sm-2" type="text" placeholder="Buscar">
    <button id="btnBuscar" class="btn btn-success" type="submit">Buscar</button>
  </form>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <link rel="stylesheet" type="text/css" ><a class="nav-link"><?php echo session('username');?></a>
    </li>
  </ul>
      </nav>

<nav>
	<p id="Titulo">CuteCake</p>

</nav>

	
	<div class="table-responsive">
  <h2>Formulario de registros</h2>
  <table class="table" >
    <thead class="thead-dark">
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Telefono</th>
        <th>Correo electronico</th>
        <th>Username</th>
      </tr>
      
    </thead>
    <tbody>
      <thead class="thead-light" id="registros">
        <?php foreach($lobo as $usuario){
        echo "<tr>";
          echo "<td>".$usuario['nombre'];
          echo "<td>".$usuario['apellidos'];
          echo "<td>".$usuario['edad'];
          echo "<td>".$usuario['telefono'];
          echo "<td>".$usuario['correoElectronico'];
          echo "<td>".$usuario['username'];
        echo "</tr>";
        }?>
    </thead>
    </tbody>
  </table>
</div>