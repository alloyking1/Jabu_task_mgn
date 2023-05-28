@props([
    'name',
])


<select name="{{ $name }}" id="" {{ $attributes->merge(['class' => 'w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
    {{$slot}}
</select>