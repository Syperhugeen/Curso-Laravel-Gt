<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Desactivar'] , null )          !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('role', 'Role', array('class' => 'formulario-label ')) !!}
  {!! Form::select('role', config('options.role'),null ) !!}
</div>