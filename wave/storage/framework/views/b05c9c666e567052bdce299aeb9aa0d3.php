<li <?php echo e($attributes); ?>>
    <a href="<?php echo e(url($pageLink)); ?>" <?php if(!($newTab ?? false)): ?><?php echo e('wire:navigate'); ?><?php else: ?><?php echo e('target="_blank'); ?><?php endif; ?> class="flex w-full gap-x-2 items-center px-2 py-1.5 text-sm font-medium leading-6 rounded-md <?php if(Request::is($pageLink)): ?><?php echo e('bg-zinc-200/70 text-zinc-900'); ?><?php else: ?><?php echo e('hover:bg-zinc-200/70 hover:text-zinc-900 text-zinc-500'); ?><?php endif; ?> group">
        
        <?php if($icon ?? false): ?>
            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => 'phosphor-'.e($icon).'-duotone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 shrink-0']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
        <?php endif; ?>
        
        <span class="truncate opacity-80"><?php echo e($text ?? ''); ?></span>
    </a>
</li><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/components/setup/sidebar-link-item.blade.php ENDPATH**/ ?>