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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.heading','data' => ['title' => 'Social Providers','description' => 'Select the social networks that users can use for authentication']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Social Providers','description' => 'Select the social networks that users can use for authentication']); ?>
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
                    <!--[if BLOCK]><![endif]--><?php if(!file_exists(base_path('config/devdojo/auth/providers.php'))): ?>
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
                        <div class="grid grid-cols-2">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $network_slug => $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="flex relative justify-between items-center max-w-sm border-b border-b-zinc-200">
                                    <div class="flex relative justify-start items-center py-5 space-x-3">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-7 h-7">
                                                <!--[if BLOCK]><![endif]--><?php if(isset($provider['svg']) && !empty(trim($provider['svg']))): ?>
                                                    <?php echo $provider['svg']; ?>

                                                <?php else: ?>
                                                    <span class="block w-full h-full rounded-full bg-zinc-200"></span>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                            <div class="relative">
                                                <h4 class="text-base font-bold"><?php echo e($provider['name']); ?></h4>
                                                <p class="hidden text-sm">slug: <?php echo e($network_slug); ?></p>
                                            </div>
                                        </div>
                                        <div class="relative right">
                                            <!--[if BLOCK]><![endif]--><?php if(isset($provider['client_id']) && !empty(trim($provider['client_id'])) && isset($provider['client_secret']) && !empty(trim($provider['client_secret']))): ?>
                                                <span x-tooltip="Keys have been added" class="flex justify-center items-center w-7 h-7 text-green-500 bg-green-100 rounded-full">
                                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-key-duotone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-green-500']); ?>
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
                                                <span>
                                            <?php else: ?>
                                                <span x-tooltip="Missing keys for <?php echo e(strtoupper($network_slug)); ?>_CLIENT_ID and <?php echo e(strtoupper($network_slug)); ?>_CLIENT_SECRET inside your .env" class="flex justify-center items-center w-7 h-7 text-red-500 bg-red-100 rounded-full border-red-200">
                                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-key-duotone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-red-500']); ?>
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
                                                <span>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        
                                    </div>
                                    <div class="flex relative items-center">
                                        <!--[if BLOCK]><![endif]--><?php if(!isset($provider['socialite']) || !$provider['socialite']): ?>
                                            <a href="https://devdojo.com/auth/docs/config/social-providers/#socialite-providers-package" target="_blank" class="px-2 py-0.5 text-[0.6rem] mr-1.5 text-yellow-900 bg-yellow-200 rounded-full">Requires Package</a>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <?php if (isset($component)) { $__componentOriginalb4a09ae3f52dffaab6303c69de1e52ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4a09ae3f52dffaab6303c69de1e52ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.checkbox','data' => ['wire:change' => 'update(\''.e($network_slug).'\', $el.checked)','checked' => ($provider['active'] ? true : false)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:change' => 'update(\''.e($network_slug).'\', $el.checked)','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(($provider['active'] ? true : false))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4a09ae3f52dffaab6303c69de1e52ab)): ?>
<?php $attributes = $__attributesOriginalb4a09ae3f52dffaab6303c69de1e52ab; ?>
<?php unset($__attributesOriginalb4a09ae3f52dffaab6303c69de1e52ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4a09ae3f52dffaab6303c69de1e52ab)): ?>
<?php $component = $__componentOriginalb4a09ae3f52dffaab6303c69de1e52ab; ?>
<?php unset($__componentOriginalb4a09ae3f52dffaab6303c69de1e52ab); ?>
<?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </section>
        <?php /**PATH /Users/afyfbadreddine/Herd/mywave/storage/framework/views/9b7563fb715576eb5cfafd5991a67006.blade.php ENDPATH**/ ?>