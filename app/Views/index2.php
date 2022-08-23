<body class="w3-light-blue">

<div class="d-flex" id="wrapper">

    <div class="w3-pale-red border-right" id="sidebar-wrapper">
      <div class="sidebar-heading" id="M">Pasteles</div>
      <div class="list-group list-group-flush">
        <a href="<?php echo base_url();?>/index.php/Pastel/index" class="list-group-item list-group-item-action w3-pale-red" id="M">Cute Cake</a>
        <a href="<?php echo base_url();?>/index.php/Pastel/Boda" class="list-group-item list-group-item-action w3-pale-red" id="M">Boda</a>
        <a href="<?php echo base_url();?>/index.php/Pastel/Infantiles" class="list-group-item list-group-item-action w3-pale-red" id="M">Infantiles</a>
        <a href="<?php echo base_url();?>/index.php/Pastel/Jumbo" class="list-group-item list-group-item-action w3-pale-red" id="M">Jumbo</a>
        <a href="<?php echo base_url();?>/index.php/Pastel/Anios" class="list-group-item list-group-item-action w3-pale-red" id="M">XV años</a>
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

	
	<div class="w3-container" id="contenido">
		<img src="<?php echo base_url();?>/assets/images/Logo.jpeg" id="Logo">
		<h1>Somos</h1>
  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>