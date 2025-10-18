<div
    x-data="{
        text_color: <?php if ((object) ('text_color') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('text_color'->value()); ?>')<?php echo e('text_color'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('text_color'); ?>')<?php endif; ?>,
        button_color: <?php if ((object) ('button_color') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('button_color'->value()); ?>')<?php echo e('button_color'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('button_color'); ?>')<?php endif; ?>,
        button_text_color: <?php if ((object) ('button_text_color') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('button_text_color'->value()); ?>')<?php echo e('button_text_color'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('button_text_color'); ?>')<?php endif; ?>,
        input_text_color: <?php if ((object) ('input_text_color') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('input_text_color'->value()); ?>')<?php echo e('input_text_color'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('input_text_color'); ?>')<?php endif; ?>,
        input_border_color: <?php if ((object) ('input_border_color') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('input_border_color'->value()); ?>')<?php echo e('input_border_color'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('input_border_color'); ?>')<?php endif; ?>
    }"
 class="max-w-xl">
    <div class="pb-5 mb-5 border-b border-zinc-200">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Text Color</label>
        </div>
        <div class="w-full h-auto">
            <input type="color" value="#000000" wire:model.live="text_color" />
        </div>
    </div>
    <div class="pb-5 mb-5 border-b border-zinc-200">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Button Color</label>
        </div>
        <div class="w-full h-auto">
            <input type="color" value="#000000" wire:model.live="button_color" />
        </div>
    </div>
    <div class="pb-5 mb-5 border-b border-zinc-200">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Button Text Color</label>
        </div>
        <div class="w-full h-auto">
            <input type="color" value="#000000" wire:model.live="button_text_color" />
        </div>
    </div>
    <div class="pb-5 mb-5 border-b border-zinc-200">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Input Text Color</label>
        </div>
        <div class="w-full h-auto">
            <input type="color" value="#000000" wire:model.live="input_text_color" />
        </div>
    </div>
    <div class="pb-5">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Input Border Color</label>
        </div>
        <div class="w-full h-auto">
            <input type="color" value="#000000" wire:model.live="input_border_color" />
        </div>
    </div>
    
</div><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/livewire/setup/color.blade.php ENDPATH**/ ?>