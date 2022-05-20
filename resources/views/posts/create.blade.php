<x-layout>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <div class="max-w-sm mx-auto">
            <form id="register" method="POST" enctype="multipart/form-data">
                @csrf

                <x-form.input name='title' class="js-title"/>
                <x-form.input name='slug' class="js-slug"/>
                <x-form.input name='thumbnail' type='file'/>
                <x-form.textarea name='excerpt' />
                <x-form.textarea name='body' />

                <div class="mb-6">
                    <x-form.label name='category' />

                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') === $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    <x-form.error name='category' />
                </div>

                <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Publish
                        </button>
            </form>
        </div>
    </section>
</x-layout>