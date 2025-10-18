<?php

use Filament\Forms\Components\TextInput;

?>

 
        <div class="relative">
            <x-app.settings-layout
                title="Security"
                description="Update and change your current account password."
            >
                <form wire:submit="save" class="w-full max-w-lg">
                    {{ $this->form }}
                    <div class="w-full pt-6 text-right">
                        <x-button type="submit">Save</x-button>
                    </div>
                </form>

            </x-app.settings-layout>
        </div>
    