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
                    
                    {{-- @foreach ($menus as $key => $menu)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->content }}</td>
                        <td>{{ $menu->type }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>{{ $store->first()->name }}</td>
                        
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection