<?php
include("sesion.php");
include("conexion.php");
if(isset($_POST['crear'])){
  $target_path = getcwd();
  $now = str_replace("", "", date("d-m-Y H:i"));
  $outputfilename = $db . '-' . $now . '.sql';
  $outputfilename = str_replace(" ", "-", $outputfilename);
  $save_path = $target_path . '/'.$outputfilename;
          
  $command = "mysqldump --user=$user --password=$pass $db > $outputfilename";
  shell_exec($command);
            
  //Para forzar la descarga del navegador
  header('Content-Type: application/octet-stream');
  header("Content-Transfer-Encoding: Binary"); 
  header('Content-Disposition: attachment; filename='.basename($outputfilename));
  header('Content-Transfer-Encoding: binary');
  header("Content-Type: application/download");
  header("Content-Description: File Transfer"); 
  header("Content-Length: ".filesize($outputfilename));
  readfile($save_path);
         
  //Eliminar el archivo del servidor
  shell_exec('rm ' . $save_path);  
}

if($_FILES){
  $target_path = getcwd();
  $databasefilename = $_FILES["databasefile"]["name"];
  $save_path = $target_path . '/backup/';
  $restore_path = $target_path . '/backup/'.$databasefilename;
  //Subir archivo a directorio de backup
  move_uploaded_file($_FILES["databasefile"]["tmp_name"], $target_path . '/backup/' . $databasefilename);
  
  //Restaurando base de datos         
  $command="mysql --user=$user --password=$pass $db < $restore_path";
  exec($command,$result, $output);

  if($output != 0) {
    echo "<script>alert('Error al restauraurar base de datos');</script>";
  }else {
    echo "<script>alert('Datos restaurados con Exito');</script>";
  }
}
require("header.php");
?>

<br>
    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
        <div class="panel panel-primary">
		 <div class="panel-heading">
			<h3 class="panel-title">Crear Copia de seguridad</h3>
		</div>
        <div class="panel-heading">Crear Copia de Seguridad</div>
        <div class="panel-body">
          <form method="POST">
            <input type="hidden" name="crear" value="crear">
            <input type="submit" value="Crear Copia">
          </form>
            
        </div>
      </div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Restaurar Copia de seguridad</h3>
  </div>
  <div class="panel-body">
    <form method="POST" enctype="multipart/form-data">
      <input type="file" name="databasefile" / required>
      <br><br>
      <input type="submit" value="Restaurar"/>
    </form>
  </div>
</div>
      </div>
    </div>    
 <?php include('footer.php'); ?>

