<?php

use Filament\Forms\Components\TextInput;

?>

 
        <div class="relative">
            <?php if (isset($component)) { $__componentOriginal58646d384ffaac20b67dbbbd26407dd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58646d384ffaac20b67dbbbd26407dd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.settings-layout','data' => ['title' => 'API Keys','description' => 'Manage your API Keys']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.settings-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'API Keys','description' => 'Manage your API Keys']); ?>
                <div class="flex flex-col">
                    <form wire:submit="add" class="w-full max-w-lg">
                        <?php echo e($this->form); ?>

                        <div class="w-full pt-6 text-right">
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>Create New Key <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                        </div>
                    </form>
                    <hr class="my-8 border-zinc-200">
                    <?php if (isset($component)) { $__componentOriginal88f6216b6cb97c6584a3850f378285e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88f6216b6cb97c6584a3850f378285e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::elements.label','data' => ['class' => 'block text-sm font-medium leading-5 text-zinc-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('elements.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block text-sm font-medium leading-5 text-zinc-700']); ?>Current API Keys <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88f6216b6cb97c6584a3850f378285e9)): ?>
<?php $attributes = $__attributesOriginal88f6216b6cb97c6584a3850f378285e9; ?>
<?php unset($__attributesOriginal88f6216b6cb97c6584a3850f378285e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88f6216b6cb97c6584a3850f378285e9)): ?>
<?php $component = $__componentOriginal88f6216b6cb97c6584a3850f378285e9; ?>
<?php unset($__componentOriginal88f6216b6cb97c6584a3850f378285e9); ?>
<?php endif; ?>
                    <div class="pt-5">
                        <?php echo e($this->table); ?>

                    </div>
                </div>
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
    <?php /**PATH /Users/afyfbadreddine/Herd/mywave/storage/framework/views/414a102dd95bf52b6ae4110e074c2aaa.blade.php ENDPATH**/ ?>