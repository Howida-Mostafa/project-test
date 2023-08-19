# Company Proejct Test 


## How to run

- Clone the Project
- Perform `composer install`
- Make a MySQL database named `company`
- Run `PHP artisan migrate` and `php artisan db:seed`
- Run `php artisan storage:link` (if storage symlink already exists in public folder, delete it first)
- And finally `php artisan serve`



## How to use
- Open {Host:port}/dashboard URL and then login using `admin@admin.com` and `password` 
- You can manage the companies from the Company tab in the sidebar (CRUD)
- You can manage the employees from the Employee tab in the sidebar (CRUD)

