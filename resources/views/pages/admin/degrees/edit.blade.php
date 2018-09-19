@extends('layouts.admin')
@section('page-title')
تعديل الرتبة
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow px-8 py-4">
    <h1 class="text-grey-dark text-center">تعديل الرتبة</h1>

    @component('components.admin.form-card')

    @slot('action')
        {{route('admin.degrees.edit' ,$degree->id)}}
    @endslot
    @slot('method')
    POST
    @endslot
    @slot('inputs')
    <div class="px-4 mb-8">
       <label class="font-semibold block text-center text-blue-darker mb-4 " for="name">الاسم</label>
    <input type="text" name="name" value="{{$degree->name}}" class="border border-grey-light border-solid w-4/5 block mx-auto px-4 py-4 rounded " id="name">
   </div>
   <div class="px-4 mb-8">
        <label class="font-semibold block text-center text-blue-darker mb-4 " for="abbreviation">ألاختصار</label>
        <input type="text" name="abbreviation" value="{{$degree->abbreviation}}" class="border border-grey-light border-solid w-4/5 block mx-auto px-4 py-4 rounded" id="abbreviation">
    </div>
    <div class="px-4 mb-8">
            <input type="submit" class="bg-blue-dark hover:bg-blue-darker focus:bg-blue-darkest text-white  block mx-auto px-8 py-2 rounded" value="دخول">
        </div>
    @endslot
    @endcomponent

</div>
@component('components.admin.sidebar-menu')
@endcomponent

</div>

@endsection