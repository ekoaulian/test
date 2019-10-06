const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const mysql = require('mysql');
 
// parse application/json
app.use(bodyParser.json());
 
//create database connection
const conn = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'test_api'
});

//connect to database
conn.connect((err) =>{
  if(err) throw err;
  console.log('Mysql Connected...');
});

//tampilkan semua data mahasiswa
app.get('/api/mahasiswa_api_nilais',(req, res) => {
  let sql = "SELECT * FROM mahasiswa_api_nilai";
  let query = conn.query(sql, (err, results) => {
    if(err) throw err;
    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });
});
 
//tampilkan data mahasiswa berdasarkan id
app.get('/api/mahasiswa_api_nilais/:id',(req, res) => {
  let sql = "SELECT * FROM mahasiswa_api_nilai WHERE mahasiswa_id="+req.params.id;
  let query = conn.query(sql, (err, results) => {
    if(err) throw err;
    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });
});

//Tambahkan data mahasiswa baru
app.post('/api/mahasiswa_api_nilais',(req, res) => {
  let data = {mahasiswa_name: req.body.mahasiswa_name, mahasiswa_nilai: req.body.mahasiswa_nilai};
  let sql = "INSERT INTO mahasiswa_api_nilai SET ?";
  let query = conn.query(sql, data,(err, results) => {
    if(err) throw err;
    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });
});

//Edit data mahasiswa berdasarkan id
app.put('/api/mahasiswa_api_nilais/:id',(req, res) => {
  let sql = "UPDATE mahasiswa_api_nilai SET mahasiswa_name='"+req.body.mahasiswa_name+"', mahasiswa_nilai='"+req.body.mahasiswa_nilai+"' WHERE mahasiswa_id="+req.params.id;
  let query = conn.query(sql, (err, results) => {
    if(err) throw err;
    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });
});
 
//Delete data mahasiswa berdasarkan id
app.delete('/api/mahasiswa_api_nilais/:id',(req, res) => {
  let sql = "DELETE FROM mahasiswa_api_nilai WHERE mahasiswa_id="+req.params.id+"";
  let query = conn.query(sql, (err, results) => {
    if(err) throw err;
      res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });
});
 
//Server listening
app.listen(3000,() =>{
  console.log('Server started on port 3000...');
});