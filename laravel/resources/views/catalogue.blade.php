@extends('layouts.app')

@section('content')

    <div id="tab1">

        @foreach($users as $user)

            <div id="tab">
                @if(\Illuminate\Support\Facades\Auth::user()->type == 1)
                    <form action="{{ route('update') }}" method="post">
                <h5>Prénom : </h5>
                    <input type="text" placeholder="{{$user->fname}}" id="fname" name="fname" value="{{$user->fname}}">
                <h5>Nom : </h5>
                    <input type="text" placeholder="{{$user->lname}}" id="lname" name="lname" value="{{$user->lname}}">
                <h5>Email : </h5>
                    <input type="text" placeholder="{{$user->email}}" id="email" name="email" value="{{$user->email}}">
                <h5>Created : {{$user->created_at}}</h5>
                @if($user->type == 1)
                    <h5>Salaire : {{$user->salaire}} </h5>
                @endif

                        @csrf
                        <input value="{{$user->id}}" name="id" id="id" hidden type="number">
                        <button type="submit">Modifier</button>
                    </form>

                    <form action="{{ route('delete') }}" method="post">
                        @csrf
                        <input value="{{$user->id}}" name="id" id="id" hidden type="number">
                        <button type="submit">Suprimer</button>
                    </form>

                @else
                    <h5>Prénom : {{$user->fname}}</h5>
                    <h5>Nom : {{$user->lname}}</h5>
                    <h5>Email : {{$user->email}} </h5>
                    <h5>Created : {{$user->created_at}}</h5>
                    @if($user->type == 1)
                        <h5>Salaire : {{$user->salaire}} </h5>
                    @endif
                @endif
            </div>

            @endforeach
    </div>

@endsection