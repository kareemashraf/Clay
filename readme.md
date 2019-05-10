
## Clay (test users permissions to open 2 doors)

Laravel Framework 5.8.16
<hr>

## How to install

- Clone the project
- run the following command **$ composer install**
- run the following command **$ php artisan migrate** to generate the Database tables but make sure to create an empty db 'clay' first
- then run the following command **$ php artisan db:seed** to fill the data base 
- run **$ php artisan serve** then access it locally on 127.0.0.1:8000 (the port 8000 might be different if its busy)


## explanation:

There are 3 users (user 1, user2, user3) and 2 doors (tunnel and office doors);
the permissions are the following:
- user1 has access on Tunnel Door
- user2 has access on Office Door
- user3 has access on Tunnel Door
- user3 has access on Office Door
