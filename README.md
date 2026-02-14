# Pigly

## 環境構築

- リポジトリをクローン  
  ```bash
  git clone git@github.com:e-misora/test-Pigry.git  
  ```
  ```bash
  cd test-Pigry  
  ```
- docker のビルド 起動  
  ```bash
  docker-compose up -d --build  
  ```
- Laravel パッケージのインストール  
  ```bash
  docker-compose exec php bash  
  ```
  ```bash
  composer install  
  ```
- 環境変数を設定  
  ```bash
  cd src  
  ```
  ```bash
  cp .env.example .env  
  ```
  .env ファイルを編集して必要な値を設定  

  ```bash:.env  
  DB_HOST=mysql  
  DB_DATABASE=laravel_db  
  DB_USERNAME=laravel_user  
  DB_PASSWORD=laravel_pass  
  ```

- アプリケーションを実行するためのキーを作成  
  ```bash
  docker-compose exec php bash  
  ```
  ```bash
  php artisan key:generate  
  ```
- マイグレーション実行  
  ```bash
  php artisan migrate  
  ```
- シーディング実行  
  ```bash
  php artisan db:seed  
  ```

## 使用技術（実行環境）

- php:
- Laravel:
- MySQL:8.0.26
- nginx:1.21.1

## URL

- ユーザー登録画面  
  http://localhost/register
- トップページ  
  http://localhost/weight_logs
