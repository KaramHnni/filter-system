<form action="{{$action}}" method="{{$method}}" class="mx-auto w-3/5 py-8 px-4 mt-8 bg-white shadow rounded">
    @csrf
     {{$inputs}}
</form>