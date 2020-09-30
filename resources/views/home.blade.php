@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="user-wrapper">
                    <ul class="users">
                        @foreach ($user as $us)
                            <li class="user" id="{{ $us->id }}">
                                {{--will show unread count
                                notification--}}
                                @if($us->unread)
                                    <span class="pending">{{$us->unread}}</span>
                                @endif
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{$us->avatar}}" alt="" class="media-object">
                                    </div>

                                    <div class="media-body">
                                        <p class="name">{{$us->name}}</p>
                                        <p class="email">{{$us->email}}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-8" id="messages">

            </div>
        </div>
    </div>
@endsection
