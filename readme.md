# RPX
> Version 1.0.3

Prepare your .env file there with database connection and other settings

## Getting Started

```
composer install
php artisan migrate --seed
php artisan key:generate
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public
```

```
php artisan serve
```

### Login

Email: admin@admin.com
Password: password

## Changelog

## [1.0.0] - 2018-07-18
### Added

- AJAX Datatables
- User Logs
- Teams Multi-Tenancy
- Internal Messages
- Internal Notifications
- Content Management
- Language Switcher
- Mega Search

## [1.0.2] - 2018-07-20
### fixerrors

- Reports

## [1.0.3] - 2018-07-25
### fixerrors

- Reports
- Page Home