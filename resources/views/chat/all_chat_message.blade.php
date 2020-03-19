@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
            <all-chat-message
                :chats="{{ $chats }}"
        
            >        
            </all-chat-message>


        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
