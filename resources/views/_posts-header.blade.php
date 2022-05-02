<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
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
        </div>
        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something" class="bg-transparent placeholder-black font-semibold text-sm" value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>