<?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e3d114de5921d89744e77f15e151d085::card','data' => ['class' => 'flex flex-col w-full max-w-4xl mx-auto lg:my-10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex flex-col w-full max-w-4xl mx-auto lg:my-10']); ?>
    <div class="flex flex-wrap items-center justify-between pb-3 mt-5 border-b lg:mt-0 sm:mt-8 border-zinc-200 dark:border-zinc-800 sm:flex-no-wrap">
        <div class="relative p-2">
            <div class="space-y-0.5">
                <h2 class="text-xl font-semibold tracking-tight dark:text-zinc-100"><?php echo e($title ?? ''); ?></h2>
                <p class="text-sm text-zinc-500 dark:text-zinc-400"><?php echo e($description ?? ''); ?></p>
            </div>
        </div>
    </div>
    <div class="flex flex-col pt-5 lg:flex-row lg:space-x-8">
        <aside class="flex-shrink-0 pb-8 lg:pt-4 lg:pb-0 lg:w-48">
            <nav class="flex items-start justify-start lg:flex-col lg:space-y-1">
                <div class="px-2.5 pb-1.5 text-xs lg:block hidden font-semibold leading-6 text-zinc-500">Settings</div>
                <div class="flex items-center w-auto space-x-2 lg:items-stretch lg:flex-col lg:w-full lg:space-y-1 lg:space-x-0">
                    <?php if (isset($component)) { $__componentOriginal7d540a9187ebd554b18841c6f28f4b36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e3d114de5921d89744e77f15e151d085::settings-sidebar-link','data' => ['href' => route('settings.profile'),'icon' => 'phosphor-user-circle-duotone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('settings-sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('settings.profile')),'icon' => 'phosphor-user-circle-duotone']); ?>Profile <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $attributes = $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $component = $__componentOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal7d540a9187ebd554b18841c6f28f4b36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e3d114de5921d89744e77f15e151d085::settings-sidebar-link','data' => ['href' => route('settings.security'),'icon' => 'phosphor-lock-duotone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('settings-sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('settings.security')),'icon' => 'phosphor-lock-duotone']); ?>Security <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $attributes = $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $component = $__componentOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal7d540a9187ebd554b18841c6f28f4b36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e3d114de5921d89744e77f15e151d085::settings-sidebar-link','data' => ['href' => route('settings.api'),'icon' => 'phosphor-code-duotone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('settings-sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('settings.api')),'icon' => 'phosphor-code-duotone']); ?>API Keys <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $attributes = $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $component = $__componentOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
                </div>
                <div class="px-2.5 pt-3.5 pb-1.5 text-xs lg:block hidden font-semibold leading-6 text-zinc-500">Billing</div>
                <div class="flex items-center w-full ml-2 space-x-2 lg:items-stretch lg:flex-col lg:ml-0 lg:space-y-1 lg:space-x-0">
                    <?php if (isset($component)) { $__componentOriginal7d540a9187ebd554b18841c6f28f4b36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e3d114de5921d89744e77f15e151d085::settings-sidebar-link','data' => ['href' => route('settings.subscription'),'icon' => 'phosphor-credit-card-duotone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('settings-sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('settings.subscription')),'icon' => 'phosphor-credit-card-duotone']); ?>Subscription <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $attributes = $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $component = $__componentOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal7d540a9187ebd554b18841c6f28f4b36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e3d114de5921d89744e77f15e151d085::settings-sidebar-link','data' => ['href' => route('settings.invoices'),'icon' => 'phosphor-invoice-duotone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('settings-sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('settings.invoices')),'icon' => 'phosphor-invoice-duotone']); ?>Invoices <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $attributes = $__attributesOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__attributesOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36)): ?>
<?php $component = $__componentOriginal7d540a9187ebd554b18841c6f28f4b36; ?>
<?php unset($__componentOriginal7d540a9187ebd554b18841c6f28f4b36); ?>
<?php endif; ?>
                </div>
            </nav>
        </aside>

        <div class="py-3 lg:px-6 lg:w-full">
            <?php echo e($slot); ?>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?><?php /**PATH /Users/afyfbadreddine/Herd/mywave/resources/themes/anchor/components/app/settings-layout.blade.php ENDPATH**/ ?>