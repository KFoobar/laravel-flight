<tr>
    <td colspan="100%">
        @if ($this->items->hasPages())
            <div class="text-center">
                Showing {{ $this->items->count() }} rows
            </div>
        @else
            <div class="text-center">
                Showing {{ $this->items->count() }} rows
            </div>
        @endif
    </td>
</tr>
