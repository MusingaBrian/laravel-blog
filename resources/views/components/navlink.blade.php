@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'active' : '' }}mx-2">{{ $slot }}</a>