//导入 express
const express = require('express')
// 2. 创建路由对象
const router = express.Router()
//在这里挂载对应路由
router.get('/get', (req,res) => {
  //通过 req.query 获取客户端通过查询字符串，发送到服务器数据
  const query = req.query
  //调用 res.send() 方法，向客户端响应处理结果
  res.send({
    status: 0,//0 表示成功， 1表示失败
    msg: 'GET 请求成功', //状态描述
    data:{
      name : '123123123',
      password:'123456',
      ltbb:'23213123'
    } //需要响应客户端的数据
  })
})

// 4. 向外导出路由对象
module.exports = router
