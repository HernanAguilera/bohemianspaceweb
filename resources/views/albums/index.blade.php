<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <a href="/albums/create">Add new Album</a>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @foreach ($albums as $album)
                        {{ $album->id }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>