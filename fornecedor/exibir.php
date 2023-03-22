<?php 
	# Ler um arquivo
	$dados = file("dados.txt");

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Lista de Clientes </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

</head>
<body>
<div class="container-fluid fs-7">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><span class="iconify" data-icon="arcticons:company-portal" style="color: red;" data-width="40" data-height="40"></span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="formulario.php">Cadastro</a>
                            <a class="nav-link" href="exibir.php">Fornecedores</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <br>


	<div class="container-fluid">
	

	  <div class="row">	  	
	  	<div class="col-10 offset-1">
	  		<table class="table table table-sm border-primary table-hover" id="myTable">
	  			<thead class="text-center text-light bg-danger">
                    <th> Nome </th>
	  				<th> Razão social </th>
	  				<th> CNPJ </th>
					<th> Data de cadastro </th>
	  			</thead>
	  			<tbody>
	  				
	  				<?php foreach($dados as $string): ?>
	  					<?php $linha = explode(" - ", $string); ?>
	  					<tr>
		  					<?php foreach ($linha as $dado): ?>
		  						<td><?=$dado;?></td>		
		  					<?php endforeach; ?>

	  					</tr>
	  				<?php endforeach; ?>

	  				
	  			</tbody>
	  			<tfoot class="text-center">
                    <th> Nome </th>
	  				<th> Razão social </th>
	  				<th> CNPJ </th>
					<th> Data de cadastro </th>
	  			</tfoot>
	  		</table>
	  	</div>	  	
	  </div>
	</div>



	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	
	<!-- Bootstrap -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	
	<!-- Icones -->
	<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>    
    
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- Custom Script -->
	<script type="text/javascript">
		$(document).ready(function () {
		    $('#myTable').DataTable({
		    	"language": {
			        "sProcessing":    "Procesando...",
			        "sLengthMenu":    "Mostrar _MENU_ registros",
			        "sZeroRecords":   "Não se encontram resultados",
			        "sEmptyTable":    "Ningún dato disponible en esta tabla",
			        "sInfo":          "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
			        "sInfoEmpty":     "Mostrando registros de 0 al 0 de un total de 0 registros",
			        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
			        "sInfoPostFix":   "",
			        "sSearch":        "Buscar:",
			        "sUrl":           "",
			        "sInfoThousands":  ",",
			        "sLoadingRecords": "Carregando...",
			        "oPaginate": {
			            "sFirst":    "Primero",
			            "sLast":    "Último",
			            "sNext":    "Seguinte",
			            "sPrevious": "Anterior"
			        },
			        "oAria": {
			            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			        }
			    }
		    });
		});
	</script>

</body>
</html>