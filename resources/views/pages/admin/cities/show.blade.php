@extends('layouts.admin')
@section('page-title')
المدن
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow px-8 py-4">
    <div class="w-full mx-auto py-2 bg-white shadow">
    <div class="flex justify-between items-center mx-4">
        <h1 class="text-grey-dark mb-4 ">المدن</h1>
        <a href="#" class="bg-blue-dark text-white px-2 py-2 hover:bg-blue-darker " >
                <i class="fas fa-plus"></i>

        </a>
    </div>
    <div class="bg-grey-lightest">
    <table class=" text-right w-full table-collapse">
        <thead class="bg-grey-lighter">
            <tr >
            <th class=" px-4 py-2 ">المدينة</th>
            <th class=" px-4 py-2">الحالة</th>
            <th class=" px-4 py-2">المناطق</th>
            <th class="px-4 py-2">الادوات</th>
            <tr>
        </thead>
        <tbody class="bg-grey-lightest">
            @foreach($cities as $city)
            <tr>
        <td class="px-4 py-2 border-b border-solid border-grey-light">{{$city->name}} {{$city->slug}}</td>
        <td class="px-4 py-2 border-b border-solid border-grey-light">{{$city->status_name}}</td>
        <td class="px-4 py-2 border-b border-solid border-grey-light">{{$city->areas->count()}}</td>
        <td class="px-4 py-2 border-b border-solid border-grey-light flex justify-between">
            @if($city->status == 0)
                    <a href="#" class="text-green-light">تفعيل</a>
            @else

                <a href="#" class="text-red-light">الغاء</a>

            @endif

            <a href="#" class="text-blue-dark">تعديل</a>
            <a href="#" class="text-red-light">حذف</a>

        </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
@component('components.admin.sidebar-menu')
@endcomponent

</div>

@endsection