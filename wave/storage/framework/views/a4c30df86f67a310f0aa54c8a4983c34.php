<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Devdojo\Auth\Helper;

middleware(['view-auth-setup']);
name('auth.setup.appearance');

new class extends Component
{
    public $appearance;
    public $descriptions;
    private $config;

    public function mount(){
        $this->appearance = (object)config('devdojo.auth.appearance');
        $this->logo = $this->appearance->logo;
        //dd($this->logo);
        $this->descriptions = (object)config('devdojo.auth.descriptions');
    }

    private function update($key, $value){
        \Config::write('devdojo.auth.appearance.' . $key, $value);
        Artisan::call('config:clear');
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
[$__name, $__params] = $__split("volt-anonymous-fragment-eyJuYW1lIjoiYXV0aC5zZXR1cC5hcHBlYXJhbmNlIiwicGF0aCI6InZlbmRvclwvZGV2ZG9qb1wvYXV0aFwvcmVzb3VyY2VzXC92aWV3c1wvcGFnZXNcL2F1dGhcL3NldHVwXC9hcHBlYXJhbmNlLmJsYWRlLnBocCJ9", Livewire\Volt\Precompilers\ExtractFragments::componentArguments([...get_defined_vars(), ...array (
)]));

$__html = app('livewire')->mount($__name, $__params, 'lw-1956073680-0', $__slots ?? [], get_defined_vars());

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
<?php /**PATH /Users/afyfbadreddine/Herd/mywave/vendor/devdojo/auth/resources/views/pages/auth/setup/appearance.blade.php ENDPATH**/ ?>