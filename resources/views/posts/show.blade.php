<x-app-layout>
    <div class="py-10">
        <div class="container mx-auto">
            <div class="mt-10">
                <h2 class="uppercase text-6xl"> {{ $post->title }}</h2>
                <p class="text-3xl">By: {{ $post->author->user->name }}</p>
                <div class="mt-10 wysiwyg">
                    {!! $post->content !!}
                </div>
            </div>
            <div class="mt-10">
                <h3 class="text-2xl">Comments:</h3>
                @foreach($post->comments as $comment)
                    <div class="mt-2 border-t-2">
                        <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full mr-4" src="https://ui-avatars.com/api/?name={{  $comment->nickname }}"
                                 alt="Avatar of {{  $comment->nickname }}">
                            <div class="">
                                <a  class="text-blue-500 font-bold" href="{{ $comment->x_twitter }}" target="_blank"> {{ $comment->nickname }}</a>:
                                <div class="">
                                    {{ $comment->comment }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @include('comments.create')
            </div>
        </div>
    </div>
</x-app-layout>
