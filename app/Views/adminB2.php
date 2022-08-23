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

      <nav class="navbar navbar-expand-lg w3-gray navbar-light bg-light border-bottom">
        <button class="navbar-toggler-icon" id="menu-toggle"></button> 

        <form class="form-inline" action="/action_page.php">
    <input id="txtBuscar" class="form-control mr-sm-2" type="text" placeholder="Buscar">
    <button id="btnBuscar" class="btn btn-success" type="submit">Buscar</button>
  </form>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <link rel="stylesheet" type="text/css" ><?php echo session('username');?><a class="nav-link"></a>
    </li>
  </ul>
      </nav>

<nav>
  <p id="Titulo">Pasteles de boda</p>

</nav>

  <section align="center">
  	
      <article id="contenido">
        <img src="<?php echo base_url();?>/assets/images/Boda1.jpeg" id="Logo">
        <h2>Sencillo</h2>
        <p>Costo: $300</p>
        <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
      </article>

      <article id="contenido">
        <img src="<?php echo base_url();?>/assets/images/Boda2.jpeg" id="Logo">
        <h2>Pequeño</h2>
        <p>Costo: $200</p>
        <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
      </article>

      <article id="contenido">
        <img src="<?php echo base_url();?>/assets/images/Boda3.jpeg" id="Logo">
        <h2>Formula 7</h2>
        <p>Costo: $100</p>
        <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
      </article>

      <article id="contenido">
        <img src="<?php echo base_url();?>/assets/images/Boda4.jpeg" id="Logo">
        <h2>Castillo</h2>
        <p>Costo: $1000</p>
        <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
      </article>

      <article id="contenido">
        <img src="<?php echo base_url();?>/assets/images/Boda5.jpeg" id="Logo">
        <h2>Ramo</h2>
        <p>Costo: $500</p>
        <form action="<?php echo base_url();?>/index.php/Pastel/Compra">
          <button class="btn btn-success" type="submit">Comprar</button>
      </form>
      </article>
  </section>
</div>