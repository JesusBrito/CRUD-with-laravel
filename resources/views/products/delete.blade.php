@auth
  {!! Form::open(['method' => 'DELETE' , 'route'=> ['productos.destroy', $product->id],
    'onsubmit'=> 'return confirm("¿Estás seguro de eliminar el producto?")'])!!}
    <input type="submit" class="btn btn-danger" name="" value="Eliminar producto">
  {!! Form::close() !!}
@endauth
