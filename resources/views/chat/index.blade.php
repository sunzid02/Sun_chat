@extends('layouts.app')

@section('content')
       <div class="container">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-heading">
                        <h1>List of Friends</h1><hr>
                    </div>


                    @forelse ($friends as $friend)

                            <a href="{{ route('chat.show', $friend->id) }}" class="panel"> 
                               <ul class="list-group">
                                   <li class="list-group-item"> {{ $friend->name}} </li>

                               </ul>

                            </a>                        

                    @empty
                        <div class="panel-block">
                            You don't have any friends
                        </div>
                    @endforelse



                </div>
            </div>
        </div> 
@endsection