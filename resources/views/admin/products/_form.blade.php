<div class="form-group">
    {!! Form::label('Category"','Categoria:')!!}
    {!! Form::select('category_id',$categories, null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name"','Nome:')!!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descrição"','Descrição:')!!}
    {!! Form::textarea('descricao',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price"','Preço:')!!}
    {!! Form::text('price',null,['class' => 'form-control']) !!}
</div>
