@props([ 'active' => false])

<a 
    class="{{ $active ?  'text-gray-500'  : 'text-gray-500 hover:bg-gray-600 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium "
    aria-current="{{ $active ? 'page' : 'false' }}"
 {{$attributes}}
>
    {{ $slot }}
</a>