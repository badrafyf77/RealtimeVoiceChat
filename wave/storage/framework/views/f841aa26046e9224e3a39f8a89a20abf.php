<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => null,
    'id' => null,
    'name' => null,
    'type' => 'text',
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
    'label' => null,
    'id' => null,
    'name' => null,
    'type' => 'text',
    'description' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php $wireModel = $attributes->get('wire:model'); ?>

<div>
    <!--[if BLOCK]><![endif]--><?php if($label): ?>
        <label for="<?php echo e($id ?? ''); ?>" class="block text-sm font-medium leading-6 text-gray-900"><?php echo e($label); ?></label>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if($description ?? false): ?>
        <p class="text-sm leading-6 text-gray-400"><?php echo e($description ?? ''); ?></p>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <div data-model="<?php echo e($wireModel); ?>" class="mt-1.5 max-w-sm rounded-md shadow-sm">
        <input <?php echo e($attributes->merge(['class' => 'appearance-none flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-gray-300 dark:focus:border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200/80 disabled:cursor-not-allowed disabled:opacity-50'])); ?> <?php echo e($attributes->whereStartsWith('wire:model')); ?> id="<?php echo e($id ?? ''); ?>" name="<?php echo e($name ?? ''); ?>" type="<?php echo e($type ?? ''); ?>" required autofocus />
    </div>

    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$wireModel];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/components/setup/input.blade.php ENDPATH**/ ?>