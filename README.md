## 動作環境

以下で動くことを確認

- macOS Ventura 13.6.3
- Docker version 24.0.2

## Docker 環境構築

```
docker build -t sample-php .
docker run -it --name sample-php-container -v $(pwd):/usr/src/myapp sample-php
composer install # 初回だけ必要
```

## テスト実行

```
docker run -it --name sample-php-container -v $(pwd):/usr/src/myapp sample-php
./vendor/bin/phpunit
```
