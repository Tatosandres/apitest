<h1>{{$modo}} Empleado</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
<ul>
    @foreach( $errors->all() as $error)
    <Li> {{ $error }}</li>
    @endforeach
</ul>
    </div>
@endif
     

<div class="form-group">  
<label for="Nombre"> Nombre </label>
<input type="text"class="form-control" name="Nombre"value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
</div>

<div class="form-group"
<label for="PrimerApellido"> PrimerApellido </label>
<input type="text" class="form-control" name="PrimerApellido" value="{{ isset($empleado->PrimerApellido)?$empleado->PrimerApellido: old('PrimerApellido')  }}" id="PrimerApellido">
</div>

<div class="form-group"
<label for="SegundoApellido"> SegundoApellido </label>
<input type="text" class="form-control" name="SegundoApellido" value="{{ isset($empleado->SegundoApellido)?$empleado->SegundoApellido: old('SegundoApellido')}}" id="SegundoApellido">
</div>

<div class="form-group"
<label for="Correo"> Correo </label>
<input type="text"class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo: old('Correo')}}" id="Correo">
</div>

<div class="form-group"
<label for="Foto">  </label>
@if(isset($empleado->Foto))
<img  class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width ="100"alt="">
@endif
<input " type="file"class="form-control" name="Foto" value="" id="Foto">
</div>
<br>
<input class="btn  btn-success" type="submit"  value="{{$modo}} datos">
<a class="btn btn-primary" href="{{ url('empleado/')}}">Regresar</a>
