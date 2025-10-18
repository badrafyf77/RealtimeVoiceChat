<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Devdojo\Auth\Helper;

?>


        <section x-data="{ 
                'tab': new URLSearchParams(window.location.search).get('tab') || 'logo',
                addQueryParam(key, value) {
                    // Create a URL object based on the current document URL
                    let url = new URL(window.location.href);

                    // Set or replace the query parameter
                    url.searchParams.set(key, value);

                    // Update the URL in the address bar without reloading the page
                    window.history.pushState({ path: url.toString() }, '', url.toString());
                }
            }"
            x-init="
                $watch('tab', function(value){
                    if (value !== null) {
                        addQueryParam('tab', value);
                    }
                    if(tab == 'css'){
                        if(codemirrorEditor == null){
                            setTimeout(function(){
                                enableCodeMirror();
                            }, 100);
                        }
                        //enableCodeMirror();
                    }
                    
                });

                if(tab == 'css'){
                    console.log('accessed');
                    setTimeout(function(){
                        enableCodeMirror();
                    }, 100);
                }
            " class="relative px-4 py-5 mx-auto w-full max-w-screen-lg">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.heading','data' => ['title' => 'Appearance','description' => 'Change the appearance of your auth screens, add a logo, modify the color, and more.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Appearance','description' => 'Change the appearance of your auth screens, add a logo, modify the color, and more.']); ?>
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
                <!--[if BLOCK]><![endif]--><?php if(!file_exists(base_path('config/devdojo/auth/appearance.php'))): ?>
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
                    <div class="relative w-full">
                        <div>
                            <div class="sm:hidden">
                                <label for="tabs" class="sr-only">Select a tab</label>
                                <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                                <select id="tabs" name="tabs" class="block py-2 pr-10 pl-3 w-full text-base rounded-md border-gray-300 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                <option>My Account</option>
                                <option>Company</option>
                                <option selected>Team Members</option>
                                <option>Billing</option>
                                </select>
                            </div>
                            <div class="hidden sm:block">
                                <div class="border-b border-gray-200">
                                <?php
                                    $tabs = ['logo' => 'Logo', 'background' => 'Background', 'colors' => 'Colors', 'alignment' => 'Alignment', 'favicon' => 'Favicon', 'css' => 'Custom CSS'];
                                ?>
                                <nav class="flex -mb-px space-x-8" aria-label="Tabs">
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="#_" @click.prevent="tab = '<?php echo e($slug); ?>'" 
                                            :class="{ 'border-indigo-500 text-indigo-600' : tab == '<?php echo e($slug); ?>', 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' : tab != '<?php echo e($slug); ?>' }"
                                            class="px-1 py-4 text-sm font-medium whitespace-nowrap border-b-2"><?php echo e($tab); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                                </nav>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <div x-show="tab == 'logo'" class="w-full h-auto" x-cloak>
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('auth.setup.logo', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2680580390-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            </div>
                            <div x-show="tab == 'background'" class="w-full h-auto" x-cloak>
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('auth.setup.background', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2680580390-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            </div>
                            <div x-show="tab == 'colors'" class="w-full h-auto" x-cloak>
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('auth.setup.color', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2680580390-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            </div>
                            <div x-show="tab == 'alignment'" class="w-full h-auto" x-cloak>
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('auth.setup.alignment', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2680580390-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            </div>
                            <div x-show="tab == 'favicon'" class="w-full h-auto" x-cloak>
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('auth.setup.favicon', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2680580390-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            </div>
                            <div x-show="tab == 'css'" class="w-full h-auto" x-cloak>
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('auth.setup.css', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2680580390-5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            
        </section>
    <?php /**PATH /Users/afyfbadreddine/Herd/mywave/storage/framework/views/e043b8bc4a6302f2883449e52b0b767e.blade.php ENDPATH**/ ?>