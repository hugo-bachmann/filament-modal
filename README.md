# filament-modal

### Installation

Ajouter le package à votre projet dans le fichier composer.json

```json
"repositories": [
        {
            "type": "path",
            "url": "../packages/filament-modal"
        }
    ]
```

Installer le package avec composer

```bash
composer require hugobachmann/filament-modal
```

Publier les migrations

```bash
php artisan vendor:publish --provider="Hugobachmann\FilamentModal\ModalServiceProvider" --tag="migrations"
```

Ajouter le plugin à Filament dans le fichier AdminPanelProvider.php

```php
->plugins([
   new FilamentModalPlugin(),
])
```

Afficher une modal dans une vue

```php
<livewire:filament-modal::modal :modal-id="{{ $modalId }}"/>
```
