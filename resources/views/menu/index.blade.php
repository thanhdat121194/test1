@extends('layouts.app')
@section('content')
    <div class="card">
        <h3 class="card-header bg-primary text-light text-center">Menu</h3>
        <div class="card-body">
      
            @foreach ($store as $s)
           
            <form action=" {{route('menu.edit', $s->id) }}">
                <button class="float-left btn btn-primary" style="width: 50%; height: 200px; overflow: hidden;">
                    <span style="font-size: 100px;">  {{ $s->name }}</span>
                  
                </button>
            </form>
            @endforeach
        </div>
    </div>
@endsection