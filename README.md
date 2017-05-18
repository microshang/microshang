# microshang
这是一款基于 Laravel 5.4 + Vue.js 2.x 的微商城网店系统。

## 安装
1. 克隆代码到自己想要的安装目录

    ```shell
    git clone https://github.com/microshang/microshang
    ```

2. 安装 composer 依赖包

    ```shell
    composer install -vvv
    ```

3. 复制根目录下 .env.example 文件为 .env

    ```shell
    cp ./.env.example .env
    ```

4. 生成 APP_KEY

    ```shell
    php artisan key:generate
    ```

5. 创建数据库，然后在 .env 文件中配置数据库、邮件等相关参数

6. 生成数据表

    ```shell
    php artisan migrate --seed
    ```
> 如果不需要填充测试数据，则后面的 --seed 选项可省略

7.运行
    ```shell
    php artisan serve
    ```

## 二次开发

本项目使用 Laravel 5.4 配套的 Laravel-mix 整合前端资源，因此需要有一个可用的 node.js 环境，包括 npm 等。

1. 使用 npm 安装相关前端依赖

    ```shell
    npm install
    ```

2. 运行 npm watch 命令监听变化

    ```shell
    npm watch
    ```

## 贡献代码

欢迎反馈 BUG、提出建议或者提交 pull request

**PHP 代码请务必遵守 PSR 规范。前端代码请使用 eslint 进行规范检查**



Licensing
=========
Microshang is licensed under the Apache License, Version 2.0. See
[LICENSE](https://github.com/microshang/microshang/blob/master/LICENSE) for the full
license text.