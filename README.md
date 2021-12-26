# FindMy

### Local install

```bash
cd qlico
docker-compose build --pull --no-cache
cd ..
make up
make shell
composer install
```

### Installation in project

```bash
composer require jesperveldhuizen/findmyiphone
```

### Usage

See test.php for example.

```bash
php test.php :email :password
```
