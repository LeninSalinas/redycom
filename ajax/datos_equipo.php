<?php
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $suc = $_GET['suc'];
    require_once '../config/db.php';
    require_once '../config/conexion.php';
?>
<form action="php/asignar_new.php" method="POST">
    <div class="form-group">
        <label for="recipient-name" class="control-label">Asignar Equipo a Slot <?php echo $id;?></label>
        <select class="custom-select col-12" id="inlineFormCustomSelect" name="equipo" required>
            <?php 
            $sql = $con->query("SELECT * FROM equipo WHERE rack_pos=0 AND estado_equ = 1");
            while ($rows = $sql->fetch_array()){
            ?>
            <option value="<?php echo $rows['id_equipo'];?>"><?php echo $rows['marca_equ']."-".$rows['ip_equ'];?></option>
            <?php } ?>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success waves-effect waves-light">Enviar</button>
    </div>
    <input hidden type="text" class="form-control" name="slot" value="<?php echo $id;?>">
    <input hidden type="text" class="form-control" name="suc" value="<?php echo $suc;?>">
</form>
<?php
}else{
    echo "<h3>NO AY DATOS</h3>";
}
?>