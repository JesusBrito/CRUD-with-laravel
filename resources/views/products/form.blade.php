{!! Form::open(['url'=> '/productos', 'class'=> 'app-form']) !!}
  <div class="">
    {!! Form::label('title', 'Titulo del producto') !!}
    {!! Form::text('title', '',['class'=> 'form-control']) !!}
  </div>
  <div class="">
    {!! Form::label('description', 'Descripción del producto') !!}
    {!! Form::textarea('description', '',['class'=> 'form-control']) !!}
  </div>
  <div class="">
    {!! Form::label('price', 'Precio del producto') !!}
    {!! Form::number('price', 0,['class'=> 'form-control']) !!}
  </div>
  <div class="">
    <input type="submit" value="Guardar" class="btn btn-primary">
  </div>
{!! Form::close() !!}
