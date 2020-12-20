# Hot News

This is a powerful blog, I try to build the blog more beautiful, more convenient. 

`Laravel 5.*` and `Vuejs 2.*` combined with the establishment of a good response and quickly dashboard, the dashboard made through the `Vuejs` component development.

I believe it will be better and better. If you are interested in this, you can join and enjoy it.

## Basic Features

- Manage users, articles, discussions and media
- Statistical tables
- Categorize articles
- Label classification
- Content moderation
- Own comments system
- Multi-language switching
- Markdown Editor
- Roles & Permissions
- and more...

[Hot News](https://github.com/tienbm98/blog-laravel-vuejs.git) Laravel 7.*

## Server Requirements

- PHP >= 7.2.5
- Node >= 6.x
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Preview

![New Blog](https://cdn.pigjian.com/cover/2018/09/07/d2T4cAjTagf5L1rXH1FjLsFkJVffsPIGPkHEl2A5.jpg)

![New Blog](https://cdn.pigjian.com/cover/2018/09/07/4b7ExtB6NHZVh8n5KnW2673Ej6gwtLm1SUAubtpa.jpg)

## Install

### 1. Clone the source code or create new project.

```shell
git clone https://github.com/tienbm98/blog-laravel-vuejs.git
```

### 2. Set the basic config

```shell
cp .env.example .env
```

Edit the `.env` file and set the `database` and other config for the system after you copy the `.env`.example file.

### 2. Install the extended package dependency.

Install the `Laravel` extended repositories: 

```shell
composer install
```

Install the `Vuejs` extended repositories: 

```shel
npm install
```

Compile the js code: 

```shel
npm run dev

// OR

npm run watch

// OR

npm run production
```

### 3. Run the blog install command, the command will run the `migrate` command and generate test data.

```shell
php artisan blog:install
```

## Thanks

- [overtrue](https://github.com/overtrue)
- [Laravist](https://www.laravist.com/)
- [Laravel - China](https://laravel-china.org/)
