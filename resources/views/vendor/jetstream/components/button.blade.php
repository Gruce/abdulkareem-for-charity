<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-700 hover:bg-blue-600 border-blue border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-blue-600 focus:outline-none focus:border-blue-600 focus:ring focus:ring-blue-700 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
