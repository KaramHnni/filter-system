@extends('layouts.admin')
@section('page-title')
لوحة-التحكم
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow"></div>
@component('components.admin.sidebar-menu')
@endcomponent

</div>

@endsection