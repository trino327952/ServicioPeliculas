<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descripcon</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($listaTipoUsuarios as $item)
    <tr>
      <th scope="row">1</th>
      <td>{{$item['descripcion']}}</td>
      <td>
   
         <button type="button" class="btn btn-lg btn-primary" disabled>Eliminar</button>
         <button type="button" class="btn btn-lg btn-primary" disabled>Editar</button>
         
      </td>
          
    </tr>
    @endforeach
  </tbody>
</table>
