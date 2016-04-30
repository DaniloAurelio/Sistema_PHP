<?
	$_nome= $_GET['nome'];
	$_telefone= $_GET['nome'];

	
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Sistema de Controle de Fichas</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

<style type="text/css">
 
.footer {

	bottom:0;
	position:fixed;
}
 
</style>

</head>


<body>
<div class="container">

	
		<header>
		<div class="page-header">
 			 <h1>SCF <small>  Sistema de Controle de Fichas </small></h1>
		</div>		

			<ul class="nav nav-tabs">
			  <li role="presentation"  ><a href="index.html">Home</a></li>
			  <li role="presentation" class="active"><a href="clientes.php">Clientes</a></li>
			  <li role="presentation"><a href="#">Produtos</a></li>
			</ul>
		</header>
	
		</br>
<form class="form-horizontal" action="clientes.php" method="GET">
  <div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-2">
      <input type="" class="form-control" id="nome" name="nome">
    </div>

      </div>

      <div class="form-group">
    <label for="telefone" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="telefone" name="telefone" >
    </div>

      </div>
  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Gravar</button>
    </div>
  </div>
</form>
<table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Endereço</th>
          <th>Telefone</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><?=$_nome;?></td>
          <td><?=$_telefone;?></td>
          <td>@mdo</td>
        </tr>
       
      </tbody>
    </table>



     <div class="col-md-11">
			<div class="footer">
				<footer>
				Todos os Direitos Reservador ®
				</footer>
			</div>
  	</div>


	

</body>