@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DESCRIPCION</div>

                <div class="card-body">
                    <form>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Datos Usuario</label>
                            <input type="text"  name="descripcion" class="form-control" aria-describedby="emailHelp"  required>
                            <small id="emailHelp" class="form-text text-muted">ingresar datos validos del usuario</small>
                        </div> -->
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">TipoUsuario</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="idTipo">
                            <option selected>TipoUsuario</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">name</label>
                            <input type="text"  name="name" class="form-control" aria-describedby="emailHelp"  required>
                            <small id="emailHelp" class="form-text text-muted">ingresar datos validos del usuario</small>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">email</label>
                            <input type="text"  name="email" class="form-control" aria-describedby="emailHelp"  required>
                            <small id="emailHelp" class="form-text text-muted">ingresar datos validos del usuario</small>
                        </div>


                        


                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>                 
                </div>
                <div class="card-footer">
                   <!-- invocamos el html del archivo TablaTipoUsuario.blade.php -->   
                    @include('admin.TipoUsuario.TablaTipoUsuario') 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection