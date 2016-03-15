@extends('app')
@section('content')

    <div class="container">
        <h3>Orders</h3>
        <br>

        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>TOTAL</th>
                <th>DATA</th>
                <th>ITENS</th>
                <th>ENTREGADOR</th>
                <th>STATUS</th>
                <th>ACAO</th>
            </tr>
            </thead>

            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->total}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>
                        @foreach($order->items as $item)
                            <ul>
                               <li>{{$item->product->name}}</li>
                            </ul>
                        @endforeach
                    </td>
                    <td>
                        @if($order->deliveryman)
                            {{$order->deliveryman->name}}
                        @else
                            --
                        @endif

                    </td>

                    <td>{{$order->status}}</td>
                    <td><a href="{{route('admin.orders.edit',['id' => $order->id])}}" class="btn btn-default btn-sm">Editar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $orders->render() !!}
    </div>

@endsection
