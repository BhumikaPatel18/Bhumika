@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('total.create') }}" class="btn btn-primary float-end" >Create new Record</a>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th colspan="2">Name</th>
                <th>Hobbies</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>ProductType</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($totals as $total)
                <tr>
                    <td>{{$total->firstname}}</td>
                    <td>{{$total->lastname}}</td>
                    <td>{{$total->hobbies}}</td>
                    <td>{{$total->price}}</td>
                    <td>{{$total->quantity}}</td>
                    <td>{{($total->price * $total->quantity)*5/100}}</td>
                    <td>{{$total->producttype}}</td>
                    <td><a href={{route('total.show',$total->id)}} class="btn btn-primary">show</a></td>
                    <td>
                        <form action="{{route('total.destroy',$total->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>

@endsection

