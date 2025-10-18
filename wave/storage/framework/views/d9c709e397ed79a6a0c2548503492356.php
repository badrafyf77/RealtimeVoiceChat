<section>
    <div x-data="{ 
            billing_cycle_available: <?php if ((object) ('billing_cycle_available') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('billing_cycle_available'->value()); ?>')<?php echo e('billing_cycle_available'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('billing_cycle_available'); ?>')<?php endif; ?>,
            billing_cycle_selected: <?php if ((object) ('billing_cycle_selected') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('billing_cycle_selected'->value()); ?>')<?php echo e('billing_cycle_selected'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('billing_cycle_selected'); ?>')<?php endif; ?>,
            toggleButtonClicked(el, month_or_year){
                this.toggleRepositionMarker(el);
                this.billing_cycle_selected = month_or_year;
            },
            toggleRepositionMarker(toggleButton){
                this.$refs.marker.style.width=toggleButton.offsetWidth + 'px';
                this.$refs.marker.style.height=toggleButton.offsetHeight + 'px';
                this.$refs.marker.style.left=toggleButton.offsetLeft + 'px';
            },
            fullScreenLoader: false,
            fullScreenLoaderMessage: 'Loading'
        }"
        @loader-show.window="fullScreenLoader = true"
        @loader-hide.window="fullScreenLoader = false"
        @loader-message.window="fullScreenLoaderMessage = event.detail.message" 
        class="flex items-start justify-center w-full h-full rounded-xl">
        <div class="flex flex-col flex-wrap w-full mx-auto lg:max-w-4xl">
            <?php if (isset($component)) { $__componentOriginal2a090fb495f7fe31ba680ae89e646608 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a090fb495f7fe31ba680ae89e646608 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f8d4ad43c2fa18c0fe95df42d6464da7::billing.billing_cycle_toggle','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billing.billing_cycle_toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a090fb495f7fe31ba680ae89e646608)): ?>
<?php $attributes = $__attributesOriginal2a090fb495f7fe31ba680ae89e646608; ?>
<?php unset($__attributesOriginal2a090fb495f7fe31ba680ae89e646608); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a090fb495f7fe31ba680ae89e646608)): ?>
<?php $component = $__componentOriginal2a090fb495f7fe31ba680ae89e646608; ?>
<?php unset($__componentOriginal2a090fb495f7fe31ba680ae89e646608); ?>
<?php endif; ?>

            <div class="h-full space-y-5">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $features = explode(',', $plan->features); ?>
                    <div 
                        
                        x-show="(billing_cycle_selected == 'month' && '<?php echo e($plan->monthly_price_id); ?>' != '') || (billing_cycle_selected == 'year' && '<?php echo e($plan->yearly_price_id); ?>' != '')" 
                        class="w-full max-w-full px-0 mx-auto group">
                        <div class="flex flex-col mb-10 h-full bg-white dark:bg-neutral-800 rounded-xl ease-out duration-300 border-2 border-gray-200 dark:border-neutral-700 shadow-sm sm:mb-0 group-hover:border-<?php echo e(config('devdojo.billing.style.color')); ?>-500">
                            <div class="p-6 lg:p-8">
                                <div class="relative text-gray-500 dark:text-neutral-400">
                                    <span lass="text-lg md:text-xl font-semibold rounded-full">
                                        <?php echo e($plan->name); ?> Plan
                                        <?php echo e($billing_cycle_selected); ?>

                                    </span>
                                </div>

                                <div class="my-3 space-y-2 md:my-5">
                                    <div class="relative">
                                        <span class="text-3xl font-bold lg:text-4xl dark:text-neutral-200">$<span x-text="billing_cycle_selected == 'month' ? '<?php echo e($plan->monthly_price); ?>' : '<?php echo e($plan->yearly_price); ?>'"></span></span>
                                        <span class="inline-block text-xl font-bold text-gray-500 dark:text-neutral-200 -translate-y-0.5 lg:text-2xl"><span x-text="billing_cycle_selected == 'month' ? '/mo' : '/yr'"></span></span>
                                    </div>
                                    <p class="text-sm leading-7 text-gray-500 dark:text-neutral-300 lg:text-base"><?php echo e($plan->description); ?></p>
                                </div>

                                <ul class="flex flex-col mt-5">
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="mt-1 text-sm">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                                                <span class="text-gray-600 dark:text-neutral-400">
                                                    <?php echo e($feature); ?>

                                                </span>
                                            </span>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </ul>
                            </div>
                            <div class="px-6 py-5 mt-auto bg-gray-50 dark:bg-neutral-700 rounded-b-xl">
                                <div class="flex items-center justify-end w-full">
                                    <div class="relative w-full md:w-auto">
                                        <!--[if BLOCK]><![endif]--><?php if(config('wave.billing_provider') == 'stripe'): ?>
                                            <?php if (isset($component)) { $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f8d4ad43c2fa18c0fe95df42d6464da7::billing.button','data' => ['wire:click' => 'redirectToStripeCheckout(\''.e($plan->id).'\')','wire:target' => 'redirectToPaymentProvider','rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billing.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'redirectToStripeCheckout(\''.e($plan->id).'\')','wire:target' => 'redirectToPaymentProvider','rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'']); ?>
                                                Subscribe to this Plan
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $attributes = $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $component = $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
                                        <?php else: ?>
                                            <!--[if BLOCK]><![endif]--><?php if($change): ?>

                                                <?php if (isset($component)) { $__componentOriginal0942a211c37469064369f887ae8d1cef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0942a211c37469064369f887ae8d1cef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.modal.index','data' => ['width' => 'lg','id' => 'change-plan-modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => 'lg','id' => 'change-plan-modal']); ?>
                                                     <?php $__env->slot('trigger', null, []); ?> 
                                                            <!--[if BLOCK]><![endif]--><?php if($plan->id == $userPlan->id): ?>
                                                                <?php if (isset($component)) { $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f8d4ad43c2fa18c0fe95df42d6464da7::billing.button','data' => ['rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'','xShow' => 'billing_cycle_selected == \''.e($userSubscription->cycle).'\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billing.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'','x-show' => 'billing_cycle_selected == \''.e($userSubscription->cycle).'\'']); ?>You are currently on this plan <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $attributes = $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $component = $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
                                                                <?php if (isset($component)) { $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f8d4ad43c2fa18c0fe95df42d6464da7::billing.button','data' => ['rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'','xShow' => 'billing_cycle_selected != \''.e($userSubscription->cycle).'\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billing.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'','x-show' => 'billing_cycle_selected != \''.e($userSubscription->cycle).'\'']); ?>Switch to this plan <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $attributes = $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $component = $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
                                                            <?php else: ?>
                                                                <?php if (isset($component)) { $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f8d4ad43c2fa18c0fe95df42d6464da7::billing.button','data' => ['rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billing.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'']); ?>Switch to this plan <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $attributes = $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $component = $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
                                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                     <?php $__env->endSlot(); ?>
                                                    <div x-data class="relative flex flex-col items-center justify-center">
                                                        <div 
                                                            <?php if($plan->id == $userPlan->id): ?>
                                                                x-show="billing_cycle_selected != '<?php echo e($userSubscription->cycle); ?>'" 
                                                            <?php endif; ?> class="relative flex flex-col items-center justify-center w-full">
                                                            <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-blue-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                                                                <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M63.8,199.37a72,72,0,0,1,128.4,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="200 128 224 152 248 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="8 128 32 104 56 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M32,104v24a96,96,0,0,0,174,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M224,152V128A96,96,0,0,0,50,72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                            </div>
                                                            <div class="mt-3 mb-5 text-center">
                                                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Switch Subscription Plans</h3>
                                                                <div class="max-w-xs mt-2">
                                                                    <p class="text-sm text-gray-500">Are you sure you want to change your current subscription plan?</p>
                                                                </div>
                                                            </div>
                                                            <div class="relative flex items-center w-full space-x-3">
                                                                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['xOn:click' => '$dispatch(\'close-modal\', { id: \'change-plan-modal\' })','color' => 'secondary','class' => 'w-1/2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-on:click' => '$dispatch(\'close-modal\', { id: \'change-plan-modal\' })','color' => 'secondary','class' => 'w-1/2']); ?>Cancel <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?> 
                                                                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['wire:click' => 'switchPlan(\''.e($plan->id).'\')','color' => 'info','class' => 'w-1/2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'switchPlan(\''.e($plan->id).'\')','color' => 'info','class' => 'w-1/2']); ?>Yes, Switch Plans <?php echo $__env->renderComponent(); ?>
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
                                                        <div 
                                                            x-show="billing_cycle_selected == '<?php echo e($userSubscription->cycle); ?>' && <?php echo e(($plan->id == $userPlan->id) ? 'true' : 'false'); ?>"
                                                            class="flex items-center justify-center">
                                                            <p>You are currently on this plan</p>
                                                        </div>
                                                    </div>
                                                    
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0942a211c37469064369f887ae8d1cef)): ?>
<?php $attributes = $__attributesOriginal0942a211c37469064369f887ae8d1cef; ?>
<?php unset($__attributesOriginal0942a211c37469064369f887ae8d1cef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0942a211c37469064369f887ae8d1cef)): ?>
<?php $component = $__componentOriginal0942a211c37469064369f887ae8d1cef; ?>
<?php unset($__componentOriginal0942a211c37469064369f887ae8d1cef); ?>
<?php endif; ?>

                                                
                                            <?php else: ?>
                                                <?php if (isset($component)) { $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f8d4ad43c2fa18c0fe95df42d6464da7::billing.button','data' => ['xOn:click' => '
                                                        if(billing_cycle_selected == \'month\'){ openCheckout(\''.e($plan->monthly_price_id).'\'); }
                                                        if(billing_cycle_selected == \'year\'){ openCheckout(\''.e($plan->yearly_price_id).'\'); }
                                                    ','rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billing.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-on:click' => '
                                                        if(billing_cycle_selected == \'month\'){ openCheckout(\''.e($plan->monthly_price_id).'\'); }
                                                        if(billing_cycle_selected == \'year\'){ openCheckout(\''.e($plan->yearly_price_id).'\'); }
                                                    ','rounded' => 'md','color' => ''.e(config('devdojo.billing.style.color')).'']); ?>
                                                    Subscribe to this Plan
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $attributes = $__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__attributesOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a)): ?>
<?php $component = $__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a; ?>
<?php unset($__componentOriginal6bc7caeb32b21f8fdc451e9d0ec39c8a); ?>
<?php endif; ?>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
        <div x-show="fullScreenLoader" class="flex fixed inset-0 justify-center items-center w-screen h-screen z-[999999999]">
            <div class="absolute inset-0 z-10 w-screen h-screen bg-black opacity-50"></div>
            <div class="flex relative z-20 justify-center items-center px-3.5 py-2 bg-black bg-opacity-30 rounded-full">
                <svg class="w-4 h-4 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                <p x-text="fullScreenLoaderMessage" class="ml-2 font-medium text-white"></p>
            </div>
        </div>
    </div>
    <?php if(config('wave.billing_provider') == 'paddle'): ?>
        <script>
            window.paddle_public_key = '<?php echo e(config("wave.paddle.public_key")); ?>';

            window.injectPaddleCDN = function(){
                // only inject if the Paddle object is undefined
                if (typeof Paddle == 'undefined') {
                    const script = document.createElement('script');
                    script.src = 'https://cdn.paddle.com/paddle/v2/paddle.js';
                    document.head.appendChild(script);
                }
            }

            window.whenPaddleIsReady = function(callback){
                let paddleCheckInterval = setInterval(function() {
                    if (typeof Paddle !== 'undefined') {
                        clearInterval(paddleCheckInterval);
                        callback();
                    }
                }, 200);
            }

            window.initialize = function(){
                Paddle.Initialize({
                    token: paddle_public_key,
                    checkout: {
                        settings: {
                            displayMode: "overlay",
                            frameStyle: "width: 100%; min-width: 312px; background-color: transparent; border: none;",
                            locale: "en",
                            allowLogout: false
                        }
                    },
                    eventCallback: function(data) {
                        if (data.name == "checkout.completed") {
                            verifyPaddleTransaction(data.data);
                        }
                    }
                });

                if("<?php echo e(config('wave.paddle.env')); ?>" == 'sandbox') {
                    Paddle.Environment.set('sandbox');
                }
            }

            window.verifyPaddleTransaction = function(data) {
                window.Livewire.dispatch('verifyPaddleTransaction', { transactionId: data.transaction_id });
            }

            window.savePaddleSubscription = function(transactionId){
                Paddle.Checkout.close();
                window.dispatchEvent(new CustomEvent('loader-show'));
                window.dispatchEvent(new CustomEvent('loader-message', { detail: { message: 'Verifying Subscription' }}));
                window.Livewire.dispatch('savePaddleSubscription', { transactionId: transactionId });
            }

            window.closeLoader = function(){
               window.dispatchEvent(new CustomEvent('loader-hide')); 
            }
            
            window.openCheckout = function(priceId) {
                if(paddle_public_key){
                    Paddle.Checkout.open({
                        items: [{
                            priceId: priceId,
                            quantity: 1
                        }],
                        customer: {
                            email: '<?php echo e(auth()->user()->email); ?>'
                        },
                    });
                } else {
                    alert('Paddle API keys and tokens must be set');
                }
            }

            document.addEventListener('livewire:navigated', () => {
                injectPaddleCDN();
                whenPaddleIsReady(function(){
                    initialize();
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                injectPaddleCDN();
                whenPaddleIsReady(function(){
                    
                    initialize();
                });
            });
        </script>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</section><?php /**PATH /Users/afyfbadreddine/Herd/mywave/wave/src/../resources/views/livewire/billing/checkout.blade.php ENDPATH**/ ?>