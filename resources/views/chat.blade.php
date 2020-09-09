@extends('layouts.app')
@section('content')
 
 
        <div class="col-md-6 pull-right ">
            <div class="panel panel-danger">
                <div class="panel-heading">Chats</div>
                    <div class="panel-body">
                        <chat-messages :messages="messages"></chat-messages>
                    </div>
                    <div class="panel-footer">
                        <chat-form
                            v-on:messagesent="addMessage"
                            :user="{{ Auth::user() }}"
                        ></chat-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection