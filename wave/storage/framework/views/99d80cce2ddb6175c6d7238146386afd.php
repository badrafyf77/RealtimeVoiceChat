<?php
    use function Laravel\Folio\{middleware, name};
	middleware('auth');
    name('dashboard');
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
	<?php if (isset($component)) { $__componentOriginal08db35abc15b88d7e891883ef0dd6bed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08db35abc15b88d7e891883ef0dd6bed = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.container','data' => ['xData' => true,'class' => 'lg:space-y-6','xCloak' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => true,'class' => 'lg:space-y-6','x-cloak' => true]); ?>
        
		<?php if (isset($component)) { $__componentOriginald4b7f999cee0ea6f5d084dd252043a80 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.alert','data' => ['id' => 'dashboard_alert','class' => 'hidden lg:flex']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'dashboard_alert','class' => 'hidden lg:flex']); ?>This is the user dashboard where users can manage settings and access features. <a href="https://devdojo.com/wave/docs" target="_blank" class="mx-1 underline">View the docs</a> to learn more. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $attributes = $__attributesOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__attributesOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80)): ?>
<?php $component = $__componentOriginald4b7f999cee0ea6f5d084dd252043a80; ?>
<?php unset($__componentOriginald4b7f999cee0ea6f5d084dd252043a80); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal3f5896b1021d72739df36ad207fd93d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f5896b1021d72739df36ad207fd93d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.heading','data' => ['title' => 'Dashboard','description' => 'Welcome to an example application dashboard. Find more resources below.','border' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Dashboard','description' => 'Welcome to an example application dashboard. Find more resources below.','border' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f5896b1021d72739df36ad207fd93d6)): ?>
<?php $attributes = $__attributesOriginal3f5896b1021d72739df36ad207fd93d6; ?>
<?php unset($__attributesOriginal3f5896b1021d72739df36ad207fd93d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f5896b1021d72739df36ad207fd93d6)): ?>
<?php $component = $__componentOriginal3f5896b1021d72739df36ad207fd93d6; ?>
<?php unset($__componentOriginal3f5896b1021d72739df36ad207fd93d6); ?>
<?php endif; ?>

        <div class="flex flex-col w-full mt-6 space-y-5 md:flex-row lg:mt-0 md:space-y-0 md:space-x-5">
            <?php if (isset($component)) { $__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.dashboard-card','data' => ['href' => 'https://devdojo.com/wave/docs','target' => '_blank','title' => 'Documentation','description' => 'Learn how to customize your app and make it shine!','linkText' => 'View The Docs','image' => '/wave/img/docs.png']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.dashboard-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => 'https://devdojo.com/wave/docs','target' => '_blank','title' => 'Documentation','description' => 'Learn how to customize your app and make it shine!','link_text' => 'View The Docs','image' => '/wave/img/docs.png']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3)): ?>
<?php $attributes = $__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3; ?>
<?php unset($__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3)): ?>
<?php $component = $__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3; ?>
<?php unset($__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3); ?>
<?php endif; ?>
			<?php if (isset($component)) { $__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.dashboard-card','data' => ['href' => 'https://devdojo.com/questions','target' => '_blank','title' => 'Ask The Community','description' => 'Share your progress and get help from other builders.','linkText' => 'Ask a Question','image' => '/wave/img/community.png']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.dashboard-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => 'https://devdojo.com/questions','target' => '_blank','title' => 'Ask The Community','description' => 'Share your progress and get help from other builders.','link_text' => 'Ask a Question','image' => '/wave/img/community.png']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3)): ?>
<?php $attributes = $__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3; ?>
<?php unset($__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3)): ?>
<?php $component = $__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3; ?>
<?php unset($__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3); ?>
<?php endif; ?>
        </div>

		<div class="flex flex-col w-full mt-5 space-y-5 md:flex-row md:space-y-0 md:mb-0 md:space-x-5">
			<?php if (isset($component)) { $__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.dashboard-card','data' => ['href' => 'https://github.com/thedevdojo/wave','target' => '_blank','title' => 'Github Repo','description' => 'View the source code and submit a Pull Request','linkText' => 'View on Github','image' => '/wave/img/laptop.png']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.dashboard-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => 'https://github.com/thedevdojo/wave','target' => '_blank','title' => 'Github Repo','description' => 'View the source code and submit a Pull Request','link_text' => 'View on Github','image' => '/wave/img/laptop.png']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3)): ?>
<?php $attributes = $__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3; ?>
<?php unset($__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3)): ?>
<?php $component = $__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3; ?>
<?php unset($__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3); ?>
<?php endif; ?>
			<?php if (isset($component)) { $__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.dashboard-card','data' => ['href' => 'https://devdojo.com','target' => '_blank','title' => 'Resources','description' => 'View resources that will help you build your SaaS','linkText' => 'View Resources','image' => '/wave/img/globe.png']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.dashboard-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => 'https://devdojo.com','target' => '_blank','title' => 'Resources','description' => 'View resources that will help you build your SaaS','link_text' => 'View Resources','image' => '/wave/img/globe.png']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3)): ?>
<?php $attributes = $__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3; ?>
<?php unset($__attributesOriginal4b076528ded6bc2b3b1e40d6a6b28ad3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3)): ?>
<?php $component = $__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3; ?>
<?php unset($__componentOriginal4b076528ded6bc2b3b1e40d6a6b28ad3); ?>
<?php endif; ?>
		</div>

		<div class="mt-5 space-y-5">
			<?php if (\Illuminate\Support\Facades\Blade::check('subscriber')): ?>
				<p>You are a subscribed user with the <strong><?php echo e(auth()->user()->roles()->first()->name); ?></strong> role. Learn <a href="https://devdojo.com/wave/docs/features/roles-permissions" target="_blank" class="underline">more about roles</a> here.</p>
				<?php if (isset($component)) { $__componentOriginal9a9f3f321a937975b77160ca7e018993 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a9f3f321a937975b77160ca7e018993 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.message-for-subscriber','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.message-for-subscriber'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a9f3f321a937975b77160ca7e018993)): ?>
<?php $attributes = $__attributesOriginal9a9f3f321a937975b77160ca7e018993; ?>
<?php unset($__attributesOriginal9a9f3f321a937975b77160ca7e018993); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a9f3f321a937975b77160ca7e018993)): ?>
<?php $component = $__componentOriginal9a9f3f321a937975b77160ca7e018993; ?>
<?php unset($__componentOriginal9a9f3f321a937975b77160ca7e018993); ?>
<?php endif; ?>
			<?php else: ?>
				<p>This current logged in user has a <strong><?php echo e(auth()->user()->roles()->first()->name); ?></strong> role. To upgrade, <a href="<?php echo e(route('settings.subscription')); ?>" class="underline">subscribe to a plan</a>. Learn <a href="https://devdojo.com/wave/docs/features/roles-permissions" target="_blank" class="underline">more about roles</a> here.</p>
			<?php endif; ?>
			
			<?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
				<?php if (isset($component)) { $__componentOriginal847f27201f0329ceafe216f0154ab85e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal847f27201f0329ceafe216f0154ab85e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'c251953b1a88fe389db03cc215ac0345::app.message-for-admin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.message-for-admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal847f27201f0329ceafe216f0154ab85e)): ?>
<?php $attributes = $__attributesOriginal847f27201f0329ceafe216f0154ab85e; ?>
<?php unset($__attributesOriginal847f27201f0329ceafe216f0154ab85e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal847f27201f0329ceafe216f0154ab85e)): ?>
<?php $component = $__componentOriginal847f27201f0329ceafe216f0154ab85e; ?>
<?php unset($__componentOriginal847f27201f0329ceafe216f0154ab85e); ?>
<?php endif; ?>
			<?php endif; ?>
		</div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08db35abc15b88d7e891883ef0dd6bed)): ?>
<?php $attributes = $__attributesOriginal08db35abc15b88d7e891883ef0dd6bed; ?>
<?php unset($__attributesOriginal08db35abc15b88d7e891883ef0dd6bed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08db35abc15b88d7e891883ef0dd6bed)): ?>
<?php $component = $__componentOriginal08db35abc15b88d7e891883ef0dd6bed; ?>
<?php unset($__componentOriginal08db35abc15b88d7e891883ef0dd6bed); ?>
<?php endif; ?>
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
<?php /**PATH /Users/afyfbadreddine/Herd/mywave/resources/themes/anchor/pages/dashboard/index.blade.php ENDPATH**/ ?>