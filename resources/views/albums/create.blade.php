<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form method="POST" action="/albums/store">@csrf
                        <div class="mt-8 space-y-6">
                          <div>
                            <label for="title" class="text-sm text-gray-700 block mb-1 font-medium">Title</label>
                            <input type="text" name="title" id="title" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Title of album" />
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    
                          <div>
                            <label for="body" class="text-sm text-gray-700 block mb-1 font-medium">Body</label>
                            <textarea name="body" id="body" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"></textarea>
                            @error('body')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    
                          <div>
                            <label for="category" class="text-sm text-gray-700 block mb-1 font-medium">Category</label>
                            <select type="text" name="category" id="category" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
                                <option value="">-----------------</option>
                                @foreach ($category_contents as $content_type)
                                    <option value="{{ $content_type->id }}">{{ $content_type->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>

                        <div>
                            <label for="photos" class="text-sm text-gray-700 block mb-1 font-medium">Images</label>
                            <input type="file" name="photos[]" id="photos" multiple class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
                            @error('photos')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="space-x-4 mt-8">
                          <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                          <!-- Secondary -->
                          <button type="button" class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>