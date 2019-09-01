@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                @if ($errors->has('social'))
                <div class="alert alert-warning">
                    {{ $errors->first('social') }}
                </div>
                @endif
                
                <div class="col-md-8 col-md-offset-4">
                    <a class="btn btn-default" href="auth/login/line">
                        Add Line Login
                    </a>             
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
