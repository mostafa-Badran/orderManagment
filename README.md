

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- Run __php artisan passport:install__ (to generate Personal access client )
- That's it: launch the main URL. 
- You can login to adminpanel with default credentials __admin@admin.com__ - __password__
- Add Products and Orders from the menu
- Postman Api file contains the postman collection file that has the login and getOrders requests




---
