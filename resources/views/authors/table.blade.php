<x-table
    :tableHeaders="['Title', 'Content','Created at']">
    <x-slot name="body">
        @foreach(Auth::user()->author->posts as $post)
            <tr class="sm:text-left odd:bg-white even:bg-gray-50 border-b border-gray-400 hover:bg-gray-300">
                <td class="px-6 py-4">{{ $post->title }}</td>
                <td class="px-6 py-4">{{ $post->content }}</td>
                <td class="px-6 py-4">{{ $post->created_at }}</td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-table>
