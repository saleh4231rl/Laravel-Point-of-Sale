@if($errors->isNotEmpty())
@foreach ($errors->get($name) as $error)
<small class="text-danger font-weight-bold">
    {{ $error }}
</small>
@endforeach
@endif

<!-- © 2022 Copyright: Muhammad Saleh -->