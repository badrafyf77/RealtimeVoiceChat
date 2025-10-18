<?php

use Filament\Forms\Components\TextInput;

?>

 
        <div class="relative">
            <x-app.settings-layout
                title="API Keys"
                description="Manage your API Keys"
            >
                <div class="flex flex-col">
                    <form wire:submit="add" class="w-full max-w-lg">
                        {{ $this->form }}
                        <div class="w-full pt-6 text-right">
                            <x-button type="submit">Create New Key</x-button>
                        </div>
                    </form>
                    <hr class="my-8 border-zinc-200">
                    <x-elements.label class="block text-sm font-medium leading-5 text-zinc-700">Current API Keys</x-elements.label>
                    <div class="pt-5">
                        {{ $this->table }}
                    </div>
                </div>
            </x-app.settings-layout>
        </div>
    