<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<x-phosphor-paint-bucket-duotone  {{ $attributes }}>

{{ $slot ?? "" }}
</x-phosphor-paint-bucket-duotone>