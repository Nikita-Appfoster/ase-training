const express = require('express')
const app = express()

app.get('/', function (req, res) {
  res.send('Hello Worlda and how you all r i am doing great?')
})

app.listen(3000)