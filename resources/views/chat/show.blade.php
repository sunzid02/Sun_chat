@extends('layouts.app')

@section('content')
       <div class="container">
            <div class="col is-8 is-offset-2">
                <div class="panel">
                    <div class="panel-heading">
                        {{ $friend->name }}

                        <div class="contain is-pulled-right">
                            <a href="{{ route('chat.index') }}" class="is-link"><i class="fa-arrow-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
@endsection