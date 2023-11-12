<table class="w-full text-sm text-left rtl:text-right">
    <thead
        class="text-xs sm:text-left uppercase">
    <tr>
        @foreach($tableHeaders as $header)
            <th scope="col" class="px-6 py-3">
                {{ $header }}
            </th>
        @endforeach
    </tr>
    </thead>

    <tbody>
        {{ $body ?? '' }}
    </tbody>
</table>
