<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Step 1 :
```cmd
git clone https://github.com/chgnw/FinalProjectWebProg.git
cd FinalProjectWebProg
```
Step 2 : 
```cmd
composer install
```
Step 3 :
```cmd
cp .env.example .env
```
Step 4 : 
- Open .env File
- Edit DB_CONNECTION=mysql
- Edit DB_NAME=db_name (Optional)
Step 5 : 
```cmd
php artisan migrate
```
Step 6 : 
```cmd
php artisan key:generate
php artisan serve
```
Step 7 : 
```cmd
npm install
npm run dev
```
