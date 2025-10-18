<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'description' => ''
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'description' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="mx-auto my-5 max-w-xs">
    <img src="/wave/img/empty-state-dark.png" class="hidden mx-auto my-2 w-full dark:block" />
    <img src="/wave/img/empty-state.png" class="block mx-auto my-2 w-full opacity-50 dark:hidden" />
    <p class="font-medium text-center text-black opacity-30 dark:text-white"><?php echo e($description ?? ''); ?></p>
</div><?php /**PATH /Users/afyfbadreddine/Herd/mywave/resources/views/components/empty-state.blade.php ENDPATH**/ ?>