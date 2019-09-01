@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-3 profile">
                    <div class="card">
                            <div class="card-body">
                                <img class="rounded-circle" src="" height="170vh" width="170vh" alt="Avatar">
                            <a href="{{ url('profile') }}"><h3>{{$user->name}}</h3></a>
                                 
                                 <br>
                                 <br>
                                <div class="container text-center">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href=following><h3></h3></a>
                                        <p><b>Following</b></p>
                                    </div>
                
                                    <div class="col-md-6">
                                        <a href=followers><h3></h3></a>
                                        <p><b>Followers</b></p>
                
                                    </div>
                                </div>
                                <div>
                                <h4>Words Learned:  </h4>
                                
                                </div>
                                </div>
                                 <br>
                                 <br>
                                <p>I study because...</p>
                                <h2>Why:</h2>
                                    <p></p>
                                    
                                <h2>How:</h2>
                                    <p></p>
                                    
                                <h2>What:</h2>
                                    <p></p>

                            </div>
                        </div>
                
            </div>
            <div class="col-sm-9">
                ddsds
            </div>
        </div>
    </div>

@endsection
