<option value="{{ $value ?? null }}" {{ !empty($selected) ? 'selected' : null }}>
    {{ $slot ?? null }}
</option>
