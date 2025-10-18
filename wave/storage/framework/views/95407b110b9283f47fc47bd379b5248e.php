<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Devdojo\Auth\Helper;
use Devdojo\ConfigWriter\ArrayFile;

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.heading','data' => ['title' => 'Settings','description' => 'Adjust specific authentication features and enable/disable functionality.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Settings','description' => 'Adjust specific authentication features and enable/disable functionality.']); ?>
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
                <!--[if BLOCK]><![endif]--><?php if(!file_exists(base_path('config/devdojo/auth/settings.php'))): ?>
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
                    <div class="mt-10">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = (array)$this->settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="pb-5 mb-5 border-b border-zinc-200">
                                <?php
                                    $description = ($this->descriptions->settings[$key] ?? '');
                                ?>
                                <!--[if BLOCK]><![endif]--><?php if(is_bool($value)): ?>
                                    <?php if (isset($component)) { $__componentOriginale9d4511e3ea6a542d4e34d0ae4418460 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9d4511e3ea6a542d4e34d0ae4418460 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.checkbox-title-description','data' => ['wire:change' => 'update(\''.e($key).'\', $el.checked)','name' => ''.e($key).'','key' => $key,'title' => Helper::convertSlugToTitle($key),'description' => $description,'checked' => ($value ? true : false)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.checkbox-title-description'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:change' => 'update(\''.e($key).'\', $el.checked)','name' => ''.e($key).'','key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($key),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Helper::convertSlugToTitle($key)),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($description),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(($value ? true : false))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.input','data' => ['id' => $key,'wire:blur' => 'update(\''.e($key).'\', $el.value)','description' => $description,'label' => Helper::convertSlugToTitle($key),'type' => 'text','name' => ''.e($key).'','value' => ''.e($value).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($key),'wire:blur' => 'update(\''.e($key).'\', $el.value)','description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($description),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Helper::convertSlugToTitle($key)),'type' => 'text','name' => ''.e($key).'','value' => ''.e($value).'']); ?>
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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </section>
    <?php /**PATH /Users/afyfbadreddine/Herd/mywave/storage/framework/views/c510b55c9ed343c408766cc1230fd1d2.blade.php ENDPATH**/ ?>