<div class="sm:grid sm:grid-cols-4 sm:gap-2 sm:items-start py-4 px-4 sm:px-6">
    <div class="h-full flex items-center col-span-1">
        <x-input.label label="{{ $label }}" />
    </div>
    <div class="col-span-{{ $cols ?? '2' }}">
        {{ $slot }}
    </div>
</div>
