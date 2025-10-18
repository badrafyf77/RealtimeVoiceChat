<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Devdojo\Auth\Helper;
use Devdojo\ConfigWriter\ArrayFile;

?>


        <section class="relative px-4 py-5 mx-auto w-full max-w-screen-lg">
            <x-auth::setup.full-screen-loader wire:target="update" />
            <x-auth::setup.heading title="Settings" description="Adjust specific authentication features and enable/disable functionality." />
            <div class="relative w-full">
                @if(!file_exists(base_path('config/devdojo/auth/settings.php')))
                    <x-auth::setup.config-notification />
                @else
                    <div class="mt-10">
                        @foreach((array)$this->settings as $key => $value)
                            <div class="pb-5 mb-5 border-b border-zinc-200">
                                @php
                                    $description = ($this->descriptions->settings[$key] ?? '');
                                @endphp
                                @if(is_bool($value))
                                    <x-auth::setup.checkbox-title-description wire:change="update('{{ $key }}', $el.checked)" name="{{ $key }}" :$key :title="Helper::convertSlugToTitle($key)" :$description :checked="($value ? true : false)" />
                                @else
                                    <x-auth::setup.input :id="$key" wire:blur="update('{{ $key }}', $el.value)" :$description :label="Helper::convertSlugToTitle($key)" type="text" name="{{ $key }}" value="{{ $value }}" />
                                @endif
                                
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    