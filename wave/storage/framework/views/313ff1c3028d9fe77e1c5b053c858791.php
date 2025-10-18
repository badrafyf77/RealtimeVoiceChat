<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;

?>


            <section class="max-w-screen-lg px-4 mx-auto py-14">
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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-left">Authentication Setup</h2>
                    <p class="text-sm text-left text-gray-600">Welcome to your authentication setup. Below you will find sections to help you configure and customize the auth in your application.</p>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <?php if (isset($component)) { $__componentOriginal5f1eb1a4a68575924bf312f8891eeb15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.welcome-card','data' => ['link' => 'auth/setup/appearance','icon' => 'appearance','title' => 'Change The Appearance','description' => 'Change the appearance of your auth screens, add a logo, modify the color, and more.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.welcome-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => 'auth/setup/appearance','icon' => 'appearance','title' => 'Change The Appearance','description' => 'Change the appearance of your auth screens, add a logo, modify the color, and more.']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15)): ?>
<?php $attributes = $__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15; ?>
<?php unset($__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1eb1a4a68575924bf312f8891eeb15)): ?>
<?php $component = $__componentOriginal5f1eb1a4a68575924bf312f8891eeb15; ?>
<?php unset($__componentOriginal5f1eb1a4a68575924bf312f8891eeb15); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5f1eb1a4a68575924bf312f8891eeb15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.welcome-card','data' => ['link' => 'auth/setup/providers','icon' => 'social-providers','title' => 'Add/Edit Social Providers','description' => 'Select the social networks that users can use for authentication.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.welcome-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => 'auth/setup/providers','icon' => 'social-providers','title' => 'Add/Edit Social Providers','description' => 'Select the social networks that users can use for authentication.']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15)): ?>
<?php $attributes = $__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15; ?>
<?php unset($__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1eb1a4a68575924bf312f8891eeb15)): ?>
<?php $component = $__componentOriginal5f1eb1a4a68575924bf312f8891eeb15; ?>
<?php unset($__componentOriginal5f1eb1a4a68575924bf312f8891eeb15); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5f1eb1a4a68575924bf312f8891eeb15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.welcome-card','data' => ['link' => 'auth/setup/language','icon' => 'language','title' => 'Update Language Copy','description' => 'Update the text copy on your login, registration, and other authentication pages']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.welcome-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => 'auth/setup/language','icon' => 'language','title' => 'Update Language Copy','description' => 'Update the text copy on your login, registration, and other authentication pages']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15)): ?>
<?php $attributes = $__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15; ?>
<?php unset($__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1eb1a4a68575924bf312f8891eeb15)): ?>
<?php $component = $__componentOriginal5f1eb1a4a68575924bf312f8891eeb15; ?>
<?php unset($__componentOriginal5f1eb1a4a68575924bf312f8891eeb15); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5f1eb1a4a68575924bf312f8891eeb15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.welcome-card','data' => ['link' => 'auth/setup/settings','icon' => 'settings','title' => 'Modify Settings','description' => 'Adjust specific authentication features and enable/disable functionality.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.welcome-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => 'auth/setup/settings','icon' => 'settings','title' => 'Modify Settings','description' => 'Adjust specific authentication features and enable/disable functionality.']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15)): ?>
<?php $attributes = $__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15; ?>
<?php unset($__attributesOriginal5f1eb1a4a68575924bf312f8891eeb15); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1eb1a4a68575924bf312f8891eeb15)): ?>
<?php $component = $__componentOriginal5f1eb1a4a68575924bf312f8891eeb15; ?>
<?php unset($__componentOriginal5f1eb1a4a68575924bf312f8891eeb15); ?>
<?php endif; ?>
                </div>
                <div @click="preview=true" class="flex items-center w-full h-auto py-5 mt-6 space-x-5 duration-300 ease-out bg-white border rounded-md cursor-pointer px-7 hover:bg-zinc-50 border-zinc-200">
                    <span class="flex-shrink-0 block w-24 h-24">
                        <?php echo $__env->make('auth::includes.setup.icons.preview', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </span>
                    <div class="relative">
                        <p class="text-lg font-semibold text-zinc-800">Preview Your Authentication Pages</p>
                        <p class="text-sm underline">Click here to see what your authentication pages look like.</p>
                    </div>
                </div>
                <div class="relative w-full px-5 py-4 mt-6 text-gray-900 bg-gray-100 border border-gray-200 rounded-md dark:bg-zinc-700 dark:text-gray-300 dark:border-gray-700">
                    <div class="text-sm opacity-80">To learn more about this authentication package, be sure to <a href="https://auth.devdojo.com/docs" target="_blank" class="underline">visit the documentation</a> or <a href="https://github.com/thedevdojo/auth" target="_blank" class="underline">view the project on Github</a>.</div>
                </div>
            </section>

        <?php /**PATH /Users/afyfbadreddine/Herd/mywave/storage/framework/views/293f9bf885cfb6ee8af2b036ca6709a6.blade.php ENDPATH**/ ?>