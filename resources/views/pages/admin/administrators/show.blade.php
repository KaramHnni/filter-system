@extends('layouts.admin')

@section('page-title')
المدراء
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow">

    @foreach($administrators as $admin)

       <p> {{$admin}} </p>

    @endforeach
</div>
@component('components.admin.sidebar-menu')
@endcomponent

</div>

@endsection