@isset($type)

    @switch($type)
            @case('success')
<div   class=" flex justify-between items-center w-1/5 bg-green-light px-4 py-4 mb-4 rounded hover:hidden">
    <p class="text-white">{{$message}}</p>
</div>
            @break
            @case('danger')
<div class="bg-red-light px-4 py-4 text-white mb-4 rounded">{{$message}}</div>
            @break
    @endswitch
@endisset


