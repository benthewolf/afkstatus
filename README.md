## Stealth ME Baseplate

### How to install

Go to project directory and run:

`composer install`

Install npm dependencies

`npm install`

Build assets

`npm run build`

Copy env example

`cp .env.example .env`

Generate app key

`php artisan key:generate`

## Before pushing changes, please run:

Run code style fixer

`./vendor/bin/pint`

## Generate helper files

`php artisan ide-helper:generate`


## NOTE: 

`If you want to use custom header, please put '@section('headers') in the view.`
`Otherwise, leave it blank`
