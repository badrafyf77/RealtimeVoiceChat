<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Devdojo\Auth\Helper;

?>


        <section class="relative px-4 py-5 mx-auto w-full max-w-screen-lg">
            <?php if (isset($component)) { $__componentOriginal5f45fa501b29408a1a48208364285748 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f45fa501b29408a1a48208364285748 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.full-screen-loader','data' => ['wire:target' => 'update']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.full-screen-loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:target' => 'update']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f45fa501b29408a1a48208364285748)): ?>
<?php $attributes = $__attributesOriginal5f45fa501b29408a1a48208364285748; ?>
<?php unset($__attributesOriginal5f45fa501b29408a1a48208364285748); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f45fa501b29408a1a48208364285748)): ?>
<?php $component = $__componentOriginal5f45fa501b29408a1a48208364285748; ?>
<?php unset($__componentOriginal5f45fa501b29408a1a48208364285748); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal994245020eac3bba8c7d7e47ef06aae4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal994245020eac3bba8c7d7e47ef06aae4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.heading','data' => ['title' => 'Language','description' => 'Update the language copy for each authenticaiton page']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Language','description' => 'Update the language copy for each authenticaiton page']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal994245020eac3bba8c7d7e47ef06aae4)): ?>
<?php $attributes = $__attributesOriginal994245020eac3bba8c7d7e47ef06aae4; ?>
<?php unset($__attributesOriginal994245020eac3bba8c7d7e47ef06aae4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal994245020eac3bba8c7d7e47ef06aae4)): ?>
<?php $component = $__componentOriginal994245020eac3bba8c7d7e47ef06aae4; ?>
<?php unset($__componentOriginal994245020eac3bba8c7d7e47ef06aae4); ?>
<?php endif; ?>
            <div class="relative w-full">
                <!--[if BLOCK]><![endif]--><?php if(!file_exists(base_path('config/devdojo/auth/language.php'))): ?>
                    <?php if (isset($component)) { $__componentOriginal9cd5980c123d0bea2122cd06591e39c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9cd5980c123d0bea2122cd06591e39c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.config-notification','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.config-notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9cd5980c123d0bea2122cd06591e39c1)): ?>
<?php $attributes = $__attributesOriginal9cd5980c123d0bea2122cd06591e39c1; ?>
<?php unset($__attributesOriginal9cd5980c123d0bea2122cd06591e39c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9cd5980c123d0bea2122cd06591e39c1)): ?>
<?php $component = $__componentOriginal9cd5980c123d0bea2122cd06591e39c1; ?>
<?php unset($__componentOriginal9cd5980c123d0bea2122cd06591e39c1); ?>
<?php endif; ?>
                <?php else: ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parentKey => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div x-data="{ show: false }" class="w-full border-b border-zinc-100">
                            <div x-on:click="show=!show" :class="{ 'text-zinc-800 bg-zinc-100' : show, 'text-zinc-500 hover:text-zinc-800 hover:bg-zinc-100' : !show  }" class="flex relative justify-between items-center p-3 w-full cursor-pointer">
                                <h3><?php echo e(ucwords(str_replace('_', ' ', Str::snake($parentKey)))); ?></h3>
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-caret-down'); ?>
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
                            </div>
                            <div x-show="show" class="relative p-5 select-none" x-collapse>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = (array)$value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="pb-5 mb-5 border-b border-zinc-200">
                                        <!--[if BLOCK]><![endif]--><?php if(is_bool($value)): ?>
                                            <?php if (isset($component)) { $__componentOriginale9d4511e3ea6a542d4e34d0ae4418460 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9d4511e3ea6a542d4e34d0ae4418460 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.checkbox-title-description','data' => ['wire:change' => 'update(\''.e($parentKey . '.' . $key).'\', $el.checked)','name' => ''.e($key).'','key' => $key,'title' => Helper::convertSlugToTitle($key),'checked' => ($value ? true : false)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.checkbox-title-description'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:change' => 'update(\''.e($parentKey . '.' . $key).'\', $el.checked)','name' => ''.e($key).'','key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($key),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Helper::convertSlugToTitle($key)),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(($value ? true : false))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9d4511e3ea6a542d4e34d0ae4418460)): ?>
<?php $attributes = $__attributesOriginale9d4511e3ea6a542d4e34d0ae4418460; ?>
<?php unset($__attributesOriginale9d4511e3ea6a542d4e34d0ae4418460); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9d4511e3ea6a542d4e34d0ae4418460)): ?>
<?php $component = $__componentOriginale9d4511e3ea6a542d4e34d0ae4418460; ?>
<?php unset($__componentOriginale9d4511e3ea6a542d4e34d0ae4418460); ?>
<?php endif; ?>
                                        <?php else: ?>
                                            <?php if (isset($component)) { $__componentOriginal5e327c5fbad515135de14875b2f02308 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e327c5fbad515135de14875b2f02308 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.input','data' => ['id' => $key,'wire:blur' => 'update(\''.e($parentKey . '.' . $key).'\', $el.value)','label' => Helper::convertSlugToTitle($key),'type' => 'text','name' => ''.e($key).'','value' => ''.e($value).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($key),'wire:blur' => 'update(\''.e($parentKey . '.' . $key).'\', $el.value)','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Helper::convertSlugToTitle($key)),'type' => 'text','name' => ''.e($key).'','value' => ''.e($value).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e327c5fbad515135de14875b2f02308)): ?>
<?php $attributes = $__attributesOriginal5e327c5fbad515135de14875b2f02308; ?>
<?php unset($__attributesOriginal5e327c5fbad515135de14875b2f02308); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e327c5fbad515135de14875b2f02308)): ?>
<?php $component = $__componentOriginal5e327c5fbad515135de14875b2f02308; ?>
<?php unset($__componentOriginal5e327c5fbad515135de14875b2f02308); ?>
<?php endif; ?>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </section>
    <?php /**PATH /Users/afyfbadreddine/Herd/mywave/storage/framework/views/4f276d2b209b616f8060158d86fec906.blade.php ENDPATH**/ ?>