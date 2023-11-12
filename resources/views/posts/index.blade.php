<x-app-layout>
    <div class="py-10">
        <div class="flex justify-center">
            <h2 class="text-4xl">Welcome to the post community</h2>
        </div>
        <div class="container mx-auto mt-10">
            <div class="grid grid-cols-12 gap-6">
                @foreach($posts as $post)
                    <div class="col-span-12 md:col-span-6 lg:col-span-4 border-2">
                    <a class="block group" href="">
                        <div
                            class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal transition group-hover:scale-105">
                            <div class="mb-8">
                                <p class="text-sm text-gray-600 flex items-center">
                                    👀
                                    Did you know?
                                </p>
                                <div class="text-gray-900 font-bold text-xl mb-2">
                                    {{ $post->title }}
                                </div>
                                <p class="text-gray-700 text-base">
                                    {{ Str::limit(strip_tags($post->content), 100) }}
                                </p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full mr-4" src="https://ui-avatars.com/api/?name={{ $post->author->user->name }}"
                                     alt="Avatar of Jonathan Reinink">
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none"> {{ $post->author->user->name }}</p>
                                    <p class="text-gray-600"> {{ $post->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
