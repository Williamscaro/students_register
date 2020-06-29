<?php 
include '../layout/layout.php'; 
include '../helpers/utilities.php'; 

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['carreer']) && isset($_POST['student_state'])) {
 
    $studentId= 1;
    $students = [];
    array_push($students, ['id' => $studentId,'first_name' => $_POST['first_name'],'last_name' => $_POST['last_name'],'carreer' => $_POST['carreer'], 'student_state' => $_POST['student_state']  ]);

    var_dump($students);

}


?>
<?php printHeader(true); ?>

<main role="main">

<form action="add.php" method="POST">
<div style="margin-top:5%; "class="row">
    <div class="col-md-3"></div><!--Centrar todo-->

    <div class="col-md-6">

    <div class="row col-auto my-1">
    <div class="col">
      <input type="text" class="form-control" placeholder="Nombre" name="first_name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Apellido"name="last_name">
    </div>
  </div>


  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="carrera">Carrera</label>
      <select class="custom-select mr-sm-2" id="carrera" name="carreer">
        

      <?php foreach($carreer as $id => $text): ?>

        <option value="<?php echo $id; ?>">  <?php echo $text; ?> </option>

      <?php endforeach; ?>

      </select>
    </div>

    <div class="col-auto my-1">
      <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="student_state">
        <label class="custom-control-label" for="customControlAutosizing">Estudiante Activo?</label>
      </div>
    </div><br>

    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



<br><br><br><br>
<!--Tarjeta-->
<div class="card" style="width: 18rem;">
  <div class="card-header bg-dark text-light">
  <a class="btn btn-light" href="../index.php" role="button">Ir atras</a>
    <br><br> &nbsp;&nbsp;Registrar Estudiante
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
  <!--Tarjeta-->

    </div>
    <div class="col-md-3"></div><!--Centrar todo izquierda-->
</div>

  

 



</main>

<?php printFooter(true); ?>