# Test Pagerfanta with Sylius & Grid bundle

## Setup

```bash
$ composer install
$ bin/console doctrine:database:create
$ bin/console doctrine:migrations:migrate -n
$ bin/console doctrine:fixtures:load -n
```

## Upgrade both Grid & Resource bundle

```bash
$ composer require sylius/grid-bundle "^1.11@beta" -W
$ composer require sylius/resource-bundle "^1.9" -W
```

It upgrade pagerfanta from 2.x to 3.x

```text
Pagerfanta ORM adapter is not available. Try running "composer require pagerfanta/doctrine-orm-adapter".
```

So this following command is required

```bash
$ composer require pagerfanta/doctrine-orm-adapter
```
