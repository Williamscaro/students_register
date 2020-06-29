<?php 

include 'layout/layout.php' ;
include 'helpers/utilities.php' ;


session_start();

$_SESSION['students'] = isset($_SESSION['students']) ? $_SESSION['students'] : array();

$listadoEstudiantes = $_SESSION['students'];

?>


<?php printHeader(); ?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>ITLA  >Estudiantes</h1>
      <p class="lead text-muted">El Instituto Tecnológico de Las Américas (ITLA) es una institución técnica de estudios superiores, fundada en el año 2000 por el Estado dominicano. Única especializada en educación tecnológica en la República Dominicana.</p>
      <p>
        <a href="Estudiantes\add.php" class="btn btn-primary my-2">Registrate Hoy</a>
        <a href="#" class="btn btn-secondary my-2 disabled" aria-disabled="true">Delete</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

      <?php if (empty($listadoEstudiantes)): ?>

        <h2>No hay Estudiantes Registrados, registralo aqui: <a class="btn btn-primary" href="Estudiantes/add.php"></a> Registrar Ahora</h2>

      <?php else : ?>


        <?php foreach($listadoEstudiantes as $student): ?>
            
        <div class="col-md-4">

<div class="card" style="width: 18rem;">
    <div class="card-header">
      Estudiantes Registrados
    </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $student['first_name']; ?></li>
          <li class="list-group-item"><?php echo $student['last_name']; ?></li>
          <li class="list-group-item"><?php echo getCarreerName($student['carreer']); ?></li>
          <li class="list-group-item">Estudiante Activo? <?php echo $student['student_state']; ?></li>
          <a class="card-link" href="#">Editar</a>
          <a class="card-link" href="#">Borrar</a>
        </ul>
    </div>

</div>
</div>

      <?php endforeach; ?>




      <?php endif; ?>



    </div>
  </div>

</main>

<?php printFooter(); ?>