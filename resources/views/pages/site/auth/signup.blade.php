@extends('layouts.site')
@section('page-title')
الاشتراك
@endsection
@section('main-content')
    @component('components.site.form-card')
        @slot('action')
                {{route('login')}}
        @endslot

        @slot('method')
                POST
        @endslot
        @slot('inputs')
            
        @endslot
    @endcomponent
@endsection