Coding Test: Simple Weather App 

php 8.1 and laravel v9 have been used for this demo app.


clone the repository and then set up configs and run below commands. 

cp .env.example .env and set up the db credentials and weather api key for open weather.

composer install

php artisan key:generate

php artisna migrate --seed

npm install && npm run dev

php artisan fetch:weather 

the above command will be used to fetch weather during diff interval
