<div class="w-1/5" style="direction:ltr">
    <a href="{{route('admin.dashboard')}}" class="block w-full text-center py-4 {{ request()->is('admin/dashboard') ? 'bg-white text-black' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">dashboard</a>
<a href="{{route('admin.users')}}" class=" block w-full text-center py-4  {{ request()->is('admin/users') ? 'bg-white text-black' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">Users</a>
    <a href="{{route('admin.administrators')}}" class="block w-full text-center py-4  {{ request()->is('admin/administrators') ? 'bg-white text-blue-light' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">Administrators</a>
    <a href="{{route('admin.cities')}}" class="block w-full text-center py-4 {{ request()->is('admin/cities') ? 'bg-white text-blue-light' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">Cities</a>
    <a class="block w-full text-center py-4  {{ request()->is('admin/areas') ? 'bg-white text-black' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">Areas</a>
    <a class="block w-full text-center py-4 {{ request()->is('admin/genders') ? 'bg-white text-black' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">Genders</a>
    <a class="block w-full text-center py-4 {{ request()->is('admin/instituts') ? 'bg-white text-black' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">Instituts</a>
    <a class="block w-full text-center py-4 {{ request()->is('admin/occupations') ? 'bg-white text-black' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">Occupations</a>
    <a class="block w-full text-center py-4 {{ request()->is('admin/specialities') ? 'bg-white text-black' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">Specialities</a>
    <a class="block w-full text-center py-4 {{ request()->is('admin/options') ? 'bg-white text-black' : 'bg-blue-dark text-white' }} font-semibold border-b border-solid border-grey-light">Options</a>




</div>