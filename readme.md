<p align="center"><a href="https://github.com/nardsqq/iBalik"><img alt="iBalik dev badge" src="https://img.shields.io/badge/project-under--development-orange.svg"/></a> <a href="https://github.com/nardsqq/iBalik/issues"><img src ="https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat"/></a> <a href="https://codebeat.co/projects/github-com-nardsqq-ibalik-master"><img alt="codebeat badge" src="https://codebeat.co/badges/c74f73cb-edcc-405d-9095-7cf47ef24f8e"/></a> <a href="https://github.com/nardsqq/iBalik"><img src="https://img.shields.io/badge/progress-39%25-brightgreen.svg"></img></a> <a href="https://github.com/nardsqq/iBalik/issues"><img src="https://img.shields.io/github/issues-raw/badges/shields/website.svg"></img></a></p>

## About iBalik 

iBalik is a web application with simple but clean *Laravel* syntax. It's a simple web application submitted to a Web Development course as a final requirement. Other than that reason, it also serves as a practice medium to learn how to integrate CRUD into a *Laravel* project.

Please make sure that you have Laravel on your local machine before cloning or downloading the application itself. It uses the framework and its libraries. Please check [this](https://laravel.com/docs/5.4#installing-laravel) to learn how to install Laravel on your machine.

## Database

### Via Forward Engineering (.mwb)

For the meantime, we'll be using the .mwb file attached within the project folder for our database. If you have MySQL Workbench, just open the .mwb file with it.

1. Open *dblfs.mwb* with Workbench.
2. Access your local MySQL server with XAMPP or other cross-platform web server (WAMP, MAMP, EasyPHP etc).
3. After starting your local server's MySQL service, go back to MySQL Workbench.
4. Hit Ctrl + G (Shortcut for *Forward Engineer*) or via *Database* > *Forward Engineer* on your toolbar/ribbon.
5. This will forward engineer the schema and it will make the database accessible through phpMyAdmin.

### Via Migration

Migration is the recommended procedure to accomplish the task of creating our tables.
1. Create a database named "dblfs".
2. Open the terminal/cmd, access the project folder directory.
3. Start migration with the "php artisan migrate" artisan command.

## Getting Started

1. After *forward engineering*, open the terminal on your computer.
2. Generate a new APP_KEY via "php artisan key:generate" artisan command.
3. Start your local server with the "php artisan serve" artisan command.
4. Open any modern browsers (Chrome, Firefox, Edge etc) and access the application by typing http://localhost:8000/ on your address bar.

If you have some questions feel free to [ask](https://github.com/nardsqq/iBalik/issues) and I'll be glad to help.
