@extends('layouts.cuerpo')

@section('hijos')


<h1>Editar Empleado</h1>

<div class="row">
<div class="col">

<form action="/empleado/{{$empleado->id}}"  method="POST">
@csrf
@method('PUT')


<div class="mb-3">
  <label for="" >Nombre</label>
  <input type="text" class="form-control" id="nombre" value="{{$empleado->nomempleado}}" name="nombre">
</div>



<div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="telefono" value="{{$empleado->telefono}}" name="telefono">
</div>

<div class="mb-3">
  <label for="" class="form-label">cargo</label>
  <input type="text" class="form-control" id="telefono" value="{{$empleado->idcargo}}" name="telefono">
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