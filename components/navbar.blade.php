@props(['expand' => 'lg', 'theme' => 'light'])

<nav {{ $attributes->merge(['class' => 'navbar navbar-expand' . ($expand ? "-$expand" : "") . " navbar-$theme"]) }} {{ $attributes }}>
    <div class="container-fluid">
        {{ $slot }}
    </div>
</nav>
