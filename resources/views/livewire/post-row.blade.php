<tr class="bg-white border-b @if($post->deleted_at) dark:bg-gray-700 @else dark:bg-gray-800 @endif  dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{ $post->title }}
    </th>
    <td class="px-6 py-4">
        {{ str($post->content)->words(5) }}
    </td>
    <td class="px-6 py-4">
        @unless ($post->deleted_at)
            <button 
                type="button" 
                wire:click="trash"
                class="text-sm leading-6 px-2 rounded-sm text-red-100 bg-red-600 hover:bg-red-500"
                wire:confirm="Are you sure you want to Trash this post?"
            >
                Trash
        </button>            
        @endunless
        <button 
            type="button" 
            wire:click="$parent.forceDelete({{ $post->id }})"
            class="text-sm leading-6 px-2 rounded-sm text-red-100 bg-red-600 hover:bg-red-500"
            wire:confirm="Are you sure you want to delete this post?"
        >
            Delete
        </button>
    </td>
</tr>       