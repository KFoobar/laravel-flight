<div x-data="{ value: @entangle($attributes->wire('model')) }">
    <button x-ref="toggle" x-on:click="value = ! value"
        :class="value ? 'bg-blue-500' : 'bg-gray-200'"
        class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        <span :class="value ? 'translate-x-5' : 'btranslate-x-0'" class=" pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" aria-hidden="true"></span>
    </button>
</div>
