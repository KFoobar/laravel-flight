<div class="mt-12 pt-12 md:flex md:items-center md:justify-between border-t border-gray-200">
    <div class="flex justify-center space-x-6 md:order-2">
        {{ $slot ?? null }}
    </div>
    <div class="mt-8 md:order-1 md:mt-0">
        <p class="text-center text-xs leading-5 text-gray-500">
            &copy; {{ date('Y') }} {{ config('flight.company') }}. All rights reserved.
        </p>
    </div>
</div>
