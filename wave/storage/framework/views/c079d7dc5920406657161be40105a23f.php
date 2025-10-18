<div
    x-data="{
        heading: <?php if ((object) ('heading') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('heading'->value()); ?>')<?php echo e('heading'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('heading'); ?>')<?php endif; ?>.live,
        container: <?php if ((object) ('container') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('container'->value()); ?>')<?php echo e('container'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('container'); ?>')<?php endif; ?>.live
    }"
    class="flex justify-start items-start space-x-7 w-full">

    <div class="mx-auto w-full max-w-sm">
        <div class="pb-5 mb-5 w-full border-b border-zinc-200">
            <label class="block text-sm font-medium leading-6 text-gray-900">Heading Alignment</label>
            <div class="flex items-center mt-3">
                <button :class="{ 'bg-zinc-200' : heading == 'left' }" x-on:click="heading = 'left'" class="p-2 rounded-l-md border border-zinc-200 text-zinc-600">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-text-align-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </button>
                <button :class="{ 'bg-zinc-200' : heading == 'center' }" x-on:click="heading = 'center'" class="p-2 border border-r-0 border-l-0 border-zinc-200 text-zinc-600">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-text-align-center'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </button>
                <button :class="{ 'bg-zinc-200' : heading == 'right' }" x-on:click="heading = 'right'" class="p-2 rounded-r-md border border-zinc-200 text-zinc-600">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-text-align-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </button>
            </div>
        </div>
        
        <div class="pb-5 mb-5 w-full border-b border-zinc-200">
            <label class="block text-sm font-medium leading-6 text-gray-900">Container Alignment</label>
            <div class="flex items-center mt-3 space-x-3">
                <button :class="{ 'border-blue-500' : container == 'left', 'border-zinc-200 hover:border-blue-500' : container != 'left' }" x-on:click="container = 'left'" class="flex justify-start items-stretch w-28 h-20 rounded-md border-2 bg-zinc-200 text-zinc-600">
                    <div class="w-9 h-full bg-white rounded"></div>
                </button>
                <button :class="{ 'border-blue-500' : container == 'center', 'border-zinc-200 hover:border-blue-500' : container != 'center' }" x-on:click="container = 'center'" class="flex justify-center items-center w-28 h-20 rounded-md border-2 bg-zinc-200 text-zinc-600">
                    <div class="w-9 h-9 bg-white rounded"></div>
                </button>
                <button :class="{ 'border-blue-500' : container == 'right', 'border-zinc-200 hover:border-blue-500' : container != 'right' }" x-on:click="container = 'right'" class="flex justify-end items-stretch w-28 h-20 rounded-md border-2 bg-zinc-200 text-zinc-600">
                    <div class="w-9 h-full bg-white rounded"></div>
                </button>
            </div>
        </div>
    </div>

    

    <div class="relative w-full">
        <strong class="block pb-5 text-xs">Preview</strong>
        <div :class="{ 'justify-center items-center' : container == 'center', 'justify-start items-stretch' : container == 'left', 'justify-end items-stretch' : container == 'right' }" class="flex overflow-hidden w-full h-80 rounded-lg border border-dashed bg-zinc-200">

           <div :class="{ 'items-center' : heading == 'center', 'items-start' : heading == 'left', 'items-end' : heading == 'right', 'h-auto rounded-md' : container == 'center', 'h-full' : container == 'left' || container == 'right'  }" class="flex flex-col gap-1 justify-center p-5 w-40 bg-white">
                <div class="mb-1.5 w-4 h-4 rounded-full bg-zinc-200/70"></div>
                <div class="w-2/3 h-2 bg-zinc-200/70"></div>
                <div class="w-5/6 h-2 bg-zinc-200/70"></div>
                <div class="mt-1.5 w-full h-14 bg-zinc-200/70"></div>
           </div>
            
        </div>
    </div>

</div><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/livewire/setup/alignment.blade.php ENDPATH**/ ?>