# micro.phalcon
[![Total Downloads](https://poser.pugx.org/limingxinleo/phalcon-project-micro/downloads)](https://packagist.org/packages/limingxinleo/phalcon-project-micro)
[![Latest Stable Version](https://poser.pugx.org/limingxinleo/phalcon-project-micro/v/stable)](https://packagist.org/packages/limingxinleo/phalcon-project-micro)
[![Latest Unstable Version](https://poser.pugx.org/limingxinleo/phalcon-project-micro/v/unstable)](https://packagist.org/packages/limingxinleo/phalcon-project-micro)
[![License](https://poser.pugx.org/limingxinleo/phalcon-project-micro/license)](https://packagist.org/packages/limingxinleo/phalcon-project-micro)



[Phalcon 官网](https://docs.phalconphp.com/zh/latest/index.html)

## 安装方法 ##
~~~
git clone --depth=1 git://github.com/phalcon/cphalcon.git
cd cphalcon/build
sudo ./install

vim etc/php.ini 
extension=phalcon.so

composer create-project limingxinleo/phalcon-project-micro demo
~~~

## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─app                   项目文件
│ ├─config              配置文件
│ ├─library             第三方库目录
│ ├─models              模型目录
│ ├─services            自定义服务目录
│ ├─views               视图目录
│ └─app.php             项目应用
├─public                资源目录
│ ├─app                 项目资源目录
│ ├─lib                 第三方资源目录
│ ├─.htaccess           apache重写文件
│ └─index.php           入口文件
├─storage               项目写入仓库
│ ├─cache               项目缓存目录
│ │ ├─data              数据缓存目录
│ │ └─view              视图缓存目录
│ ├─log                 日志目录
│ └─migrations          数据库迁移目录
├─vendor                第三方类库目录（Composer依赖库）
├─.env                  env支持配置文件
├─composer.json         composer定义文件
├─README.md             README文件
├─LICENSE               授权说明文件
~~~

## 注意事项 ##
* 使用模型进行信息存储时，因为模型元数据的问题，非空字段会匹配非空、非空字符串两个条件，致使一些空字符串字段不赋默认非空字符串值的情况下，保存失败！
* 框架默认以文件的方式缓存元数据，一旦表结构被修改，请手动清理storage/meta文件下的元数据
* 使用Phalcon 开发工具的时候，需要维护config/config.ini配置文件

## Composer 国内镜像
~~~
"repositories": {
        "packagist": {
            "type": "composer",
            "url": "https://packagist.phpcomposer.com"
        }
    }
~~~


