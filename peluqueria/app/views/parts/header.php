<nav style="background-color:gray; height:50px; margin:20px;" >
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul style="list-style-type: none; display: flex; justify-content:space-between; width:500px; font-size:20px; padding-top:12px;">
      <li class="nav-item active">
        <a class="nav-link" style="color:white; text-decoration:none;" href="<?php echo isset($_SESSION['user']) ? PATH."/home/home": PATH."/home" ?>">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="color:white; text-decoration:none;" href="<?php echo isset($_SESSION['user']) ? PATH."/servicios/servicio": PATH."/servicios/index" ?>">Servicios</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="color:white; text-decoration:none;" href="<?php echo isset($_SESSION['user']) ? PATH."/employer/trabajador": PATH."/employer/trabajadorPublico" ?>">Trabajadores</a>
      </li>
       
      <li class="nav-item active">
        <a class="nav-link" style="color:white; text-decoration:none;" href="<?php echo isset($_SESSION['user']) ? PATH."/login/logout": PATH."/login/index" ?>"><?php if(isset($_SESSION['user'])){echo "Log out";}else{echo "Login";}?></a>
      </li>
    </ul>
  </div>
</nav>