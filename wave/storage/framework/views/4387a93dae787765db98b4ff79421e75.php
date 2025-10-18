<?php

use function Laravel\Folio\{middleware, name};

?>



        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => ((auth()->guest()) ? 'container' : 'app.container')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

            <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->guest()): ?>
                <?php if (isset($component)) { $__componentOriginale1ab5bbebb00493b37a64682853d7e7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1ab5bbebb00493b37a64682853d7e7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::marketing.elements.heading','data' => ['level' => 'h2','class' => 'mt-5','title' => $this->user->name,'description' => 'Currently viewing ' . $this->user->username . '\'s profile','align' => 'left']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('marketing.elements.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['level' => 'h2','class' => 'mt-5','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->user->name),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Currently viewing ' . $this->user->username . '\'s profile'),'align' => 'left']); ?>
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
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <div class="flex lg:flex-row flex-col <?php if(auth()->guard()->guest()): ?> pb-20 pt-10 <?php endif; ?> space-x-5 h-full">
                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e3d114de5921d89744e77f15e151d085::card','data' => ['class' => 'flex flex-col justify-center items-center p-10 w-full lg:w-1/3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex flex-col justify-center items-center p-10 w-full lg:w-1/3']); ?>
                        <img src="<?php echo e($this->user->avatar()); ?>" class="w-24 h-24 rounded-full border-4 border-zinc-200">
                        <h2 class="mt-8 text-2xl font-bold dark:text-zinc-100"><?php echo e($this->user->name); ?></h2>
                        <p class="my-1 font-medium text-blue-blue"><?php echo e('@' . $this->user->username); ?></p>

                        <!--[if BLOCK]><![endif]--><?php if(auth()->check() && auth()->user()->isAdmin()): ?>
                            <a href="<?php echo e(route('impersonate', $this->user->id)); ?>" class="px-3 py-1 my-2 text-xs font-medium text-white rounded text-zinc-600 bg-zinc-200">Impersonate</a>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <p class="mx-auto max-w-lg text-base text-center text-zinc-500"><?php echo e($this->user->profile('about')); ?></p>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e3d114de5921d89744e77f15e151d085::card','data' => ['class' => 'lg:p-10 lg:text-left text-center lg:w-2/3 lg:flex-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'lg:p-10 lg:text-left text-center lg:w-2/3 lg:flex-2']); ?>
                    <p class="text-sm text-zinc-600">This is the application user profile page.</p>
                    <p class="mt-2 text-sm text-zinc-600">You can modify this file from your template <strong>resources/themes/anchor</strong> at:</p>
                    <code class="inline-block px-2 py-1 mt-2 font-mono text-sm font-medium bg-gray-100 rounded-md text-zinc-600"><?php echo e('pages/profile/[username].blade.php'); ?></code>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
            </div>

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
    <?php /**PATH /Users/afyfbadreddine/Herd/mywave/storage/framework/views/ce00e5a0e9a79bc634cf2521f924eeff.blade.php ENDPATH**/ ?>