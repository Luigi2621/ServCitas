<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> 
    <script type="script/text" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/195072efdf.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Gestionar informacion de usuario</h1>
    <div class="d-flex">
    	<div class="card col-sm-4">
	    	<div class="card-body">
	    		<form>
	    			<div class="form-group">
	    				<label>Identificacion</label>
	    				<input type="text" name="txtIdentificacion" class="form-control">
	    			</div>
	    			<div class="form-group">
	    				<label>Nombre</label>
	    				<input type="text" name="txtNombre" class="form-control">
	    			</div>
	    			<div class="form-group">
	    				<label>Sexo</label>
	    				<input type="text" name="txtSexo" class="form-control">
	    			</div>
	    			<div class="form-group">
	    				<label>Rol</label>
	    				<input type="text" name="txtRol" class="form-control">
	    			</div>
	    			<div class="form-group">
	    				<label>Correo</label>
	    				<input type="text" name="txtCorreo" class="form-control">
	    			</div>
	    			<div class="m-2 text-center" >
	    				<input type="submit" name="btnRegistrar" value="Registrar " class="btn btn-info">
	    				<input type="submit" name="btnActualizar" value="Actualizar " class="btn btn-success" style="margin-left: 40px">
	    			</div>
	    		</form>
	    	</div>
    	</div>

	    <div class="col-sm-8">
	    	<table class="table">
			  <thead class="bg-info">
			    <tr>
			      <th >#</th>
			      <th >Identificacion</th>
			      <th >Nombre</th>
			      <th >Sexo</th>
			      <th >Rol</th>
			      <th >Correo</th>
			      <th colspan="2">Acciones a realizar</th>
			    </tr>
			  </thead>
			  <tbody>
			  	 
				<tr>
			      <th >1</th>
			      <td>321</td>
			      <td>Edinson</td>
			      <td>Hombre</td>
			      <td>Medico</td>
			      <td>edin@gmail.com</td>
			      <td>
			      	<a class="btn btn-small btn-warning"  href=""><i class="fa-regular fa-pen-to-square"></i></a>
			      </td>
			      <td>
			      	<a class="btn btn-small btn-danger" href=""><i class="fa-solid fa-trash-can"></i></a>
			      </td>
			    </tr>
			    
			  </tbody>
			</table>
	    </div>
    </div>
    
</body>
</html>