The Cyber Cooperative Website

## About

This is a fully custom website that uses the [Laravel](https://laravel.com/) framework, and [Wink](https://github.com/themsaid/wink) for the blog.

The UI is mostly made from [Tailwind UI](https://tailwindui.com/) components.

## Installation
From the project root:

```
composer install
php artisan wink:install
php artisan storage:link
```

Then copy over the example .env file:

```
cp .env.example .env
```

Make any changes to this file that you need to make (namely the database settings). You'll also need to add a `WINK_DB_CONNECTION` setting that is set to the database name. For example: `WINK_DB_CONNECTION=mysql`.

Then we run database migrations:

```
php artisan migrate
php artisan wink:migrate (write down the email and password that it gives you!)
```

Generate an app key:

```
php artisan key:generate
```

NPM install and build:

```
npm install
npm run build (or if you're in a dev environment, npm run dev)
```

## Creating blogs

- Navigate to `/wink` to log into the admin panel, from there it's self explanatory
- You'll need to use the credentials that you wrote down from the installation for the first attempt. Once you're authenticated, change your email/password/etc. to whatever you desire.
- The blog pages require you to set a featured image, excerpt, etc. on each blog.
- The "author" sections on the blog pages will take the details from the Wink author user, so it's best to create an author account for each author, including a profile picture and name.
