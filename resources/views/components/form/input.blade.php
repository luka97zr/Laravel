@props(['name','type'=>'text'])
<div class="mb-6">
    <x-form.label name="{{$name}}"/>

    <input {{$attributes->merge(['class' => 'border border-gray-400 p-2 w-full'])}}
            type="{{$type}}"
            name="{{$name}}"
            id="{{$name}}"
            value="{{ old('$name') }}"
            required
    >
    <x-form.error name="{{$name}}"/>

</div>