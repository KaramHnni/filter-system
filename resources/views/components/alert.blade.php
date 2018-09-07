@isset($type)

    @switch($type)
            @case('success')
<div class="bg-green-light px-4 py-4 text-white mb-4 rounded ">{{$message}}</div>
            @break

            @case('danger')
<div class="bg-red-light px-4 py-4 text-white mb-4 rounded">{{$message}}</div>
            @break
    @endswitch
@endisset


