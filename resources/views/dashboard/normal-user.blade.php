@extends('layouts.master')
@section('head_title', 'User')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4" style="margin-top: 100px; margin-bottom: 20px;">
            <h1 class="text-center">Welcome to User Page</h1>
            <h4 class="text-center">{{ $user->profile->full_name }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <p><span class="text-danger">Note:</span>
            This is just a simple normal user page.</p>
        </div>
    </div>
</div>
@endsection
