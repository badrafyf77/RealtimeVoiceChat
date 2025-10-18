<?php

use Filament\Forms\Components\TextInput;

?>

 
        <div class="relative">
            <?php if (isset($component)) { $__componentOriginal58646d384ffaac20b67dbbbd26407dd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58646d384ffaac20b67dbbbd26407dd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.settings-layout','data' => ['title' => 'Security','description' => 'Update and change your current account password.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.settings-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Security','description' => 'Update and change your current account password.']); ?>
                <form wire:submit="save" class="w-full max-w-lg">
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
<?php $component->withAttributes(['type' => 'submit']); ?>Save <?php echo $__env->renderComponent(); ?>
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
    <?php /**PATH /Users/afyfbadreddine/Herd/mywave/storage/framework/views/b21b58dce8101c156222f4b2aa9768a4.blade.php ENDPATH**/ ?>