<?php 
  include("../php/conexion.php");
  require("../php/funciones.php"); 
  $buscar = mysqli_query($conexion,"SELECT idnoticia FROM noticias ORDER BY idnoticia DESC");
  $resul = mysqli_fetch_array($buscar);
  $idnot = (int)$resul['idnoticia'];
  $idnot++;
  session_start();
  revisa_login();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <?php require("require/navadmin.php") ?>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Panel</a>
        </li>
        <li class="breadcrumb-item active">Subir Contenido</li>
        <li class="breadcrumb-item active">Noticia</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-fw fa-sitemap"></i> Subir Noticia</div>
        <div class="card-body">
          <form action="../php/subir.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            <?php 
              $id = $_SESSION['idusuario'];
              $query = "SELECT * FROM usuarios WHERE idusuario='$id'";
              $resultado=mysqli_query($conexion, $query);
              $usuario=mysqli_fetch_array($resultado);
              $autor = $usuario['nombre']." ".$usuario['apellido'];
            ?>
            <div class="form-group row">
              <label for="Titulo" class="col-sm-2 col-form-label">Titulo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="titulo" placeholder="Titulo de la noticia" name="titulo">
              </div>
            </div>
            <div class="form-group row">
              <label for="Subtitulo" class="col-sm-2 col-form-label">Subtitulo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="subtitulo" placeholder="Subtitulo/Descripcion" name="subtitulo">
              </div>
            </div>
            <div class="form-group row">
              <label for="Autor" class="col-sm-2 col-form-label">Autor</label>
              <div class="col-sm-10">
                <?php echo '<input type="text" readonly class="form-control-plaintext" id="autor" value="'.$autor.'" name="autor">' ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="ID" class="col-sm-2 col-form-label">ID de la noticia</label>
              <div class="col-sm-10">
                <?php echo '<input type="text" readonly class="form-control-plaintext" id="ID" value="'.$idnot.'" name="idnot">' ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="exampleFormControlFile1">Imagen Principal (1106x450)</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imgl">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="exampleFormControlFile1">Imagen Miniatura (720x480)</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imgm">
                </div>
              </div>
            </div>
            <p></p>
            <p><textarea name="comentario"></textarea></p>
            <p class="enviar"> <input type="submit" value="Subir"></p>
          </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <?php require("require/footer.php"); ?>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <?php require("require/salir.php"); ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
