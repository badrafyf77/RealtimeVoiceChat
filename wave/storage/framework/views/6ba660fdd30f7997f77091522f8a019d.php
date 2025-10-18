<?php

use Filament\Forms\Components\TextInput;

?>

 
        <div class="relative">
            <?php if (isset($component)) { $__componentOriginal58646d384ffaac20b67dbbbd26407dd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58646d384ffaac20b67dbbbd26407dd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.settings-layout','data' => ['title' => 'Subscriptions','description' => 'Your subscription details']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.settings-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Subscriptions','description' => 'Your subscription details']); ?>
                <!--[if BLOCK]><![endif]--><?php if (\Illuminate\Support\Facades\Blade::check('role', 'admin')): ?>
                    <?php if (isset($component)) { $__componentOriginald4b7f999cee0ea6f5d084dd252043a80 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.alert','data' => ['id' => 'no_subscriptions','dismissable' => false,'type' => 'info']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'no_subscriptions','dismissable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'type' => 'info']); ?>
                        You are logged in as an admin and have full access. Authenticate with a different user and visit this page to see the subscription checkout process.
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $attributes = $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $component = $__componentOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>
                <?php else: ?>
                    <!--[if BLOCK]><![endif]--><?php if (\Illuminate\Support\Facades\Blade::check('subscriber')): ?>
                        
                        <div class="relative w-full h-auto">                            
                            <?php if (isset($component)) { $__componentOriginald4b7f999cee0ea6f5d084dd252043a80 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.alert','data' => ['id' => 'no_subscriptions','dismissable' => false,'type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'no_subscriptions','dismissable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'type' => 'success']); ?>
                                <div class="flex items-center w-full">
                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-seal-check-duotone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 mr-1.5 -ml-1.5 w-6 h-6']); ?>
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
                                    <span>You are currently subscribed to the <?php echo e(auth()->user()->plan()->name); ?> <?php echo e(auth()->user()->planInterval()); ?> Plan.</span>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $attributes = $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $component = $__componentOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>
                            <p class="my-4">Manage your subscription by clicking below. Edit this page from the following file:  <?php if (isset($component)) { $__componentOriginal68e0f96d76bf96b9d63ca83d04db52da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68e0f96d76bf96b9d63ca83d04db52da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e3d114de5921d89744e77f15e151d085::code-inline','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('code-inline'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>resources/views/<?php echo e($theme->folder); ?>/pages/settings/subscription.blade.php <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68e0f96d76bf96b9d63ca83d04db52da)): ?>
<?php $attributes = $__attributesOriginal68e0f96d76bf96b9d63ca83d04db52da; ?>
<?php unset($__attributesOriginal68e0f96d76bf96b9d63ca83d04db52da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68e0f96d76bf96b9d63ca83d04db52da)): ?>
<?php $component = $__componentOriginal68e0f96d76bf96b9d63ca83d04db52da; ?>
<?php unset($__componentOriginal68e0f96d76bf96b9d63ca83d04db52da); ?>
<?php endif; ?></p>
                            <!--[if BLOCK]><![endif]--><?php if(session('update')): ?>
                                <div class="my-4 text-sm text-green-600">Successfully updated your subscription</div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('billing.update', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2831225076-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if (\Illuminate\Support\Facades\Blade::check('notsubscriber')): ?>
                        <div class="mb-4">
                            <?php if (isset($component)) { $__componentOriginald4b7f999cee0ea6f5d084dd252043a80 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.alert','data' => ['id' => 'no_subscriptions','dismissable' => false,'type' => 'info']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'no_subscriptions','dismissable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'type' => 'info']); ?>
                                <div class="flex items-center space-x-1.5">
                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-shopping-bag-open-duotone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 mr-1.5 -ml-1.5 w-6 h-6']); ?>
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
                                    <span>No active subscriptions found. Please select a plan below.</span>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $attributes = $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $component = $__componentOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>
                        </div>
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('billing.checkout', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2831225076-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        <p class="flex items-center mt-3 mb-4">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-shield-check-duotone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1']); ?>
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
                            <span class="mr-1">Billing is securely managed via </span><strong><?php echo e(ucfirst(config('wave.billing_provider'))); ?> Payment Platform</strong>.
                        </p>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal58646d384ffaac20b67dbbbd26407dd5)): ?>
<?php $attributes = $__attributesOriginal58646d384ffaac20b67dbbbd26407dd5; ?>
<?php unset($__attributesOriginal58646d384ffaac20b67dbbbd26407dd5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal58646d384ffaac20b67dbbbd26407dd5)): ?>
<?php $component = $__componentOriginal58646d384ffaac20b67dbbbd26407dd5; ?>
<?php unset($__componentOriginal58646d384ffaac20b67dbbbd26407dd5); ?>
<?php endif; ?>
        </div>
    <?php /**PATH /Users/afyfbadreddine/Herd/mywave/storage/framework/views/03d5e7cc7c1998d80587239debe7a2bd.blade.php ENDPATH**/ ?>