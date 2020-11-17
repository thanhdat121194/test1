@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 mx-auto form-group">
        <div class="card">
            <h3 class="card-header bg-primary text-center text-light">Websites</h3>
            <div class="card-body">
                <table class="table table-hover table-striped table-bordered text-center table-responsive">
                    <thead>
                        <tr>
                            <th>Lp.</th>
                            <th>Nazwa</th>
                            <th>URL</th>
                            <th>Consumer Key</th>
                            <th>Consumer Secret</th>
                            <th>Edytuj</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                        @foreach ($woocomerce as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->url }}</td>
                            <td>{{ $item->consumer_key }}</td>
                            <td>{{ $item->consumer_secret }}</td>
                            <td>
                                <form action="" method="GET">
                                    <button class="btn btn-danger text-light">Edytuj</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mx-auto form-group">
        <div class="card">
            <h3 class="card-header text-light text-center bg-primary">New Website</h3>
            <div class="card-body">
                {{-- } --}}
        <form action="http://localhost/testthailong/public/w" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-2 col-sm-2 col-lg-2">Nazwa</div>
                        <div class="col-md-10 col-sm-10 col-lg-10"><input type="text" class="form-control" autofocus name="name" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2 col-sm-2 col-lg-2">URL</div>
                        <div class="col-md-10 col-sm-10 col-lg-10"><input type="text" class="form-control" autofocus name="url" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2 col-sm-2 col-lg-2">Comsumer Key</div>
                        <div class="col-md-10 col-sm-10 col-lg-10"><input type="text" class="form-control" autofocus name="key" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2 col-sm-2 col-lg-2">Comsumer Secret</div>
                        <div class="col-md-10 col-sm-10 col-lg-10"><input type="text" class="form-control" autofocus name="secret" required></div>
                    </div>

                    <button class="btn btn-primary btn-block">Dalej</button>
                </form>
            
            </div>
        </div>
    </div>
</div>
@endsection
