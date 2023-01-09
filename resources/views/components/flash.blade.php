@if(session()->has('success'))
<div
x-data="{show: true}"
x-init="setTimeout(() => show = false, 4000)"
x-show="show" x-transition
class="bg-blue-500 bottom-3 fixed px-4 py-2 right-3 rounded-3xl text-white">
    <p> {{ session()->get('success') }}  </p>
</div>
@endif
