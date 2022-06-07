<div class="modal" id="modalDeleteText">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Cancelar Cita</h2>
            </div>
            <div class="modal-body">
                <form action="../controllers/misCitasController.php" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="" id="form-delete-id">
                    <p>¿Seguro que desea cancelar esta cita?</p>
                    <input type="submit" value="Aceptar" class="btn btn-submit" onclick="window.localStorage.clear();">
                </form>
            </div>
        </div>
    </div>
</div>