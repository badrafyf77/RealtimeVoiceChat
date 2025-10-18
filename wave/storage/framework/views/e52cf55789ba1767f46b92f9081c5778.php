<div x-data="{
    css: <?php if ((object) ('css') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('css'->value()); ?>')<?php echo e('css'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('css'); ?>')<?php endif; ?>
}"
x-init=""
@update-css-code.window="css=event.detail.value;"
    >
    <div class="mb-3 w-full" wire:ignore>
        <textarea id="css-editor" class="w-full min-h-[350px] rounded-xl border border-zinc-200 overflow-hidden" x-model="css"></textarea>
    </div>
    <?php if (isset($component)) { $__componentOriginalac71e795452db5fcb380960084533e4c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac71e795452db5fcb380960084533e4c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.button','data' => ['wire:click' => 'update']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'update']); ?>Update <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalac71e795452db5fcb380960084533e4c)): ?>
<?php $attributes = $__attributesOriginalac71e795452db5fcb380960084533e4c; ?>
<?php unset($__attributesOriginalac71e795452db5fcb380960084533e4c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac71e795452db5fcb380960084533e4c)): ?>
<?php $component = $__componentOriginalac71e795452db5fcb380960084533e4c; ?>
<?php unset($__componentOriginalac71e795452db5fcb380960084533e4c); ?>
<?php endif; ?>
</div><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/livewire/setup/css.blade.php ENDPATH**/ ?>