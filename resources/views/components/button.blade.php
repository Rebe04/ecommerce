@props(['color' => 'gray'])
<button {{ $attributes->merge(['type' => 'submit', 'class' => "inline-flex justify-center items-center px-4 py-2 bg-$color-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-$color-500 active:bg-$color-400 focus:outline-none focus:border-$color-400 focus:ring focus:ring-$color-400 disabled:opacity-25 transition"]) }}>
    {{ $slot }}
</button>