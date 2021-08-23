@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-blue-51 focus:ring focus:ring-blue-51 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
