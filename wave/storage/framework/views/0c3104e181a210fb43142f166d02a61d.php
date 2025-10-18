<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Devdojo\Auth\Helper;

middleware(['view-auth-setup']);
name('auth.setup.language');

new class extends Component
{
    public $language;
    public $descriptions;
    private $config;

    public function mount(){
        $this->language = (object)config('devdojo.auth.language');
    }

    public function update($key, $value){
        \Config::write('devdojo.auth.language.' . $key, $value);
        Artisan::call('config:clear');

        $this->language = (object)config('devdojo.auth.language');
        $this->js('savedMessageOpen()');
    }
};

?>

<?php if (isset($component)) { $__componentOriginalb712378cd8e1df1bb1322f561191a03a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb712378cd8e1df1bb1322f561191a03a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.layouts.setup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::layouts.setup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("volt-anonymous-fragment-eyJuYW1lIjoiYXV0aC5zZXR1cC5sYW5ndWFnZSIsInBhdGgiOiJ2ZW5kb3JcL2RldmRvam9cL2F1dGhcL3Jlc291cmNlc1wvdmlld3NcL3BhZ2VzXC9hdXRoXC9zZXR1cFwvbGFuZ3VhZ2UuYmxhZGUucGhwIn0=", Livewire\Volt\Precompilers\ExtractFragments::componentArguments([...get_defined_vars(), ...array (
)]));

$__html = app('livewire')->mount($__name, $__params, 'lw-2380835257-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb712378cd8e1df1bb1322f561191a03a)): ?>
<?php $attributes = $__attributesOriginalb712378cd8e1df1bb1322f561191a03a; ?>
<?php unset($__attributesOriginalb712378cd8e1df1bb1322f561191a03a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb712378cd8e1df1bb1322f561191a03a)): ?>
<?php $component = $__componentOriginalb712378cd8e1df1bb1322f561191a03a; ?>
<?php unset($__componentOriginalb712378cd8e1df1bb1322f561191a03a); ?>
<?php endif; ?>
<?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/resources/views/pages/auth/setup/language.blade.php ENDPATH**/ ?>