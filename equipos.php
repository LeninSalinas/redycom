<?php
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "Equipos";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php'; ?>

<body class="skin-default fixed-layout">
    <?php include_once 'loader.php'; ?>
    <div id="main-wrapper">
        <?php
        include_once 'top_bar.php';
        include_once 'navbar.php';
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-12">
                        <h4 class="text-dark"><?php echo $titulo; ?></h4>
                    </div>
                    <div class="col-md-6 text-right">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-6">
                                    <!-- Nav tabs -->
                                    <div class="vtabs">
                                        <ul class="nav nav-tabs tabs-vertical" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home4" role="tab" aria-selected="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Informacion del equipo</span> </a> </li>
                                            <!--<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile4" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages4" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>-->
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active show" id="home4" role="tabpanel">
                                                <div class="p-20">
                                                    <!--aqui va info del equipo-->
                                                </div>
                                            </div>
                                            <div class="tab-pane p-20" id="profile4" role="tabpanel">2</div>
                                            <div class="tab-pane p-20" id="messages4" role="tabpanel">3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <div id="example23_wrapper" class="dataTables_wrapper">
                                        <div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example23" href="#">
                                                <span>Copy</span></a><a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example23" href="#">
                                                <span>Excel</span></a><a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example23" href="#">
                                                <span>PDF</span></a><a class="dt-button buttons-print" tabindex="0" aria-controls="example23" href="#"><span>Print</span></a></div>
                                        <div id="example23_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example23"></label></div>
                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Orden: activate to sort column descending" style="width: 129px;">Orden</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Modelos: activate to sort column ascending" style="width: 194px;">Marca</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Modelos: activate to sort column ascending" style="width: 194px;">Modelos</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 96px;">Rol</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Cantidad de puertos: activate to sort column ascending" style="width: 45px;">Cantidad de puertos</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Backup-config: activate to sort column ascending" style="width: 45px;">Backup-config</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Existe configuracion: activate to sort column ascending" style="width: 45px;">Existe configuracion</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Direccion IP: activate to sort column ascending" style="width: 45px;">Direccion IP</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" style="width: 66px;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT equipo.id_equipo,equipo.marca_equ, equipo.modelo_equ, rol.nombre_rol, equipo.cant_puertos_equ, equipo.backup_equ, equipo.monitoreo_equ, equipo.ip_equ 
                                                FROM equipo INNER JOIN rol ON equipo.id_rol=rol.id_rol";
                                                $result = $con->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php //aqui van a ir los datos de la tabla
                                                            echo $row['id_equipo'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php //aqui van a ir los datos de la tabla
                                                            echo $row['marca_equ'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php //aqui van a ir los datos de la tabla
                                                            echo $row['modelo_equ'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php //aqui van a ir los datos de la tabla
                                                            echo $row['nombre_rol'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php //aqui van a ir los datos de la tabla
                                                            echo $row['cant_puertos_equ'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php //aqui van a ir los datos de la tabla
                                                            echo $row['backup_equ'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php //aqui van a ir los datos de la tabla
                                                            echo $row['monitoreo_equ'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php //aqui van a ir los datos de la tabla
                                                            echo $row['ip_equ'];
                                                            ?>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <a href="actualizareq.php?id=<?php //aqui va el id 
                                                                                            echo $row['id_equipo'];
                                                                                            ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                            <a href="deleteeq.php?id=<?php //aqui va el id 
                                                                                            echo $row['id_equipo'];
                                                                                        ?>" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <!--<div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>-->
                                        <div class="dataTables_paginate paging_simple_numbers" id="example23_paginate">
                                            <a class="paginate_button previous disabled" aria-controls="example23" data-dt-idx="0" tabindex="0" id="example23_previous">Previous</a>
                                            <span>
                                                <a class="paginate_button current" aria-controls="example23" data-dt-idx="1" tabindex="0">1</a>
                                                <a class="paginate_button " aria-controls="example23" data-dt-idx="2" tabindex="0">2</a>
                                                <a class="paginate_button " aria-controls="example23" data-dt-idx="3" tabindex="0">3</a>
                                                <a class="paginate_button " aria-controls="example23" data-dt-idx="4" tabindex="0">4</a>
                                                <a class="paginate_button " aria-controls="example23" data-dt-idx="5" tabindex="0">5</a>
                                                <a class="paginate_button " aria-controls="example23" data-dt-idx="6" tabindex="0">6</a>
                                            </span>
                                            <a class="paginate_button next" aria-controls="example23" data-dt-idx="7" tabindex="0" id="example23_next">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include_once 'rightbar.php'; ?>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </div>
    <?php include_once 'scripts.php'; ?>
    <!-- This is data table -->
    <script src="../assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
</body>

</html>