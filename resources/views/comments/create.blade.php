<form method="post"
      action="{{ route('comment.store') }}"
      class="w-full sm:max-w-2xl">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div class="mt-10">
        <h3 class="text-xl">White your comment</h3>
        <label for="large-input" class="block mb-2 text-sm font-medium">Nickname</label>
        <input type="text"
               id="large-input"
               name="nickname"
               placeholder="Nickname"
               value="{{ old('nickname') }}"
               class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 @error('title') border-b-2 border-red-500  @enderror">
        @error('nickname')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
               {{  $message }}
           </span>
        @enderror
    </div>
    <div class="mt-2">
        <label for="large-input" class="block mb-2 text-sm font-medium">X Twitter</label>
        <input type="text"
               id="large-input"
               name="x_twitter"
               placeholder="url"
               value="{{ old('x_twitter') }}"
               class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 @error('title') border-b-2 border-red-500  @enderror">
        @error('x_twitter')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
               {{  $message }}
           </span>
        @enderror
    </div>
    <div class="mt-2">
        <label for="message"
               class="block mt-6 mb-2 text-sm font-medium">Comment</label>
        <textarea id="message"
                  name="comment"
                  rows="5"
                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('content') border-b-2 border-red-500  @enderror"
                  placeholder="Write your comment here...">{{ old('content') }}</textarea>
        @error('comment')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
               {{ $message }}
           </span>
        @enderror
    </div>
    <div class="mt-2 flex justify-end">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Publish comment</button>
    </div>
</form>
