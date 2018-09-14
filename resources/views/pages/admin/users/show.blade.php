@extends('layouts.admin')
@section('page-title')
المستخدمين
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow">
    @foreach($users as $user)

       <p> {{$user}} </p>

    @endforeach
</div>
@component('components.admin.sidebar-menu')
@endcomponent

</div>

@endsection