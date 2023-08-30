<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# JWT AUTH

Crear Rutas para autenticacion por JWT tymon/jwt-auth
https://jwt-auth.readthedocs.io/en/develop/laravel-installation/


## API Reference

#### Post Register User

```http
  POST /api/register
```

| Body | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **Required**. Your name user |
| `email` | `string` | **Required**. Your email user |
| `password` | `string` | **Required**. Your password user |
| `password_confirmation` | `string` | **Required**. Your password confirm user |

#### Post Login

```http
  POST /api/login/
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`      | `string` | **Required**. Email |
| `password`      | `string` | **Required**. password |

#### Response

Token JWT.

``` 
{
"token": "eyJ0eXAiOiJKV1QiLCJhb"
}
``` 



## Deployment

To deploy this project run

```bash
  php artisan serve
```


## Screenshots

![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)


## Tech Stack

**Server:** Laravel 10


## Support

For support, email fake@fake.com or join our Slack channel.


## Run Locally

Clone the project

```bash
  git clone https://link-to-project
```

Go to the project directory

```bash
  cd my-project
```

Install dependencies

```bash
  npm install
```

Start the server

```bash
  npm run start
```


## Documentation

[Documentation](https://linktodocumentation)

