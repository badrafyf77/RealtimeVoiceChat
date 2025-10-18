<div
    x-data="{
        image: <?php if ((object) ('image') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('image'->value()); ?>')<?php echo e('image'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('image'); ?>')<?php endif; ?>,
        image_overlay_opacity: <?php if ((object) ('image_overlay_opacity') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('image_overlay_opacity'->value()); ?>')<?php echo e('image_overlay_opacity'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('image_overlay_opacity'); ?>')<?php endif; ?>.live
    }"
 class="max-w-xl">
    <div class="pb-5 mb-5 border-b border-zinc-200">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Background Color</label>
        </div>
        <div class="w-full h-auto">
            <input type="color" value="#000000" wire:model.live="color" />
        </div>
    </div>


    <div class="pb-5 mb-5 border-b border-zinc-200">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Background Image</label>
            <p class="text-sm leading-6 text-gray-400">Choose a nice background image to use as your authentication background.</p>
        </div>
        <div class="w-full h-auto">
            <!--[if BLOCK]><![endif]--><?php if(isset($image) && $image != ''): ?>
                <div class="relative">
                    <img src="<?php echo e(url($image) . '?' . uniqid()); ?>" class="w-full h-auto rounded-md" />
                    <button wire:click="deleteBackgroundImage()" class="flex absolute top-0 right-0 items-center px-3 py-1.5 mt-2 mr-2 text-xs font-medium text-white rounded-md bg-red-500/70 hover:bg-red-500/90">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-1 w-4 h-4']); ?>
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
                        <span>Remove Image</span>
                    </button>
                </div>
            <?php else: ?>
                <div class="flex justify-center items-center w-full">
                    <label for="image" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg class="mb-4 w-8 h-8 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span></p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF</p>
                        </div>
                        <input id="image" type="file" wire:model="image" class="hidden" />
                    </label>
                </div> 
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>

    <div class="pb-5 mb-5 border-b border-zinc-200">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Image Overlay Color</label>
            <p class="text-sm leading-6 text-gray-400">If you use a background image you can specify a color overlay here.</p>
        </div>
        <div class="w-full h-auto">
            <input type="color" value="#000000" wire:model.live="image_overlay_color" />
        </div>
    </div>

    <div class="pb-5 mb-5 border-b border-zinc-200">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Image Overlay Opacity</label>
            <p class="text-sm leading-6 text-gray-400">The opacity of the image overlay color. Set to 0 for no overlay</p>
        </div>
        <div class="w-full h-auto">
            <p class="font-bold" x-text="image_overlay_opacity + '%'"></p>
            <div class="relative mb-6 max-w-xs">
                <input type="range" value="100" min="0" max="100" x-model="image_overlay_opacity" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                <span class="flex justify-between items-center w-full">
                    <span class="-bottom-6 text-sm text-gray-500">0%</span>
                    <span class="-bottom-6 text-sm text-gray-500">50%</span>
                    <span class="-bottom-6 text-sm text-gray-500">100%</span>
                </span>
            </div>
        </div>
    </div>
    
</div><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/livewire/setup/background.blade.php ENDPATH**/ ?>