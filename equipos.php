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
                                <h6 class="card-subtitle">Listado de Equipos</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="equipos" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Rol</th>
                                                <th>Cant. Puertos</th>
                                                <th>Backup-Config</th>
                                                <th>En Monitoreo</th>
                                                <th>IP</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                $sql = "SELECT equipo.id_equipo,equipo.marca_equ, equipo.modelo_equ, rol.nombre_rol, equipo.cant_puertos_equ, equipo.backup_equ, equipo.monitoreo_equ, equipo.ip_equ 
                                                FROM equipo INNER JOIN rol ON equipo.id_rol=rol.id_rol";
                                                $result = $con->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                    if($row['backup_equ']==1){
                                                        $backup_clr="success";
                                                        $backup_txt="SI";
                                                    }else{
                                                        $backup_clr="danger";
                                                        $backup_txt="NO";
                                                    }

                                                    if($row['monitoreo_equ']==1){
                                                        $moni_clr="success";
                                                        $moni_txt="SI";
                                                    }else{
                                                        $moni_clr="danger";
                                                        $moni_txt="NO";
                                                    }
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
                                                        <td class="text-center">
                                                            <?php //aqui van a ir los datos de la tabla
                                                            echo $row['cant_puertos_equ'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-<?php echo $backup_clr;?>"><?php echo $backup_txt; ?></span>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-<?php echo $moni_clr;?>"><?php echo $moni_txt; ?></span>
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
    <script src="assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
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
    $('#equipos').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
</body>

</html>