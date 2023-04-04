@if (!empty($errors))
    @error($name)
        <span class="font-semibold text-sm text-red-500">
            {{ $message }}
        </span>
    @enderror
@endif
