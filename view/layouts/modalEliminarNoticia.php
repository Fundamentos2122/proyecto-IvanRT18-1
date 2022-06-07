<div class="modal" id="modalDeleteNoticia">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Borrar noticia</h2>
            </div>
            <div class="modal-body">
                <form action="../controllers/blogController.php" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="" id="form-delete-noticia-id">
                    <p>¿Seguro que quieres eliminar esta noticia?</p>
                    <input type="submit" value="Aceptar" class="btn btn-submit" onclick="window.localStorage.clear();">
                </form>
            </div>
        </div>
    </div>
</div>