cd Code/robvankeilegom.be
npm install --loglevel error
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:refresh --seed
gulp
