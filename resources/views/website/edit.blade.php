@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 mx-auto">
        <div class="card">
            <h3 class="card-header text-light text-center bg-primary">Edytuj {{ $website->url }}</h3>
            <div class="card-body">
                
                <form action="" method="post">
                   
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-2 col-sm-2 col-lg-2">Name</div>
                        <div class="col-md-10 col-sm-10 col-lg-10"><input type="text" class="form-control" value="{{ $website->name}}" autofocus name="name" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2 col-sm-2 col-lg-2">URL</div>
                        <div class="col-md-10 col-sm-10 col-lg-10"><input type="text" class="form-control" value="{{ $website->url}}" autofocus name="url" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2 col-sm-2 col-lg-2">Consumer Key</div>
                        <div class="col-md-10 col-sm-10 col-lg-10"><input type="text" class="form-control" value="{{ $website->consumer_key }}" autofocus name="key" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2 col-sm-2 col-lg-2">Consumer Secret</div>
                        <div class="col-md-10 col-sm-10 col-lg-10"><input type="text" class="form-control" value="{{ $website->consumer_secret }}" autofocus name="secret" required></div>
                    </div>
                    <button class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection