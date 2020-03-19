@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br>
                    <a href="{{ route('chat.index') }}">
                        <h4> Go to Chat </h4>
                    </a>

                    
                    <br>
                    <a href="{{ route('chat.allChatMessage') }}">
                        <h4> All chat messages </h4>
                    </a>

                    <br>
                    <a href="{{ route('product.create') }}">
                        <h4> Add Product </h4>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
