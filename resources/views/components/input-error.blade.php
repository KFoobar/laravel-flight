@if (!empty($for))
    @error($for)
        <span {{ $attributes->merge(['class' => 'font-semibold text-xs text-red-500 mt-1']) }}>
            {{ $message }}
        </span>
    @enderror
@endif
