<?php
    $containerParentClasses = match(config('devdojo.auth.appearance.alignment.container')){
        'left' => 'sm:ml-0 h-full',
        'center' => 'sm:mx-auto',
        'right' => 'sm:mr-0 h-full',
    };

    $containerClasses = match(config('devdojo.auth.appearance.alignment.container')){
        'left' => 'sm:border-r',
        'center' => 'sm:border sm:rounded-xl',
        'right' => 'sm:border-l',
    };
?>

<div id="auth-container-parent" class="relative w-full sm:max-w-md <?php echo e($containerParentClasses); ?>">
    <div id="auth-container" class="flex relative top-0 z-20 flex-col justify-center items-stretch px-10 py-8 w-full h-screen bg-white border-gray-200 sm:top-auto sm:h-full <?php echo e($containerClasses); ?>">
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/src/../resources/views/components/elements/container.blade.php ENDPATH**/ ?>