@props([
    'error'       => NULL
])

<textarea {{ $attributes->merge(['class' => 'form-control' . ($error && $errors->has($error) ? ' is-invalid' : '')]) }} {{ $attributes }}>{{ $slot }}</textarea>

@if($error)
    @error($error)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
@endif
