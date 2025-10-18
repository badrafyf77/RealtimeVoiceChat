<?php
    if(isset($seo)){
        $seo = (is_array($seo)) ? ((object)$seo) : $seo;
    }
?>
<?php if(isset($seo->title)): ?>
    <title><?php echo e($seo->title); ?></title>
<?php else: ?>
    <title><?php echo e(setting('site.title', 'Laravel Wave') . ' - ' . setting('site.description', 'The Software as a Service Starter Kit built with Laravel')); ?></title>
<?php endif; ?>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<meta name="url" content="<?php echo e(url('/')); ?>">

<?php if (isset($component)) { $__componentOriginal82e3f864bb766fbb95cb0a10b750823c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal82e3f864bb766fbb95cb0a10b750823c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.favicon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('favicon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal82e3f864bb766fbb95cb0a10b750823c)): ?>
<?php $attributes = $__attributesOriginal82e3f864bb766fbb95cb0a10b750823c; ?>
<?php unset($__attributesOriginal82e3f864bb766fbb95cb0a10b750823c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal82e3f864bb766fbb95cb0a10b750823c)): ?>
<?php $component = $__componentOriginal82e3f864bb766fbb95cb0a10b750823c; ?>
<?php unset($__componentOriginal82e3f864bb766fbb95cb0a10b750823c); ?>
<?php endif; ?>


<?php if(isset($seo->title) && isset($seo->description) && isset($seo->image)): ?>
    <meta property="og:title" content="<?php echo e($seo->title); ?>">
    <meta property="og:url" content="<?php echo e(Request::url()); ?>">
    <meta property="og:image" content="<?php echo e($seo->image); ?>">
    <meta property="og:type" content="<?php if(isset($seo->type)): ?><?php echo e($seo->type); ?><?php else: ?><?php echo e('article'); ?><?php endif; ?>">
    <meta property="og:description" content="<?php echo e($seo->description); ?>">
    <meta property="og:site_name" content="<?php echo e(setting('site.title')); ?>">

    <meta itemprop="name" content="<?php echo e($seo->title); ?>">
    <meta itemprop="description" content="<?php echo e($seo->description); ?>">
    <meta itemprop="image" content="<?php echo e($seo->image); ?>">

    <?php if(isset($seo->image_w) && isset($seo->image_h)): ?>
        <meta property="og:image:width" content="<?php echo e($seo->image_w); ?>">
        <meta property="og:image:height" content="<?php echo e($seo->image_h); ?>">
    <?php endif; ?>
<?php endif; ?>

<meta name="robots" content="index,follow">
<meta name="googlebot" content="index,follow">

<?php if(isset($seo->description)): ?>
    <meta name="description" content="<?php echo e($seo->description); ?>">
<?php endif; ?>

<?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

<?php echo app('Illuminate\Foundation\Vite')(['resources/themes/anchor/assets/css/app.css', 'resources/themes/anchor/assets/js/app.js']); ?>
<?php /**PATH /Users/afyfbadreddine/Herd/mywave/resources/themes/anchor/partials/head.blade.php ENDPATH**/ ?>