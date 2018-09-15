@extends('layouts.admin')
@section('page-title')
المدن
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow px-8 py-4">
    <h1 class="text-grey-dark text-center">اضافة مدينة</h1>

    @component('components.admin.form-card')

    @slot('action')
        {{route('admin.cities.create')}}
    @endslot
    @slot('method')
    POST
    @endslot
    @slot('inputs')
    <div class="px-4 mb-8">
       <label class="font-semibold block text-center text-blue-darker mb-4 " for="name">الاسم</label>
       <input type="text" name="name" class="border border-grey-light border-solid w-4/5 block mx-auto px-4 py-4 rounded " id="name">
   </div>
   <div class="px-4 mb-8">
        <label class="font-semibold block text-center text-blue-darker mb-4 " for="slug">الشعار</label>
        <input type="text" name="slug" class="border border-grey-light border-solid w-4/5 block mx-auto px-4 py-4 rounded" id="slug">
    </div>
    <div class="px-4 mb-8">
            <label class="font-semibold block text-center text-blue-darker mb-4 " for="status">الحالة</label>
            <input type="radio" name="status" value="1" class="">فعال<br/>
            <input type="radio" name="status" value="0" class="">غير فعال<br/>
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
