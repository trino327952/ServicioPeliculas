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
        aqui van los botones de eliminar y actualizar
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
