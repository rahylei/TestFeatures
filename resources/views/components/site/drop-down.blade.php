@props(['active'])
@php
$classes = ($active ?? false)
? ' inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white font-semibold hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-blue-700 focus:border-gray-300 transition';
@endphp

<button id="dropdownDefault" data-dropdown-toggle="dropdown" {{ $attributes->merge(['class' => $classes]) }} type="button">
    {{$name}} 
</button>


<div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
    {{$content}}
</div>
