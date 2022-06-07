<div class="modal" id="modalDeleteUser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Cancelar Cita</h2>
            </div>
            <div class="modal-body">
                <form action="../controllers/administradorController.php" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="" id="form-delete-user-id">
                    <p>¿Seguro que quieres eliminar a este usuario?</p>
                    <input type="submit" value="Aceptar" class="btn btn-submit" onclick="window.localStorage.clear();">
                </form>
            </div>
        </div>
    </div>
</div>