<?php if (isset($component)) { $__componentOriginal4c1c5c7a9cb759b3852c337ba5e47e86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4c1c5c7a9cb759b3852c337ba5e47e86 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.elements.link','data' => ['href' => '/','style' => 'height:'.e($height ?? '30').'px; width:auto; display:block','ariaLabel' => ''.e(config('app.name')).' Logo']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::elements.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/','style' => 'height:'.e($height ?? '30').'px; width:auto; display:block','aria-label' => ''.e(config('app.name')).' Logo']); ?>
    <!--[if BLOCK]><![endif]--><?php if($isImage): ?>
        <img src="<?php echo e(url($imageSrc)); ?>" style="height:100%; width:auto" alt="" />
    <?php else: ?>
        <?php echo str_replace('<svg', '<svg style="height:100%; width:auto"', $svgString); ?>

    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4c1c5c7a9cb759b3852c337ba5e47e86)): ?>
<?php $attributes = $__attributesOriginal4c1c5c7a9cb759b3852c337ba5e47e86; ?>
<?php unset($__attributesOriginal4c1c5c7a9cb759b3852c337ba5e47e86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4c1c5c7a9cb759b3852c337ba5e47e86)): ?>
<?php $component = $__componentOriginal4c1c5c7a9cb759b3852c337ba5e47e86; ?>
<?php unset($__componentOriginal4c1c5c7a9cb759b3852c337ba5e47e86); ?>
<?php endif; ?><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/components/elements/logo.blade.php ENDPATH**/ ?>