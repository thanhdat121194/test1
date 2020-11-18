@extends('layouts.app')
@section('content')
    <div class="card">
        {{-- {{$store->first()->name}}  --}}
        <h3 class="card-header bg-primary text-light text-center">Menu of </h3>
        <div class="card-body">
            
            <a class="btn-primary btn" href="{{ route('menu.create') }}">Pull Menu from Woo</a>
            <hr>
            <table class="table table-hover table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>lp.</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Store</th>
                       
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($menu as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->content }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $woocomerce->name }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection