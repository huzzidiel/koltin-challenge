<x-app-layout>
    <div class="flex justify-center mt-16">
        <form method="post"
              action="{{ route('post.store') }}"
              class="w-full sm:max-w-2xl">
            @csrf
            <div class="">
                <label for="large-input" class="block mb-2 text-sm font-medium">Title</label>
                <input type="text"
                       id="large-input"
                       name="title"
                       placeholder="Blog title"
                       value="{{ old('title') }}"
                       class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 @error('title') border-b-2 border-red-500  @enderror">
                    @error('title')
                       <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                           {{  $message }}
                       </span>
                    @enderror

            </div>
            <div class="mb-6">
                <label for="message"
                       class="block mt-6 mb-2 text-sm font-medium">Content</label>
                <textarea id="message"
                          name="content"
                          rows="20"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('content') border-b-2 border-red-500  @enderror"
                          placeholder="Write your contenet here...">{{ old('content') }}</textarea>
                @error('content')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                           {{ $message }}
                   </span>
                @enderror
            </div>
            <div class="flex justify-end">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Publish post</button>
            </div>
        </form>
    </div>
</x-app-layout>
