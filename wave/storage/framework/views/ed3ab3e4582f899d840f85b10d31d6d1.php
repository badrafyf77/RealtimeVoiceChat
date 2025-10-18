<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => '',
    'type' => 'gray', // info, success, warning, danger
    'id' => uniqid(),
    'dismissable' => true
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
    'title' => '',
    'type' => 'gray', // info, success, warning, danger
    'id' => uniqid(),
    'dismissable' => true
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php

    $alertIcon = 'phosphor-info-duotone';

    $alertIcon = match($type)
    {
        'info' => 'phosphor-info-duotone',
        'success' => 'icon-check-circle-duotone',
        'warning' => 'icon-warning-duotone',
        'danger' => 'icon-warning-circle-duotone',
        'gray' => 'icon-info-duotone'
    };


?>

<div 
    x-show="alert_<?php echo e($id); ?>"
    x-data="{ alert_<?php echo e($id); ?>: $persist(true) }"
    <?php echo e($attributes->class([
        'relative pl-5 pr-10 py-4 w-full rounded-md border',
        'bg-gray-100 dark:bg-zinc-700 dark:border-zinc-600 text-gray-900 dark:text-gray-300 border-gray-200 dark:border-zinc-800' => $type == 'gray',
		'bg-blue-50 text-blue-600 border-blue-200' => $type == 'info',
		'bg-green-100 text-green-600 border-green-200' => $type == 'success',
		'bg-yellow-50 text-yellow-600 border-yellow-200' => $type == 'warning',
		'bg-red-50 text-red-600 border-red-200' => $type == 'danger'
    ])); ?>

    x-collapse
    x-cloak
>
    <?php if($dismissable): ?>
        <button @click="alert_<?php echo e($id); ?>=false" class="absolute right-0 top-0 z-50 p-1.5 mr-3 rounded-full opacity-70 mt-3.5 cursor-pointer hover:opacity-100 hover:bg-zinc-200 hover:dark:bg-zinc-700 hover:dark:text-zinc-300 text-zinc-500 dark:text-zinc-400"><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-x-bold'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3.5 h-3.5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?></button>
    <?php endif; ?>
    <?php if($title ?? false): ?>
        <div class="flex items-start space-x-2">
            <?php if (isset($component)) { $__componentOriginal606b6d7eddc2e418f11096356be15e19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal606b6d7eddc2e418f11096356be15e19 = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => ''.e($alertIcon).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 -translate-y-0.5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal606b6d7eddc2e418f11096356be15e19)): ?>
<?php $attributes = $__attributesOriginal606b6d7eddc2e418f11096356be15e19; ?>
<?php unset($__attributesOriginal606b6d7eddc2e418f11096356be15e19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal606b6d7eddc2e418f11096356be15e19)): ?>
<?php $component = $__componentOriginal606b6d7eddc2e418f11096356be15e19; ?>
<?php unset($__componentOriginal606b6d7eddc2e418f11096356be15e19); ?>
<?php endif; ?>
            <h5 class="mb-1 font-medium leading-none tracking-tight"><?php echo e($title); ?></h5>
        </div>
    <?php endif; ?>
    <div class="<?php if($title ?? false): ?><?php echo e('pl-7'); ?><?php endif; ?> text-sm leading-6"><?php echo e($slot); ?></div>
    
</div><?php /**PATH /Users/afyfbadreddine/Herd/mywave/resources/themes/anchor/components/app/alert.blade.php ENDPATH**/ ?>