<?php
if(!empty($_GET['id'])){
    $id = $_GET['id'];
?>
<form action="php/asignacion_new.php" method="POST">
    <div class="form-group">
        <label for="recipient-name" class="control-label">Equipos Sin Asgina</label>
        <select class="form-control">
            <option value="0">Equipo</option>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success waves-effect waves-light">Enviar</button>
    </div>
<input hidden type="text" class="form-control" name="id_evento" value="<?php echo $id;?>">
</form>
<?php
}else{
    echo "<h3>NO AY DATOS</h3>";
}
?>