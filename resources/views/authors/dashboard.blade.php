<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome')  }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div>
                            <h3>My posts</h3>
                        </div>
                        <div class="">
                            <x-cta content="New post" :url="route('posts.create')"></x-cta>
                        </div>
                    </div>
                    <div class="mt-8 relative overflow-x-auto shadow-md sm:rounded-lg">
                        @include('authors.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
