@extends('layouts.admin')
@section('page-title')
التسجيل
@endsection
@section('main-content')
    @component('components.admin.form-card')
        @slot('action')
                {{route('admin.login')}}
        @endslot

        @slot('method')
                POST
        @endslot
        @slot('inputs')
            @if(session('credentials'))

                @component('components.alert',['type' => 'danger'])
                        @slot('message')
                                    بياناتكم لا تتطابق مع سجلاتنا
                        @endslot
                @endcomponent

            @endif
        <div class="px-4 mb-8">
           <label class="font-semibold block text-center text-blue-darker mb-4 " for="email">البريد الالكتروني</label>
           <input type="text" name="email" class="border border-grey-light border-solid w-4/5 block mx-auto px-4 py-4 rounded " id="email">
       </div>
       <div class="px-4 mb-8">
            <label class="font-semibold block text-center text-blue-darker mb-4 " for="password">كلمة المرور</label>
            <input type="password" name="password" class="border border-grey-light border-solid w-4/5 block mx-auto px-4 py-4 rounded" id="password">
        </div>
        <div class="px-4 mb-8">
                <input type="submit" class="bg-blue-dark text-white  block mx-auto px-8 py-2 rounded" value="دخول">
            </div>
       @endslot
    @endcomponent
@endsection