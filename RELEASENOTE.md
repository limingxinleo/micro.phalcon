# Release Note For 1.6.*

## [Unreleased]
### Added

### Changed
* 更换LOGO
* 修改命名空间
* 修改根目录

### Fixed

## [1.6.0]
### Added
* 增加System\Init key 修改配置的数值
* 消息队列中，增加主线程操作数据的方法。但是不能实例化数据库类，会报mysql gone away错误。原因暂时不明。
* 增加WebSocket 抽象类
* System\Cron 脚本增加日志

### Changed
* 移动打包脚本配置到System\Package脚本中
* 删除limx\func 依赖
* 更新composer phalcon-utils 最低版本
