@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-5 m-auto">

            <div class="row">
                <div class="my-3">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Firstname : </strong> {{ $total->firstname }}</li>
                        <li class="list-group-item"><strong>Lastname : </strong> {{ $total->lastname }}</li>
                        <li class="list-group-item"><strong>Description : </strong>{{ $total->description }}</li>
                        <li class="list-group-item"><strong>Hobbies : </strong> {{ $total->hobbies }}</li>
                        <li class="list-group-item"><strong>Price : </strong> {{ $total->price }}</li>
                        <li class="list-group-item"><strong>Quantity : </strong>{{ $total->quantity }}</li>
                        <li class="list-group-item"><strong>total : </strong> {{ $total->total }}</li>
                        <li class="list-group-item"><strong>Producttype : </strong> {{ $total->Producttype }}</li>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{route('total.edit', $total->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{ route('total.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

@endsection
