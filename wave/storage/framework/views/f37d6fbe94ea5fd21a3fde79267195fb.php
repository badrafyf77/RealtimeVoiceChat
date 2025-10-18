<section>
    <?php if (isset($component)) { $__componentOriginale1ab5bbebb00493b37a64682853d7e7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1ab5bbebb00493b37a64682853d7e7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::marketing.elements.heading','data' => ['level' => 'h2','title' => 'Chart Your Course','description' => 'Set sail and discover the riches of our value-packed plans, meticulously designed to offer you the very best features for less on your SaaS expedition. ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('marketing.elements.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['level' => 'h2','title' => 'Chart Your Course','description' => 'Set sail and discover the riches of our value-packed plans, meticulously designed to offer you the very best features for less on your SaaS expedition. ']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale1ab5bbebb00493b37a64682853d7e7d)): ?>
<?php $attributes = $__attributesOriginale1ab5bbebb00493b37a64682853d7e7d; ?>
<?php unset($__attributesOriginale1ab5bbebb00493b37a64682853d7e7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale1ab5bbebb00493b37a64682853d7e7d)): ?>
<?php $component = $__componentOriginale1ab5bbebb00493b37a64682853d7e7d; ?>
<?php unset($__componentOriginale1ab5bbebb00493b37a64682853d7e7d); ?>
<?php endif; ?>

    <div x-data="{ on: false, billing: '<?php echo e(get_default_billing_cycle()); ?>',
            toggleRepositionMarker(toggleButton){
                this.$refs.marker.style.width=toggleButton.offsetWidth + 'px';
                this.$refs.marker.style.height=toggleButton.offsetHeight + 'px';
                this.$refs.marker.style.left=toggleButton.offsetLeft + 'px';
            }
         }" 
        x-init="
                setTimeout(function(){ 
                    toggleRepositionMarker($refs.monthly); 
                    $refs.marker.classList.remove('opacity-0');
                    setTimeout(function(){ 
                        $refs.marker.classList.add('duration-300', 'ease-out');
                    }, 10); 
                }, 1);
        "
        class="w-full max-w-6xl mx-auto mt-12 mb-2 md:my-12" x-cloak>

        <?php if(has_monthly_yearly_toggle()): ?>
            <div class="relative flex items-center justify-start pb-5 -translate-y-2 md:justify-center">
                <div class="relative inline-flex items-center justify-center w-auto p-1 text-center -translate-y-3 border-2 rounded-full md:mx-auto border-zinc-900">
                    <div x-ref="monthly" x-on:click="billing='Monthly'; toggleRepositionMarker($el)" :class="{ 'text-white': billing == 'Monthly', 'text-zinc-900' : billing != 'Monthly' }" class="relative z-20 px-3.5 py-1 text-sm font-medium leading-6 rounded-full duration-300 ease-out cursor-pointer">
                        Monthly
                    </div>
                    <div x-ref="yearly" x-on:click="billing='Yearly'; toggleRepositionMarker($el)" :class="{ 'text-white': billing == 'Yearly', 'text-zinc-900' : billing != 'Yearly' }" class="relative z-20 px-3.5 py-1 text-sm font-medium leading-6 rounded-full duration-300 ease-out cursor-pointer">
                        Yearly
                    </div>
                    <div x-ref="marker" class="absolute left-0 z-10 w-1/2 h-full opacity-0" x-cloak>
                        <div class="w-full h-full rounded-full shadow-sm bg-zinc-900"></div>
                    </div>
                </div>  
            </div>
        <?php endif; ?>

        <div class="flex flex-col flex-wrap lg:flex-row lg:space-x-5">

            <?php $__currentLoopData = Wave\Plan::where('active', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $features = explode(',', $plan->features); ?>
                <div
                    
                    x-show="(billing == 'Monthly' && '<?php echo e($plan->monthly_price_id); ?>' != '') || (billing == 'Yearly' && '<?php echo e($plan->yearly_price_id); ?>' != '')" 
                    class="flex-1 w-full px-0 mx-auto mb-6 md:max-w-lg lg:mb-0" x-cloak>
                    <div class="flex flex-col lg:mb-10 h-full bg-white rounded-xl border-2  <?php if($plan->default): ?><?php echo e('border-zinc-900 lg:scale-105'); ?><?php else: ?><?php echo e('border-zinc-200'); ?><?php endif; ?> shadow-sm sm:mb-0">
                        <div class="px-8 pt-8">
                            <span class="px-4 py-1 text-base font-medium text-white rounded-full bg-zinc-900 text-uppercase" data-primary="indigo-700">
                                <?php echo e($plan->name); ?>

                            </span>
                        </div>

                        <div class="px-8 mt-5">
                            <span class="text-5xl font-bold">$<span x-text="billing == 'Monthly' ? '<?php echo e($plan->monthly_price); ?>' : '<?php echo e($plan->yearly_price); ?>'"></span></span>
                            <span class="text-xl font-bold text-zinc-500"><span x-text="billing == 'Monthly' ? '/mo' : '/yr'"></span></span>
                        </div>

                        <div class="px-8 pb-10 mt-3">
                            <p class="text-base leading-7 text-zinc-500"><?php echo e($plan->description); ?></p>
                        </div>

                        <div class="p-8 mt-auto rounded-b-lg bg-zinc-50">
                            <ul class="flex flex-col">
                                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="mt-1">
                                        <span class="flex items-center text-green-500">
                                            <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                                            <span class="text-zinc-700">
                                                <?php echo e($feature); ?>

                                            </span>
                                        </span>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                            <div class="mt-8">
                                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'w-full','tag' => 'a','href' => '/settings/subscription']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full','tag' => 'a','href' => '/settings/subscription']); ?>
                                    Get Started
                                 <?php echo $__env->renderComponent(); ?>
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
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <p class="w-full mt-0 mb-8 text-center text-zinc-500 sm:my-10">All plans are fully configurable in the Admin Area.</p>
</section><?php /**PATH /Users/afyfbadreddine/Herd/mywave/resources/themes/anchor/components/marketing/sections/pricing.blade.php ENDPATH**/ ?>