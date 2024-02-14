Business Management System(BMS)

This project is made from the scratch and it includes all the required migration files and the models. 
A DataTable is implemented for the Business Module.
Business store module is validated with both front and back end. Also a Validation Request files is generated.
Image is uploaded and displayed in the Business View section.
The code is uploaded in the GitHub.
Above all tasks are completed within the given timeframe of 4 hours. Branch module is pending.


Steps to run the project in local system:

Clone the project in your local repository.

Update the composer with the command -
Composer update
(If not, then)
Compose install

Generate an env key if missing in your .env file with the command - 
Php artisan key:generate 

Setup your sql server locally and create a DB schema. Update your sql credentials in .env file

Run the below commands sequentially:
npm install 
npm run dev
php artisan migrate
php artisan serve

Running project includes: 
This is a Business Management System, where u can register a business with fewer details.
Each business may have many branches. Branch module is in progress.

