## Simple CRUD

Simple CRUD adalah project simpel dimana di satu tabel bisa dimanipulasi datanya dengan menambah, edit, hapus.
O iya ada Authentikasi Laravelnya juga ya.

## 💻 Panduan Instalasi

1. **Clone Repository**
```bash
git clone https://github.com/Ryandinulfatah12/simple-crud-laravel.git
cd simple-crud-laravel
composer install
copy .env.example rename->.env
```
3. **Buka ```.env``` lalu ubah baris berikut sesuaikan dengan databasemu yang ingin dipakai**
```
DB_PORT=3306
DB_DATABASE=simple-crud
DB_USERNAME=root
DB_PASSWORD=
```

4.** Jalankan bash**
```bash
php artisan key:generate
php artisan config:cache
php artisan route:clear
php artisan migrate
```

5.** Jalankan website**
```bash
php artisan serve
```

6. ** lalu anda menuju registrasi untuk menggunakan fitur CRUD nya lalu silahkan dicoba manipulasi datanya **

## Contributing

Mohon Maaf jika menemukan kesalahan kata pada ReadMe ini, harap dimaklumi ya :)

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
