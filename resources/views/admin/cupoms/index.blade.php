@extends('app')
@section('content')

    <div class="container">
        <h3>Cupons</h3>
        <br>
        <a href="{{ route('admin.cupoms.create') }}" class="btn btn-default">Novo cupom</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>CODIGO</th>
                <th>VALOR</th>
                <td>ACAO</td>
            </tr>
            </thead>

            <tbody>
            @foreach($cupoms as $cupom)
                <tr>
                    <td>{{$cupom->id}}</td>
                    <td>{{$cupom->code}}</td>
                    <td>{{$cupom->value}}</td>
                    <td>--</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $cupoms->render() !!}
    </div>

@endsection
