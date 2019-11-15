# PHP kata bootstrap using Docker

## How to

### Build
```sh
make build
```

### Run tests
```sh
make test
```

### Run tests with coverage
```sh
make coverage
```

### Clean docker images and containers
```sh
make clean
```

## Configure PhpStorm debug

Create a server with name `docker-php-kata`:

Preferences > Languages & Frameworks > PHP > Server > Add

- Name: `docker-php-kata`
- Host: `localhost`
- Path mappings: `[YOUR-PROJECT_DIR]` - `/var/kata`
