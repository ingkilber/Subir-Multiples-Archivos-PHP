<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>Subir y compartir archivos </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<style type="text/css">
* {
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif
}
.main {
	margin:auto;
	display: inline-block;
	width:100%;
	text-align:center;
	padding:60px;
}
input[type=submit] {
	background:#6ca16e;
	width:100%;
	padding:5px 15px;
	background:#ccc;
	cursor:pointer;
	font-size:16px;
}
input[type=text] {
	width:40%;
	padding:5px 15px;
	height:25px;
	font-size:16px;
}
.form-control {
	padding: 5px 0px;
}
</style>
</head>
<style>
  body {
    background-image:url('https://ak.picdn.net/shutterstock/videos/1060009577/thumb/1.jpg?ip=x480');
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<br>
<div class="main">
  <h1>Subir y Compartir Archivos</h1>
  <img src="https://static.thenounproject.com/png/49665-200.png" alt=""
     width="400"
     height="341">
  <div class="panel panel-primary">
    <div class="panel-body">
      <form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
        <h4 class="text-center">Cargar Múltiple Archivos</h4>
        <div class="form-group">
          <label class="col-sm-2 control-label">Drag and Drop</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="miarchivo[]" name="miarchivo[]" multiple="">
          </div>
          <button type="submit" class="btn btn-primary">Cargar Multiple</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>