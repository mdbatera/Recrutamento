<!-- Menu -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"> <a class="navbar-brand" href="#">Alpha</a> </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Cadastrar</a></li>
	  <?php if(!isset($_SESSION["nivel"])){ ?> 
      <li><a href="cargos.php">Cargos</a></li>
      <?php } ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"  data-toggle="tooltip" data-placement="bottom" title=""><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['usuarioNome']; ?></a></li>
      <li><a href="../usuarios/logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>
<!-- Menu -->
