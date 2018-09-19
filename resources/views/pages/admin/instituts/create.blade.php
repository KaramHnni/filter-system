@extends('layouts.admin')
@section('page-title')
الجامعات
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow px-8 py-4">
    <h1 class="text-grey-dark text-center">اضافة جامعة</h1>

    @component('components.admin.form-card')

    @slot('action')
        {{route('admin.instituts.create')}}
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
    <label class="font-semibold block text-blue-darker mb-4 " for="city">المدينة</label>
            <select id="city" name="city_id" class="focus:border appearence-none focus:border-solid focus:border-blue-light block  rounded w-full px-4 py-4 mb-8 border border-solid">
                <option value=""> المدينة</option>
                 @foreach($cities as $city)
                
                         <option value="{{$city->id}}" class="block">{{$city->name}}</option>
                 
                 @endforeach
         </select> 
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
