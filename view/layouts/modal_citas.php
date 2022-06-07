<div class="modal" id="modalText">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Editar cita</h2>
            </div>
            <div class="modal-body">
                <form action="../controllers/misCitasController.php" method="POST">
                <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="" id="form-edit-id">
                    <p for="text">Día de la nueva cita:</p>
                    <br>
                    <input type="date" id="form-edit-date" name="date" required></input>
                    <input type="time" id="form-edit-time" name="time" required></input>
                    <input type="submit" class="btn btn-agenda" value="Guardar" name="EditaCitaBtn">
                </form>
            </div>
        </div>
    </div>
</div>