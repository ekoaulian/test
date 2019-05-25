Cara running
- buka menggunakan git bash
- ketik node index
- jalankan
+ Method GET(untuk melihat semua data)
http://localhost:3000/api/mahasiswa_api_nilais 

+ Method GET(untuk melihat data dengan id 1)
http://localhost:3000/api/mahasiswa_api_nilais/1 

+ Method POST(untuk menambah data menggunakan postman)
http://localhost:3000/api/mahasiswa_api_nilais 
body -> raw -> pilih text menjadi JSON (application/json)
masukkan:
{
	"mahasiswa_name": "eko ajah",
	"mahasiswa_nilai": 76
}
lalu SEND

+ Method PUT(untuk edit data dengan id 6 saya edit nama)
http://localhost:3000/api/mahasiswa_api_nilais/6 
body -> raw -> pilih text menjadi JSON (application/json)
masukkan:
{
	"mahasiswa_name": "eko sapp",
	"mahasiswa_nilai": 76
}
lalu SEND

+ Method DELETE(untuk melihat data dengan id 6)
http://localhost:3000/api/mahasiswa_api_nilais/6

Selamat mencoba wks~ 
Cara pembuatan 
https://hasil-ngampus.blogspot.com/2019/05/restful-api-nodejs.html


