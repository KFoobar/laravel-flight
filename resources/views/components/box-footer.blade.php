<section {{ $attributes->merge(['class' => 'flex flex-row-reverse items-center justify-between bg-gray-50 dark:bg-gray-900 border-t dark:border-gray-700 py-4 px-6']) }}>
    {{ $slot ?? null }}
</section>
