# Test Pagerfanta with Sylius & Grid bundle

## Setup

```bash
$ composer install
$ bin/console doctrine:database:create
$ bin/console doctrine:migrations:migrate -n
$ bin/console doctrine:fixtures:load -n
```
