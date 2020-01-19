
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DESCRIPCION</div>

                <div class="card-body">

                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Datos Usuario</label>
                            <input type="text" name="descripcion" class="form-control" aria-describedby="emailHelp"  required>
                            <small id="emailHelp" class="form-text text-muted">ingresar datos valisdos del usuario</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>                 
                </div>
                <div class="card-footer">
                   <!-- invocamos el html del archivo TablaTipoUsuario.blade.php -->   
                    @include('admin.TipoUsuario.TablaTipoUsuario') 
                </div>
                <div class="card-footer">
                   <!-- invocamos el html del archivo TablaTipoUsuario.blade.php -->   
                    @include('admin.TipoUsuario.ModalTipoUsuario') 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
