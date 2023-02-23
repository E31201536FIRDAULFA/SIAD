<!-- GETTING STARTED -->
## Getting Started

Ikuti langkah-langkah dibawah ini:

### Built With

* CI4
* JQuery

### Prerequisites
\
Penting! install bahan dibawah ini:
* composer
* phpmyadmin (xampp,laragon)
* php-8+
* php-ext: mbstring & intl
* terminal/cmd (administrator/root)

### Installation

* Install Dependencies |
  Jika terjadi error, hapus composer.lock terlebih dahulu
   ```sh
   composer install
   ```
* Migrate Database or Refresh
   ```sh
   php spark migrate
   ```
   ```sh
   php spark migrate:refresh
   ```
* Seeding Database:table Admin
   ```sh
   php spark db:seed User
   ```
   username: admin
   password: admin
* Run App
   ```sh
   php spark serve
   ```