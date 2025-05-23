import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './app-modules/**/src/Livewire/**/*.php',
        './app-modules/**/src/Filament/**/*.php',
        './app-modules/**/resources/views/**/*.php',
    ],
}
