@extends('layouts.admin')
@section('page-title')
المدن
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow">
    @foreach($cities as $city)

       <p> {{$city}} </p>

    @endforeach
</div>
@component('components.admin.sidebar-menu')
@endcomponent

</div>

@endsection