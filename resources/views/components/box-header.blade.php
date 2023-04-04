<section {{ $attributes->merge(['class' => 'border-b dark:border-gray-700 py-6 px-6']) }}>
    {{ $slot ?? null }}
</section>
