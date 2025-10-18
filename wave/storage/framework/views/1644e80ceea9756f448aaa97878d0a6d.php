<a href="<?php echo e(url($link)); ?>" wire:navigate class="flex justify-start items-start px-8 py-7 bg-white rounded-lg border duration-300 ease-out text-zinc-500 hover:text-zinc-700 hover:bg-zinc-50 border-zinc-200 hover:border-zinc-300 group">
    <span class="flex-shrink-0 w-20 h-20">
        <?php echo $__env->make('auth::includes.setup.icons.' . ($icon ?? 'social-providers'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </span>
    
    <span class="flex flex-col items-start ml-5">
        <span class="mb-2 text-lg font-semibold text-zinc-700"><?php echo e($title ?? ''); ?></span>
        <span class="mb-1 text-sm text-left"><?php echo e($description ?? ''); ?></span>
    </span>
</a><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/components/setup/welcome-card.blade.php ENDPATH**/ ?>