# Upgrade laravel to 9 and config to vite
### Step 1
-  Replace updated composer.json to code below
```
{
    "name": "laravel/laravel",
    "type": "project",
    "description": "The Laravel Framework.",
    "keywords": ["framework", "laravel"],
    "license": "MIT",
    "require": {
        "php": "^8.0.2",
        "fruitcake/laravel-cors": "^2.0",
        "guzzlehttp/guzzle": "^7.2",
        "laravel/framework": "^9.0",
        "laravel/sanctum": "^3.0",
        "laravel/tinker": "^2.7",
        "laravel/ui": "^3.4"
    },
    "require-dev": {
        "fakerphp/faker": "^1.9.1",
        "laravel/sail": "^1.0.1",
        "mockery/mockery": "^1.4.4",
        "nunomaduro/collision": "^6.1", 
        "phpunit/phpunit": "^9.5.10"
    },
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi"
        ],
        "post-update-cmd": [
            "@php artisan vendor:publish --tag=laravel-assets --ansi --force"
        ],
        "post-root-package-install": [
            "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "@php artisan key:generate --ansi"
        ]
    },
    "extra": {
        "laravel": {
            "dont-discover": []
        }
    },
    "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true
    },
    "minimum-stability": "dev",
    "prefer-stable": true
}
```
### Step 2
- Run command below
```
composer update
```
### Step 3 
- Run command below
```
npm install --save-dev vite laravel-vite-plugin
```
### Step 4 
- Update package.json in scripts to code below
```
"scripts": {
    "dev": "vite",
    "build": "vite build"
}
```
### Step 5
- Remove webpack.mix.js
```
rm webpack.mix.js
```
### Step 6 
- Install bootstap
```
npm install bootstrap
```
- Install node_modules
```
npm install
```
### Step 7 
- Create or update vite.config.js and following content below
```
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),

    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },

});
```
### Step 8
- Update resources/js/bootstrap.js
```

import _ from 'lodash';
window._ = _;

import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
```
- Update resources/js/app.js
```
import './bootstrap';
import '../sass/app.scss'
```
### Step 9
- Update .env
##### From 
```
MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
##### To 
```
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
### Step 10 
- Update Blade File to Load Assets via Vite
```
<head>
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
```
- Run Vite
```
npm run build
```
### Step 11
- Run Project
```
php artisan serve
```
