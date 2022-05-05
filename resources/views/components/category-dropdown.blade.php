<x-dropdown>
    <x-slot name="trigger">
    <button class="category__btn appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold lg:inline-flex lg:w-32">{{isset($currentCategory)? ucwords($currentCategory->name) : 'Category'}}
        <x-icon name="down-arrow" />
    </button>
    </x-slot>
    <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>
    @foreach ($categories as $category)
    <x-dropdown-item href="/?category={{$category->slug}}" :active="isset($currentCategory) && $currentCategory->is($category)">{{$category->name}}</x-dropdown-item>
    @endforeach
</x-dropdown>