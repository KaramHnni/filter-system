@extends('layouts.admin')
@section('page-title')
الرتب
@endsection
@section('main-content')
<div class="flex">
<div class="flex-grow px-8 py-4">
    <div class="w-full mx-auto py-2 bg-white shadow">
    <div class="flex justify-between items-center mx-4">
        @if(session('created'))
            @component('components.alert',['type' => 'success'])
                @slot('message')
                    تمت اضافة الرتبة
                @endslot
            @endcomponent
        @endif
        @if(session('updated'))
            @component('components.alert',['type' => 'success'])
                @slot('message')
                    تم تعديل الرتبة
                @endslot
            @endcomponent
        @endif
        @if(session('activated'))
            @component('components.alert',['type' => 'success'])
                @slot('message')
                        تم تفعيل الرتبة
                @endslot
            @endcomponent
        @endif
        @if(session('desactivated'))
            @component('components.alert',['type' => 'danger'])
                @slot('message')
                        تم توقيف الرتبة
                @endslot
            @endcomponent
        @endif
        @if(session('deleted'))
            @component('components.alert',['type' => 'danger'])
                @slot('message')
                        تم حذف الرتبة
                @endslot
            @endcomponent
        @endif
        <h1 class="text-grey-dark mb-4 ">الرتب</h1>
        <a href="{{route('admin.degrees.create')}}" class="bg-blue-dark text-white px-2 py-2 hover:bg-blue-darker " >
                <i class="fas fa-plus"></i>

        </a>
    </div>
    <form method="GET" action={{url()->current()}} class="my-2 flex justify-around ">
            @foreach(request()->query() as $key =>$value)
    <input type="hidden" name="{{$key}}" value="{{$value}}">
            @endforeach
            <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="البحث"class="bg-white rounded  border border-solid mx-2 px-2 py-2  ">
            <div class="flex justify-around items-center">
                <label for="status" class="block mx-4 ">الحالة</label>
                <select onchange="this.form.submit()" id="status" name="status" class="border border-solid border-blue-dark rounded block">
                    <option value="">الكل</option>
                <option value="active" {{request('status') == 'active'? 'selected' : ''}}>مفعل</option>
                    <option value="inactive" {{request('status') == 'inactive'? 'selected' : ''}}>غير مفعل</option>
                </select>
            </div>
            <div class="flex justify-around items-center">
                    <label for="sort" class="block mx-4 ">ترتيب حسب</label>
                    <select onchange="this.form.submit()" id="sort" name="sort" class="border border-solid border-blue-dark rounded block">
                        <option value="">الكل</option>
                        <option value="latest" {{request('sort') == 'latest'? 'selected' : ''}}>الاحدث</option>
                        <option value="oldest" {{request('sort') == 'oldest'? 'selected' : ''}}>ألاقدم</option>


                        
                    </select>
                </div>
            <input type="submit" value="بحث" class="px-4 py-2 bg-blue-light rounded text-white" >
        </form>
    <div class="bg-grey-lightest">
        
    <table class=" text-right w-full table-collapse">
        <thead class="bg-grey-lighter">
            <tr >
            <th class=" px-4 py-2 ">الرتبة</th>
            <th class=" px-4 py-2">الاختصار</th>
            <th class=" px-4 py-2">الحالة</th>
            <th class="px-4 py-2">الادوات</th>
            <tr>
        </thead>
        <tbody class="bg-grey-lightest">
            @foreach($degrees as $degree)
            <tr>
        <td class="px-4 py-2 border-b border-solid border-grey-light">{{$degree->name}}</td>
        <td class="px-4 py-2 border-b border-solid border-grey-light">{{$degree->abbreviation}}</td>
        <td class="px-4 py-2 border-b border-solid border-grey-light">{{$degree->status_name}}</td>
        <td class="px-4 py-2 border-b border-solid border-grey-light flex justify-between">
            @if($degree->status == 0)
          <a href="{{route('admin.degrees.active', $degree->id )}}" class="text-green-light">تفعيل</a>
            @else

                <a href="{{route('admin.degrees.inactive', $degree->id )}}" class="text-red-light">الغاء</a>

            @endif

        <a href="{{route('admin.degrees.edit' ,  $degree->id  )  }}" class="text-blue-dark">تعديل</a>
        <a href="{{route('admin.degrees.delete' , $degree->id )  }}" class="text-red-light">حذف</a>

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