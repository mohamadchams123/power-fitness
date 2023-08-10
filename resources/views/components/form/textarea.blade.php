@props(['name','placeholder'=>''])
<textarea required name="{{$name}}" rows="3" class="w-full text-sm focus:outline-none focus:ring bg-lavender text-dark-teal" placeholder="{{$placeholder}}"></textarea>
@error($name)
    <span class="text-xs text-red-500">{{$message}}</span>
@enderror