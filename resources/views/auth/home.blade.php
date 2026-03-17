@use('Illuminate\Support\Facades\Auth')
@extends('shared.app')

@section('title') Home page @endsection

@section('menu')
    <li class="nav-item"><a href="" class="nav-link">Home</a></li>
    
    @if (Auth::user())
    <li class="nav-item">
        <form method="POST" action="/logout">
        @csrf
            <button type="submit" class="nav-link">Logout</button>
        </form>
    </li>
    @endif
    
@endsection

@section('content')
<div>
    <h2>Formulaire</h2>
    <br />
    <form method="POST" action="page_secrete">
        @csrf
        Indiquer votre age : 
        <input type="text" id="age" name="age" value="{{ old('age') }}" class="form-control" /><br />
        <button type="submit" class="btn btn-primary">Ouvrir la page secrete</button>
    </form>
</div>
@endsection