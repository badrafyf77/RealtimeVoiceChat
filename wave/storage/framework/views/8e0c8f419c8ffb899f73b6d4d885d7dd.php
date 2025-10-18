<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('settings.invoices');
?>

<?php
    $invoices = auth()->user()->invoices();
?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="relative">
            <?php if (isset($component)) { $__componentOriginal58646d384ffaac20b67dbbbd26407dd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58646d384ffaac20b67dbbbd26407dd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.settings-layout','data' => ['title' => 'Invoices','description' => 'Your past plan invoices']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.settings-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Invoices','description' => 'Your past plan invoices']); ?>
                <?php if(empty($invoices)): ?>
                    <?php if (isset($component)) { $__componentOriginald4b7f999cee0ea6f5d084dd252043a80 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.alert','data' => ['id' => 'dashboard_alert']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'dashboard_alert']); ?>No invoices available. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $attributes = $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $component = $__componentOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>
                    <p class="mt-3">You do not have any past invoices. When you subscribe to a plan you'll see your past invoices here.</p>
                <?php else: ?>
                    <div class="overflow-hidden border border-gray-200 rounded-lg">
                        <table class="min-w-full divide-y divide-zinc-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left uppercase bg-white text-zinc-500">Price</th>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left uppercase bg-white text-zinc-500">Date of Invoice</th>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-right uppercase bg-white text-zinc-500">PDF Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr wire:key="invoice-<?php echo e($invoice->id); ?>" class="<?php if($loop->index%2 == 0): ?><?php echo e('bg-zinc-50'); ?><?php else: ?><?php echo e('bg-white'); ?><?php endif; ?>">
                                        <td class="px-6 py-4 text-sm font-medium leading-5 text-left whitespace-no-wrap text-zinc-900">$<?php echo e($invoice->total); ?></td>
                                        <td class="px-6 py-4 text-sm font-medium leading-5 whitespace-no-wrap text-zinc-900"><?php echo e($invoice->created); ?></td>
                                        <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap">
                                            <a href="<?php echo e($invoice->download); ?>" <?php if(config("wave.billing_provider") == 'stripe'): ?> target="_blank" <?php endif; ?> class="mr-2 text-indigo-600 hover:underline focus:outline-none">Download</a>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>

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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH /Users/afyfbadreddine/Herd/mywave/resources/themes/anchor/pages/settings/invoices.blade.php ENDPATH**/ ?>