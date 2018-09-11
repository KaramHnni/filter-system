<div class="bg-white border-b border-solid border-grey-light flex justify-between items-center px-8 py-4"> 
        <a>الشعار هنا </a>
        <div class="flex">
           <a href="#"class="px-4 py-4">{{auth()->user()->name}}</a>
        <a href="{{route('logout')}}" class="px-4 py-4">خروج</a>
        </div>
   </div>