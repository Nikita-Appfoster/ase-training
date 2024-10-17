const mysql = require('mysql2');


const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password:'nikita',
  database: 'nodecrud'
});


connection.connect(function(err) {
  if (err) {
    console.error('Error connecting to the database');
    return;
  }
  console.log('Connected to MySQL');
});

console.log(connection.config.host)


module.exports = connection;
