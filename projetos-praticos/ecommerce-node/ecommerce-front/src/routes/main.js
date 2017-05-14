const express = require('express')
const router = express.Router()

router.get('/', (req, res) => {
  return res.render('main/index', {
    title: 'Ecommerce'
  })
})

module.exports = router