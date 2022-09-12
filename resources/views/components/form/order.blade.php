@props(['link'])
<div class="flex justify-end  border-t border-blue-800  mt-6 pt-6">
<a href="/{{ $link }}" class="bg-blue-800 text-white  uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
{{ $slot }}
</a> 
