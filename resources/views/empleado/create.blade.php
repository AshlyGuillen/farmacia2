@extends('layouts.cuerpo')

@section('hijos')


<h1>Crear Empleado</h1>

<div class="row">
<div class="col">

<form action="/empleado"  method="POST">
@csrf

<div class="mb-3">
  <label for="" >Codigo</label>
  <input type="text" class="form-control" id="codigo"  name="codigo">
</div>

<div class="mb-3">
  <label for="" >Nombre</label>
  <input type="text" class="form-control" id="nombre"  name="nombre">
</div>


<div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="telefono"  name="telefono">
</div>

<div class="mb-3">
  <label for="" class="form-label">Cargo</label>
  <input type="text" class="form-control" id="cargo"  name="cargo">
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="/empleado" class="btn btn-danger">Cancelar</a>
</div>


</form>

</div>

</div>



</form>


@endsection