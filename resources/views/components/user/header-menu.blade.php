<div class="bg-white border-b border-solid border-grey-light flex justify-between items-center px-8 py-4"> 
        <a>الشعار هنا </a>
        <div class="flex flex-grow justify-center">
         <div class="relative ">
             <a href="#" class="  main-header-dropdown">المستخدمين</a>
             <div class="absolute text-center shadow pin-r hidden main-dropdown-list py-2 bg-white w-full">
                 <a class="block py-4 hover:bg-blue-light hover:text-white" href="#">المستخدمين حسب المدينة</a>
                 <a class="block py-4 hover:bg-blue-light hover:text-white" href="#">المستخدمين حسب التخصص</a>
                 <a class="block py-4 hover:bg-blue-light hover:text-white" href="#"> المستخدمين حسب الرتبة</a>
             </div>
         </div>
        </div>
        <div class="flex">
           <a href="#"class="px-4 py-4">{{auth()->user()->name}}</a>
        <a href="{{route('logout')}}" class="px-4 py-4">خروج</a>
        </div>
   </div>