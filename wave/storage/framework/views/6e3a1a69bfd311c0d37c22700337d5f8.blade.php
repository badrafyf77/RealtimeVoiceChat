<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['bodyClass'])
<x-layouts.marketing :bodyClass="$bodyClass" >

{{ $slot ?? "" }}
</x-layouts.marketing>