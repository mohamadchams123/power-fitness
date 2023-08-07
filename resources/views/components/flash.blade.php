@if (session()->has('success'))
    <div x-data="{show:true}" x-init="setTimeout(()=>show=false, 4000)" x-show="show" class="fixed bg-lavender text-dark-teal py-2 px-4 rounded-xl right-3 mt-5 text-sm">
        <p>{{session('success')}}</p>
    </div>
@endif