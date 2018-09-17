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
    <form method="GET" action={{url()->current()}} class="my-2 flex justify-around ">
            @foreach(request()->query() as $key =>$value)
    <input type="hidden" name="{{$key}}" value="{{$value}}">
            @endforeach
            <input type="text" name="keyword" placeholder="البحث"class="bg-white rounded  border border-solid mx-2 px-2 py-2  ">
            <div class="flex justify-around items-center">
                <label for="status" class="block mx-4 ">الحالة</label>
                <select onchange="this.form.submit()" id="status" name="status" class="border border-solid border-blue-dark rounded block">
                    <option value="0">الكل</option>
                    <option value="active">مفعل</option>
                    <option value="inactive">غير مفعل</option>
                </select>
            </div>
            <div class="flex justify-around items-center">
                    <label for="sort" class="block mx-4 ">ترتيب حسب</label>
                    <select onchange="this.form.submit()" id="sort" name="sort" class="border border-solid border-blue-dark rounded block">
                        <option value="0">الكل</option>
                        <option value="latest">الاحدث</option>
                        <option value="oldest">ألاقدم</option>


                        
                    </select>
                </div>
            <input type="submit" value="بحث" class="px-4 py-2 bg-blue-light rounded text-white" >
        </form>
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
        <td class="px-4 py-2 border-b border-solid border-grey-light"><a href="{{route('admin.cities.areas' , $city->id)}}">{{$city->areas->count()}}</a></td>
        <td class="px-4 py-2 border-b border-solid border-grey-light flex justify-between">
            @if($city->status == 0)
          <a href="{{route('admin.cities.active', $city->id )}}" class="text-green-light">تفعيل</a>
            @else

                <a href="{{route('admin.cities.inactive', $city->id )}}" class="text-red-light">الغاء</a>

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