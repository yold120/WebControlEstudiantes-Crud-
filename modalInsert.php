
<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">

            <div class="row">

              <div class="col-4">
                <label>Matricula</label>
                <input placeholder = "Ingresar Matricula" type="text" id="matricula" name="matricula" class="form-control form-control-sm" tabindex="1" required="" >
              </div>

              <div class="col-6">
                <label>Nombre</label>
                <input placeholder = "Ingresar Nombre" type="text" id="nombre" name="nombre" class="form-control form-control-sm" tabindex="2" >
              </div>

              <div class="col-4">
                <label>Carrera</label>
                <input placeholder = "Desarrollo de Software" type="text" id="carrera" name="carrera" class="form-control form-control-sm" tabindex="3">
              </div>

              <div class="col-4">
                <label>Materia</label>
                <input placeholder = "Seleccionar Materia" list ="materias" id="materia" name="materia" class="form-control form-control-sm" tabindex="4" required="">
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
              </div>

              <div class="col-4">
                <label>Profesor</label>
                <input placeholder = "Seleccionar Profesor" type="text" id="profesor" name="profesor" class="form-control form-control-sm" tabindex="5">
              </div>

              <div class="col-4">

              </div>

              <div class="col-4">

              </div>

              <div class="col-4">

              </div>

              <div class="col-4">

              </div>




            </div>










              <br>


               <input type="submit" value="Guardar" class="btn btn-primary ">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
