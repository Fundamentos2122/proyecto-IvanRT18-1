<div class="modal" id="modalVerCitasAdmin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Información sobre el usuario</h2>
                <p>Puedes modificar los campos</p>
            </div>
            <div class="modal-body">
                <form action="../controllers/administradorController.php" method="POST">
                <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="" id="form-edit-admin-id">
                    <p for="text">Nombre</p>
                    <input type="name" autocomplete="off" id="form-edit-admin-name" name="name"></input>
                    <p for="text">Email</p>
                    <input type="email" autocomplete="off" id="form-edit-admin-email" name="email"></input>
                    <p for="text">Tipo</p>
                    <input type="text" autocomplete="off" id="form-edit-admin-tipo" name="tipo"></input>
                    <input type="submit" class="btn btn-agenda" value="Guardar"></input>
                    <div id="citas-admin-container">

                    </div>
                    <!-- <p for="text">Día cita:</p>
                    <input type="date" id="form-edit-admin-date" name="date"></input>
                    <p for="text">Hora cita:</p>
                    <input type="time" autocomplete="off" id="form-edit-admin-time" name="time"></input> -->
                    
                </form>
            </div>
        </div>
    </div>
</div>