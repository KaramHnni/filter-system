@extends('layouts.site')
@section('page-title')
الاشتراك
@endsection
@section('main-content')
    @component('components.site.form-card')
        @slot('action')
                {{route('signup')}}
        @endslot
        @slot('method')
                POST
        @endslot
        @slot('inputs')
        <div class="px-4 my-8 flex justify-around ">
            <div class="flex-grow ">
            <label class="font-semibold ml-4 text-center text-blue-darker mb-4 " for="first">الاسم الاول</label>
            <input type="text" name="first" class="border border-grey-light border-solid w-3/5 px-4 py-4 rounded focus:border  focus:border-solid focus:border-blue-light " id="first">
            </div>
            <div class="flex-grow">
            <label class="font-semibold ml-4 text-center text-blue-darker mb-4 " for="last">الاسم العائلي</label>
            <input type="text" name="last" class="border border-grey-light border-solid w-3/5  px-4 py-4 rounded focus:border  focus:border-solid focus:border-blue-light " id="last">
            </div>
        </div>
        <div class="px-4 my-8">
            <label class="font-semibold block text-blue-darker mb-4 " for="place-of-birth">مكان الازدياد</label>
            <select id="place-of-birth" name="place_of_birth" class="focus:border appearence-none focus:border-solid focus:border-blue-light block  rounded w-full px-4 py-4 mb-8 border border-solid">
                <option value=""> اختار مدينتك</option>
                 @foreach($cities as $city)
                <optgroup label="{{$city->name}}"></optgroup>
                @foreach($city->areas as $area)
                         <option value="{{$area->id}}" class="block">{{$area->name}}</option>
                 @endforeach
                 @endforeach
         </select>        
        </div>
        <div class="px-4 my-8">

                <label class="font-semibold ml-4 text-center text-blue-darker mb-4 " for="date_of_birth">تاريخ الازدياد</label>
        <input type="date" name="date_of_birth" class="border border-grey-light border-solid w-3/5 px-4 py-4 rounded focus:border  focus:border-solid focus:border-blue-light " id="date_of_birth">

        </div>
        <div class="px-4 my-8">
                <label class="font-semibold ml-4 text-center text-blue-darker mb-8 " for="gender">الجنس</label>
                <select  id="gender" name="gender" class="focus:border appearence-none focus:border-solid focus:border-blue-light block  rounded w-full px-4 py-4 mb-8 border border-solid">
                    @foreach($genders as $gender)
                    <option value="{{$gender->id}}" class="block">{{$gender->name}}</option>
                    @endforeach
                </select>
         </div>
         <div class="px-4 my-8">
                <label class="font-semibold block text-blue-darker mb-4 " for="institut">الدراسة العليا</label>
                <select id="institut" name="institut" class="focus:border appearence-none focus:border-solid focus:border-blue-light block  rounded w-full px-4 py-4 mb-8 border border-solid">
                    <option value="">اختار مكان دراستك العليا</option>
                     @foreach($instituts as $institut)
                             <option value="{{$institut->id}}" class="block">{{$institut->name}}</option>
                     @endforeach
             </select>        
            </div>
            <div class="px-4 my-8">
                    <label class="font-semibold block text-blue-darker mb-4 " for="degree">الرتبة</label>
                    <select id="degree" name="degree" class="focus:border appearence-none focus:border-solid focus:border-blue-light block  rounded w-full px-4 py-4 mb-8 border border-solid">
                        <option value="">اختار رتبتك</option>
                         @foreach($degrees as $degree)
                                 <option value="{{$degree->id}}" class="block">{{$degree->name}}</option>
                         @endforeach
                 </select>        
                </div>
                <div class="px-4 my-8">
                        <label class="font-semibold block text-blue-darker mb-4 " for="occupation">الوظيفة</label>
                        <select id="occupation" name="occupation" class="focus:border appearence-none focus:border-solid focus:border-blue-light block  rounded w-full px-4 py-4 mb-8 border border-solid">
                            <option value="">اختار وظيفتك</option>
                             @foreach($occupations as $occupation)
                                     <option value="{{$occupation->id}}" class="block">{{$occupation->name}}</option>
                             @endforeach
                     </select>        
                    </div>
                    <div class="px-4 my-8">
                            <label class="font-semibold block text-blue-darker mb-4 " for="speciality">التخصص</label>
                            <select id="speciality" name="option" class="focus:border appearence-none focus:border-solid focus:border-blue-light block  rounded w-full px-4 py-4 mb-8 border border-solid">
                                <option value=""> اختار تخصصك</option>
                                 @foreach($specialities as $speciality)
                                <optgroup label="{{$speciality->name}}"></optgroup>
                                @foreach($speciality->options as $option)
                                         <option value="{{$option->id}}" class="block">{{$option->name}}</option>
                                 @endforeach
                                 @endforeach
                         </select>        
                        </div>
                        <div class="px-4 mb-8">
                                <label class="font-semibold block  text-blue-darker mb-4 " for="name">اسم المستخدم</label>
                                <input type="text" name="name" class="border border-grey-light border-solid w-4/5  mx-auto px-4 py-4 rounded " id="name">
                            </div>
                            
                        <div class="px-4 my-8">
                                <label class="font-semibold block text-blue-darker mb-4 " for="email">البريد الالكتروني</label>
                                <input type="text" name="email" class="border border-grey-light border-solid w-4/5 mx-auto px-4 py-4 rounded " id="email">
                            </div>
                            <div class="px-4 my-8">
                                 <label class="font-semibold block  text-blue-darker mb-4 " for="password">كلمة المرور</label>
                                 <input type="password" name="password" class="border border-grey-light border-solid w-4/5  mx-auto px-4 py-4 rounded" id="password">
                             </div>
                        <div class="px-4 my-8">
                                <input type="submit" class="bg-blue-dark text-white  block mx-auto px-8 py-2 rounded" value="اشتراك">
                            </div>
        @endslot
    @endcomponent
@endsection