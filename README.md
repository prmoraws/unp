
# Setup Docker Laravel 11 com PHP 8.3


### Passo a passo
Clone Repositório
```sh
git clone -b laravel-11-with-php-8.3 https://github.com/especializati/setup-docker-laravel.git unp
```
```sh
cd unp
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Crie o Arquivo .env
```sh
code .
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```
Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Instale as dependências do Jetstream
```sh
composer require laravel/jetstream
php artisan jetstream:install livewire --dark
npm install
npm run build
php artisan migrate
php artisan livewire:publish --config
```

Portugues BR
```sh
php artisan lang:publish
composer require lucascudo/laravel-pt-br-localization --dev
php artisan vendor:publish --tag=laravel-pt-br-localization
```
Configure o Framework para utilizar 'pt_BR' como linguagem padrão
// Altere Linha 85 do arquivo config/app.php para:
'locale' => 'pt_BR'

// Para versões 11.x altere a linha 8 do arquivo .env
APP_LOCALE=pt_BR

Github pull para baixar do git, e push para subir.
```sh
git pull origin main
git push -u origin main

```
Ativar Storage Link

```sh
php artisan storage:link
```
imagem mudanças env
```sh
FILESYSTEM_DRIVER=public
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)
