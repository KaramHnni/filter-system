<div class="bg-white border-b border-solid border-grey-light flex justify-between items-center px-8 py-4"> 
        <a>الشعار هنا </a>
        <div class="flex">
            @guest
            <a href="{{route('login')}}"class="px-4 py-4">التسجيل</a>
            <a href="{{route('signup')}}" class="px-4 py-4">الاشتراك</a> 
            @endguest
            @auth

            <a href="#"class="px-4 py-4">{{auth('admin')->user()->name}}</a>
        <a href="{{route('admin.logout')}}" class="px-4 py-4">خروج</a>
            @endauth
        </div>
   </div>