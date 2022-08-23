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

      <nav class="navbar navbar-expand-lg w3-gray navbar-light bg-light border-bottom">
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
	<p id="Titulo">Pasteles jumbo</p>

</nav>
	<section align="center">
    <div id="contenido">
      <img src="<?php echo base_url();?>/assets/images/jumbo1.jpeg" id="Logo">
      <h2>m&m´s</h2>
      <p>Costo: $200</p>
      <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
    </div>

    <div id="contenido">
      <img src="<?php echo base_url();?>/assets/images/jumbo2.jpeg" id="Logo">
      <h2>Tres pilares</h2>
      <p>Costo: $200</p>
      <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
    </div>

    <div id="contenido">
      <img src="<?php echo base_url();?>/assets/images/jumbo3.jpeg" id="Logo">
      <h2>Corona sagrada</h2>
      <p>Costo: $200</p>
      <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
    </div>

    <div id="contenido">
      <img src="<?php echo base_url();?>/assets/images/jumbo4.jpeg" id="Logo">
      <h2>Flor circular</h2>
      <p>Costo: $200</p>
      <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
    </div>

    <div id="contenido">
      <img src="<?php echo base_url();?>/assets/images/jumbo5.jpeg" id="Logo">
      <h2>Flor chocolatosa</h2>
      <p>Costo: $200</p>
      <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
    </div>
  </section>  
</div>