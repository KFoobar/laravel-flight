<div class="flex justify-center">
    <div x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
        x-on:keydown.escape.prevent.stop="close($refs.button)"
        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
        x-id="['dropdown-button']"
        class="relative">
        <button x-ref="button" x-on:click="toggle()" type="button" class="flex items-center gap-1 text-gray-300 hover:bg-gray-700 hover:text-white p-1 rounded-full text-sm font-medium">
            {{ $slot ?? null }}
        </button>
        <div class="absolute right-0 px-5 py-3 w-60 rounded bg-white shadow-md border border-gray-200"
            x-ref="panel"
            x-show="open"
            x-transition.origin.top.left
            x-on:click.outside="close($refs.button)"
            :id="$id('dropdown-button')"
            style="display: none;">
            {{ $items ?? null }}
        </div>
    </div>
</div>
