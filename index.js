//导入 express
const express = require('express')
//创建服务器实例
const app = express()
// 一定在路由之前，配置 cors 中间件 ，解决跨域问题
const cors = require('cors')
app.use(cors())
//导入路由模块
const router = require('./API路由模块')
//把路由模块，注册到 app 上
app.use('/api', router)
//启动服务器
app.listen(80, () => {
  console.log('http://127.0.0.1')
})