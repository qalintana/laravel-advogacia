{{-- $table->string('nome');
$table->string('apelido');
$table->string('morada');
$table->string('nif');
$table->string('postal')->nullable();
$table->string('fraguesia')->nullable();
$table->string('concelho');
$table->string('contacto1');
$table->string('contacto2');
$table->string('email');
$table->string('user_id'); --}}
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Novo Cliente</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      {{-- form create client --}}

      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col-md-12">
              <input id="nome" type="text" class="validate">
              <label for="nome">Nome Completo</label>
            </div>

          </div>


          <div class="row">
            <div class="col-md-6">
              <div class="input-field col">
                <input id="nif" type="text" class="validate" name="nif">
                <label for="nif">NIF</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="input-field col-md-4">
              <input id="apelido" type="text" class="validate">
              <label for="apelido">Apelido</label>
            </div>
          </div>




          <div class="row">
            <div class="input-field col s12">
              <input id="morada" type="text" class="validate">
              <label for="morada">Morada</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="input-field col s12">
                <input id="postal" type="text" class="validate">
                <label for="postal">Postal</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-field col s12">
                <input id="fraquesia" type="text" class="validate">
                <label for="fraquesia">Fraquesia</label>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col-md-6">
              <div class="input-field ">
                <input id="contacto1" type="text" class="validate">
                <label for="contacto1">Contacto 1</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-field col">
                <input id="contacto2" type="text" class="validate">
                <label for="contacto2">Contacto 2</label>
              </div>
            </div>
          </div>


        </form>
      </div>
      {{-- End form create client --}}
    </div>
    <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
      <button type="button" class="btn btn-primary">
        <i class="fas fa-user">
        </i>&nbsp; Registar
      </button>
    </div>
  </div>
  <!-- /.modal-content -->
</div>
