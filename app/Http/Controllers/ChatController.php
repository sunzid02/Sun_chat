<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Illuminate\Http\Request;
use App\Friend;

use Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends = Auth::user()->friends();

        return view('chat.index', [
            'friends' => $friends,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request )
    {
        $friendId = $request->id;
        $friend = User::find($friendId);
        
        return view('chat.show',[
            'friend' => $friend,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }

    public function getChat( Request $request )
    {
       $friendId = $request->id; 
       
       ////get all chat data between two users
       $chats = Chat::where( function($query) use ($friendId){
            $query->where('user_id', '=', Auth::user()->id )->where('friend_id', '=', $friendId );
       })->orWhere(  function($query) use ($friendId)
       {
            $query->where('user_id', '=', $friendId )->where('friend_id', '=', Auth::user()->id );

       })->get();

    //    $chats = "zia";

       return $chats;
    }
}
