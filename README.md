<h1 style="text-align: center; color: red">Laratact</h1>
<p style="text-align: center">A laravel-based contact storage web application</p>
<hr>


## About

laratact is a **lara**vel-based con**tact** storage application with a modern UI.

## Getting Started

Here is the quick guide for getting started with the project.

### Prerequisites

Make sure that the following software are available and (preferably) in your PATH environment variable too.

- [PHP](https://www.php.net/downloads.php) 8.x
- Database Server
- [Composer](https://getcomposer.org/) dependency manager
- Web Server (Optional for testing)

### Installation

1) Either download or clone the repository.  
`git clone https://github.com/usama-365/laratact`
2) Change directory to project root (newly created 'laratact' folder).  
3) Install all dependencies of project by running the following command in the project root.  
`composer install`
4) Run your database server and create a database for this project by the name you like (default: laratact).  
5) Copy the .env.example file as .env
6) Open the .env file in a text editor and add your database configuration in it as specified.
7) Generate API keys for your project using the following command.  
`php artisan key:generate`
8) To apply the migrations, run the following command.  
`php artisan migrate`
9) (Optional) To generate sample data to demonstrate the working of the project, run the following command.  
`php artisan db:seed`
