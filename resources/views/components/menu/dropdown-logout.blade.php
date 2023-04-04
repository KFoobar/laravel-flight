<form method="POST" action="{{ $url ?? null }}">
    @csrf
    <button type="submit" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-0 py-1 text-left text-sm hover:text-blue-500 disabled:text-gray-500">
        {{ $title }}
    </button>
</form>
