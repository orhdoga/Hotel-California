@extends('layouts.app')

@section('content')

<div class="container">

    <div class="app">
        <input type="text" v-model="message">
        <p>Message: @{{ message }}</p>
    </div>

</div>

@endsection