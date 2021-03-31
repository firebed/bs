@props([
    'size' => NULL,
    'type' => NULL
])

<button type="{{ $type ?? NULL }}" {{ $attributes->merge(['class' => "btn btn-warning" . ($size ? " btn-$size" : "") ]) }} {{ $attributes }}>
    {{{ $slot }}}
</button>
