@extends('layouts.admin')
@section('page-title')
المدن
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow px-8 py-4">
    <div class="w-full mx-auto py-2 bg-white shadow">
    <div class="flex justify-between items-center mx-4">
        @if(session('created'))
            @component('components.alert',['type' => 'success'])
                @slot('message')
                        تمت اضافة المنطقة
                @endslot
            @endcomponent
        @endif
        @if(session('updated'))
            @component('components.alert',['type' => 'success'])
                @slot('message')
                        تم تعديل المنطقة
                @endslot
            @endcomponent
        @endif
        @if(session('activated'))
            @component('components.alert',['type' => 'success'])
                @slot('message')
                        تم تفعيل المنطقة
                @endslot
            @endcomponent
        @endif
        @if(session('desactivated'))
            @component('components.alert',['type' => 'danger'])
                @slot('message')
                        تم توقيف المنطقة
                @endslot
            @endcomponent
        @endif
        @if(session('deleted'))
            @component('components.alert',['type' => 'danger'])
                @slot('message')
                        تم حذف المنطقة
                @endslot
            @endcomponent
        @endif
        <h1 class="text-grey-dark mb-4 ">المدن</h1>
        <a href="{{route('admin.cities.create')}}" class="bg-blue-dark text-white px-2 py-2 hover:bg-blue-darker " >
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
          <a href="{{route('admin.cities.status.active', $city->id )}}" class="text-green-light">تفعيل</a>
            @else

                <a href="{{route('admin.cities.status.inactive', $city->id )}}" class="text-red-light">الغاء</a>

            @endif

        <a href="{{route('admin.cities.edit' ,  $city->id  )  }}" class="text-blue-dark">تعديل</a>
        <a href="{{route('admin.cities.delete' , $city->id )  }}" class="text-red-light">حذف</a>

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