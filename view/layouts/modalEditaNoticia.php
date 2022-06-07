<div class="modal" id="modalEditaNoticia">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edita la Noticia</h2>
                <p>Puedes modificar los campos que necesites</p>
            </div>
            <div class="modal-body">
                <form action="../controllers/blogController.php" method="POST">
                <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="" id="form-edit-noticia-id">
                    <p for="text">Titulo</p>
                    <input type="text" autocomplete="off" id="form-edit-noticia-titulo" name="titulo"></input>
                    <p for="text">Introduccion</p>
                    <textarea rows="20"  type="text" autocomplete="off" id="form-edit-noticia-intro" name="intro"></textarea>


                    <p for="text">Subtitulo 1</p>
                    <input type="text" autocomplete="off" id="form-edit-noticia-sub1" name="sub1"></input>

                    <p for="text">Contenido 1</p>
                    <textarea rows="20" type="text" autocomplete="off" id="form-edit-noticia-con1" name="con1"></textarea>

                    <p for="text">Subtitulo 2</p>
                    <input type="text" autocomplete="off" id="form-edit-noticia-sub2" name="sub2"></input>
                    
                    <p for="text">Contenido 2</p>
                    <textarea rows="20" type="text" autocomplete="off" id="form-edit-noticia-con2" name="con2"></textarea>

                    <p for="text">Subtitulo 3</p>
                    <input type="text" autocomplete="off" id="form-edit-noticia-sub3" name="sub3"></input>
                    
                    <p for="text">Contenido 3</p>
                    <textarea rows="20" type="text" autocomplete="off" id="form-edit-noticia-con3" name="con3"></textarea>

                    <div id="noticia-container">

                    </div>
                    <!-- <p for="text">Día cita:</p>
                    <input type="date" id="form-edit-admin-date" name="date"></input>
                    <p for="text">Hora cita:</p>
                    <input type="time" autocomplete="off" id="form-edit-admin-time" name="time"></input> -->
                    <input type="submit" class="btn btn-agenda" value="Guardar" name="EditaNoticiaBtn">
                </form>
            </div>
        </div>
    </div>
</div>