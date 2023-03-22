<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

    <style>
        label {
            color: #615f5a;
        }
    </style>
    <title>Salvar Dados</title>
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
                <div class="col-md-4 offset-4"><br>
                    <div class="card mb-2 bg-light text-dark"">
                        <div class="card-header text-light bg-danger">
                            Cadastrar Fornecedor
                        </div>
                        <div class="card-body">
                            <form action="salvar_dados.php" method="POST">
                                <label>Nome:</label>
                                <input type="text" name="nome" class="form-control form-control-sm"><br>
                                <label>Razão social:</label>
                                <input type="text" name="razao" class="form-control form-control-sm"> <br>
                                <label>CNPJ:</label>
                                <input type="number" name="cnpj" class="form-control form-control-sm"><br>
                                <label>Data de cadastro:</label>
                                <input type="date" name="data" class="form-control form-control-sm"><br>

                                <button type="submit" class="btn btn-outline-danger">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Icones -->
        <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

        <!-- Custom Script Table -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myTable').DataTable({
                    "language": {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "Não se encontram resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros de 0 al 0 de un total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Carregando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Seguinte",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }
                });
            });
        </script>
</body>

</html>