<?php
    function menu(){  ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="formulario.php">Formulario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="abm.php">ABM MySQL</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ejercicios
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Ejercicio 1</a></li>
                  <li><a class="dropdown-item" href="#">Ejercicio 2</a></li>
                  <li><a class="dropdown-item" href="#">Ejercicio 3</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br><br>

<?php        
    }
?>