# Simple CI 4 Skeleton

After Cloning repository run this command for installing all dependencies

```
composer install
```

Then copy .env.example with this command

```
cp .env.example .env
```

Set the Base URL and Do not forget to create Database, then set database configuration in .env. Run this command for starting local development server

```
php spark serve
```

For getting list of command that could be used in code igniter, run this command

```
php spark --help
```