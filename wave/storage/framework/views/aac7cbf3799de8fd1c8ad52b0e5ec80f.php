<section class="w-full">
    <?php if (isset($component)) { $__componentOriginale1ab5bbebb00493b37a64682853d7e7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1ab5bbebb00493b37a64682853d7e7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::marketing.elements.heading','data' => ['level' => 'h2','title' => 'Oceans of Approval','description' => 'Find out why users are on board with Wave, through their own words and success tales.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('marketing.elements.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['level' => 'h2','title' => 'Oceans of Approval','description' => 'Find out why users are on board with Wave, through their own words and success tales.']); ?>
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
    <ul role="list" class="grid grid-cols-1 gap-12 py-12 mx-auto max-w-2xl lg:max-w-none lg:grid-cols-3">
        <li>
            <figure class="flex flex-col justify-between h-full">
                <blockquote class="">
                    <p class="text-sm sm:text-base font-medium text-zinc-500">
                        Wave's ready-to-use features sped up our launch significantly. Its authentication and subscription tools are particularly impressive and user-friendly.
                    </p>
                </blockquote>
                <figcaption class="flex flex-col justify-between mt-6">
                    <img alt="#_" src="https://cdn.devdojo.com/images/june2024/adam.jpeg" class="object-cover rounded-full grayscale size-14">
                    <div class="mt-4">
                        <div class="font-medium text-zinc-900">Adam Wathan</div>
                        <div class="mt-1 text-sm text-zinc-500">
                            Creator of Tailwind CSS
                        </div>
                    </div>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure class="flex flex-col justify-between h-full">
                <blockquote class="">
                    <p class="text-sm sm:text-base font-medium text-zinc-500">
                        Wave transformed our development workflow with its excellent API and profile management, saving us valuable time.
                    </p>
                </blockquote>
                <figcaption class="flex flex-col justify-between mt-6">
                    <img alt="#_" src="https://cdn.devdojo.com/images/june2024/caleb.jpeg" class="object-cover rounded-full grayscale size-14">
                    <div class="mt-4">
                        <div class="font-medium text-zinc-900">Caleb Porzio</div>
                        <div class="mt-1 text-sm text-zinc-500">
                            Creator of Livewire & Alpine
                        </div>
                    </div>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure class="flex flex-col justify-between h-full">
                <blockquote class="">
                    <p class="text-sm sm:text-base font-medium text-zinc-500">
                        Wave is an amazing SaaS Starter kit. The team here are Laravel leverages Wave all the time for many projects.
                    </p>
                </blockquote>
                <figcaption class="flex flex-col justify-between mt-6">
                    <img alt="#_" src="https://cdn.devdojo.com/images/june2024/taylor.jpeg" class="object-cover rounded-full grayscale size-14">
                    <div class="mt-4">
                        <div class="font-medium text-zinc-900">Taylor Otwell</div>
                        <div class="mt-1 text-sm text-zinc-500">
                            Founder and Creator of Laravel
                        </div>
                    </div>
                </figcaption>
            </figure>
        </li>
    </ul>
</section><?php /**PATH /Users/afyfbadreddine/Herd/mywave/resources/themes/anchor/components/marketing/sections/testimonials.blade.php ENDPATH**/ ?>