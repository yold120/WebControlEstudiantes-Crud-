<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
            <input type="text" id="id" name="id" hidden="">
              <label>Matricula</label>
              <input type="text" id="matriculau" name="matriculau" class="form-control form-control-sm" required="">
              <label>Nombre</label>
              <input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm" required="">
              <label>Carrera</label>
              <input type="text" id="carrerau" name="carrerau" class="form-control form-control-sm">
              <label>Materia</label>
              <input type="text" id="materiau" list ="materias" name="materiau" class="form-control form-control-sm">
              <datalist id="materias">
                <option value="INGLES IV">
                <option value="INGENIERIA SOF">
                <option value="SO y RED">
                <option value="EMPRENDIMIENTO" >
                <option value="ANA y DIS SOFT">
                <option value="DATA BASE">
                <option value="CONSTRUC SOFT">
                <option value="PRUEBA SOFT">
                <option value="PROYECTO FINAL">
              </datalist >
              <label>Profesor</label>
                <input type="text" id="profesoru" name="profesoru" class="form-control form-control-sm" tabindex="5">

              <br>
               <input type="submit" value="Actualizar" class="btn btn-warning">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
