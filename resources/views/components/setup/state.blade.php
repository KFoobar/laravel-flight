@if ($status === $active && $failed)
    <x-icon.square-stop />
@elseif ($status === $active)
   <x-icon.square-pending />
@elseif ($status < $active)
    <x-icon.square-todo />
@elseif ($status > $active)
    <x-icon.square-done />
@endif
<div class="block">
    <div class="text-md text-gray-700 font-bold">
        {{ $title ?? '-' }}
    </div>
    @if (!empty($description))
        <div class="text-xs text-gray-400">
            {{ $description ?? null }}
        </div>
    @endif
</div>
