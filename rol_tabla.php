<?php 
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "TABLA ROL";
$sql = "select * from rol";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {

?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php';?>
<body class="skin-default fixed-layout">   
    <?php include_once 'loader.php';?>
    <div id="main-wrapper">
        <?php 
        include_once 'top_bar.php';
        include_once 'navbar.php';
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-12">
                        <h4 class="text-dark"><?php echo $titulo;?></h4>
                    </div>
                    <div class="col-md-6 text-right">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
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
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Marca: activate to sort column descending" style="width: 129px;">NOMBRE</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Modelos: activate to sort column ascending" style="width: 194px;">DESCRIPCION</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 96px;">STATUS</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Cantidad de puertos: activate to sort column ascending" style="width: 45px;">Cantidad de puertos</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Garantia: activate to sort column ascending" style="width: 88px;">Garantia</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Poseen doble fuente: activate to sort column ascending" style="width: 66px;">Poseen doble fuente</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Backup-config: activate to sort column ascending" style="width: 66px;">Backup-config</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Existe configuracion: activate to sort column ascending" style="width: 66px;">Existe configuracion</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Direccion IP: activate to sort column ascending" style="width: 66px;">Direccion IP</th> -->
                                                    
                                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" style="width: 66px;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php 
                                                        echo $row['nombre_rol'];//aqui van a ir los datos de la tabla
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['descripcion_rol']; //aqui van a ir los datos de la tabla
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['estado_rol'];  //aqui van a ir los datos de la tabla
                                                        ?>
                                                    </td>
                                                    
                                                    <td class="text-nowrap">
                                                        <a href="rol_editar.php?id=<?php //aqui va el id ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                        <a href="deleteeq.php?id=<?php //aqui va el id ?>" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php
                                    }
                                        ?>
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
                <?php include_once 'rightbar.php';?>
            </div>
        </div>
        <?php include_once 'footer.php';?>
    </div>
    <?php include_once 'scripts.php'; ?>
</body>
</html>
        
