@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Welcome</h2>
            </div>
        </div>
        <div class="row" v-for="message in messages" >
            <div class="col-lg-12">
                <strong>New file is added: @{{message}}</strong>
            </div>
        </div>
    </div>
@endsection
