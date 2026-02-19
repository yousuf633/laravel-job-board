@props(['href', 'active' => false, 'color' => null])

@php
    $current = "bg-gray-900 text-white";
    $default = "text-gray-300 hover:bg-white/5 hover:text-white";
@endphp

<a href="{{ $href }}" 
   {{-- هنا نتحقق: إذا أرسلنا لون نستخدمه، وإذا لم نرسل نستخدم الكلاسات الافتراضية --}}
   class="block rounded-md px-3 py-2 text-base font-medium {{ $active ? $current : $default }}" 
   style="{{ $color ? "background-color: $color !important;" : "" }}"
   {{ $attributes }}>
   {{ $slot }}
</a>