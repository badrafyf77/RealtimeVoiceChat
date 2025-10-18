<div x-show="preview" @click="preview=false" x-transition.opacity class="absolute inset-0 z-[98] w-screen h-screen delay-500 bg-black/50" x-cloak></div>
<div x-on:click="preview=true" x-show="!preview" class="flex fixed right-0 bottom-0 z-50 items-center px-4 py-2 mr-3 space-x-1 text-sm bg-white rounded-t-lg border border-b-0 cursor-pointer text-zinc-600 hover:text-zinc-800 border-zinc-200">
    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-monitor-bold'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '-ml-0.5 w-4 h-4 duration-300 ease-out translate-x-0 group-hover:-translate-x-0.5']); ?>
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
    <span>Open Preview</span>
</div>
<div :class="{ 'translate-y-full duration-500 invisible' : !preview, 'translate-y-0 pt-3 duration-300' : preview }"
        class="flex absolute top-0 left-0 px-3 z-[99] ease-in-out  flex-col w-screen h-screen" x-cloak>
    
    <div class="flex flex-col w-full h-full bg-white rounded-t-md">
        <div class="flex relative z-50 flex-shrink-0 justify-center items-center w-full h-10 bg-white rounded-t-md border-b border-zinc-200">
            <div x-show="preview" class="relative" x-on:click.outside="previewMenuDropdown=false">
                <button x-on:click="previewMenuDropdown=!previewMenuDropdown" class="flex justify-between items-center px-3 w-64 h-7 text-xs rounded-md border cursor-pointer bg-zinc-100 hover:bg-zinc-200/70">
                    <img src="<?php echo e(url(config('devdojo.auth.appearance.favicon.light'))); ?>" class="w-4 h-4 -translate-x-1.5" />
                    <span class="font-medium" x-text="previewPageActive.name"></span>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-caret-down-fill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ml-2 w-3 h-3']); ?>
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
                <div x-show="previewMenuDropdown" x-transition.scale.origin.top.opacity class="[&>button]:px-3 [&>button]:block [&>button]:rounded-md space-y-1 [&>button:hover]:bg-zinc-100 group [&>button]:text-left [&>button]:w-full [&>button]:text-sm [&>button]:py-1.5 absolute left-0 bg-white shadow-xl py-1 px-2 w-64 rounded-md top-0 mt-[33px] z-[99]">
                    <template x-for="(previewPage, index) in previewPages">
                        <button :class="{ 'bg-zinc-100' : previewPage.url == previewPageActive.url }" @click="previewURL=previewPage.url; previewPageActive=previewPages[index]; previewMenuDropdown=false;" x-text="previewPage.name"></button>
                    </template>
                </div>
            </div>
            <div class="flex absolute right-0 items-center h-full">
                <a :href="previewPageActive.url" target="_blank" class="flex flex-shrink-0 items-center px-2 py-1 mr-2 text-xs bg-white rounded-md border shadow-sm duration-200 ease-out text-zinc-500 hover:text-zinc-700 hover:border-zinc-200 group border-zinc-100">
                    <span>Preview in New Tab</span>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-arrow-right-bold'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 ml-1 w-3 h-3 duration-200 ease-out -rotate-45 group-hover:-translate-y-px group-hover:translate-x-px']); ?>
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
                </a>
                <button x-on:click="preview=false" class="inline-flex z-50 items-center px-4 h-full text-sm font-medium bg-white rounded-tr-md border-l hover:bg-zinc-100 group border-zinc-200 text-zinc-600 hover:text-zinc-800">
                    <div x-show="preview" class="flex items-center space-x-1">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-x-bold'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '-ml-0.5 w-3.5 h-3.5 duration-300 ease-out']); ?>
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
                    </div>
                </button>
            </div>
        </div>
        <div id="preview_loader" class="absolute top-0 left-0 z-40 justify-center items-center px-3 mt-10 w-full h-full">
            <div class="flex justify-center items-center w-full h-full bg-zinc-100">
                <svg class="w-5 h-5 animate-spin text-zinc-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </div>
        </div>
        <div x-show="previewMenuDropdown" class="absolute inset-0 z-40 w-full h-full bg-transparent"></div>
        <iframe id="preview" :src="previewPageActive.url + '?preview=true'" class="hidden overflow-hidden relative z-30 w-full h-full opacity-0 duration-300 ease-out"></iframe>
    </div>
</div><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/includes/setup/preview.blade.php ENDPATH**/ ?>