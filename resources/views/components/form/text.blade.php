@props(['name', 'type'=>'text'])
<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs" for="{{$name}}">
        {{ucwords($name)}}
    </label>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" value="{{old($name)}}" required class="bg-lavender text-dark-teal p-2 w-full">
    @error($name)
        <p class="text-red text-xs mt-1">{{$message}}</p>
    @enderror
</div>