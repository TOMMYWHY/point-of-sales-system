# Pos-mobile
---



## About post-mobile
+ 项目名称： Pos-mobile
+ 作者： Tommy Jiang
+ github：[github.com/TOMMYWHY] (https://github.com/TOMMYWHY)
+ 联系方式：tommywhy1989@gmail.com
+ 测试地址：

Pos-mobile 是一个简洁的手机店面 booking 系统，使用 Laravel5.7 与 Vue2 编写。 目的是清晰明了的显示手机维修过程中状态，以及记录客户信息与消费记录。


## 功能如下
+ Booking  -- 接机预订 
+ Customer info -- 顾客管理、新增
+ Product -- 产品管理
+ Task -- 维修任务管理
+ admin -- 后台管理


## 运行环境

* Nginx 1.8+
* PHP 7.0+
* Mysql 5.7+

## 开发部署
本项目使用 __laravel5.7__ 开发，本地使用 __Valet__ .

### 基础安装

1. github clone

```
git clone git@github.com:TOMMYWHY/point-of-sales-system.git
```

2. 配置本地环境

```
.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=point_of_sales
DB_USERNAME=
DB_PASSWORD=

创建数据库

```
3. 安装依赖

```
composer install
```

4. 生成测试数据

migrate + seed

```
$ php artisan migrate --seed
```

5. 前端框架安装
node  安装

```
// 运行
npm run dev
//开发环境 监控修改
npm run watch
```

## 链接入口
+ 首页地址：http://pos-mobile.test
+ 后台管理：

管理员帐号密码如下：

```
username：
pwd：
```
至此，安装完成~！






