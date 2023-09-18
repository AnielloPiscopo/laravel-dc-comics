<div align="center">
<h1 align="center">
<img src="https://img.shields.io/badge/Laravel-777BB4.svg?style&logo=Laravel&logoColor=white" alt="Laravel" width="100" />
<br>LARAVEL-DC-COMICS
</h1>
<h3>◦ Recreation of the homepage of DC Comics made with PHP , CSS , SCSS , JS , Axios and Laravel</h3>
<h3>◦ Developed during the course of Full-Stack Web Developer with Boolean</h3>
<h3>◦ Link of the same project made with Vue and Vite: https://aniellopiscopo.github.io/vite-comics/</h3>

<p align="center">
<img src="https://img.shields.io/badge/SVG-FFB13B.svg?style&logo=SVG&logoColor=black" alt="SVG" />
<img src="https://img.shields.io/badge/JavaScript-F7DF1E.svg?style&logo=JavaScript&logoColor=black" alt="JavaScript" />
<img src="https://img.shields.io/badge/Sass-CC6699.svg?style&logo=Sass&logoColor=white" alt="Sass" />
<img src="https://img.shields.io/badge/PHP-777BB4.svg?style&logo=PHP&logoColor=white" alt="PHP" />
<img src="https://img.shields.io/badge/Laravel-777BB4.svg?style&logo=Laravel&logoColor=white" alt="Laravel" />
<img src="https://img.shields.io/badge/CSS3-E34F26.svg?style&logo=CSS3&logoColor=white" alt="CSS3" />
<img src="https://img.shields.io/badge/Sass-CC6699.svg?style&logo=Sass&logoColor=white" alt="Sass" />

<img src="https://img.shields.io/badge/Axios-5A29E4.svg?style&logo=Axios&logoColor=white" alt="Axios" />
<img src="https://img.shields.io/badge/Lodash-3492FF.svg?style&logo=Lodash&logoColor=white" alt="Lodash" />
<img src="https://img.shields.io/badge/Markdown-000000.svg?style&logo=Markdown&logoColor=white" alt="Markdown" />
<img src="https://img.shields.io/badge/JSON-000000.svg?style&logo=JSON&logoColor=white" alt="JSON" />
</p>
<img src="https://img.shields.io/github/languages/top/AnielloPiscopo/laravel-dc-comics?style&color=5D6D7E" alt="GitHub top language" />
<img src="https://img.shields.io/github/languages/code-size/AnielloPiscopo/laravel-dc-comics?style&color=5D6D7E" alt="GitHub code size in bytes" />
<img src="https://img.shields.io/github/commit-activity/m/AnielloPiscopo/laravel-dc-comics?style&color=5D6D7E" alt="GitHub commit activity" />
<img src="https://img.shields.io/github/license/AnielloPiscopo/laravel-dc-comics?style&color=5D6D7E" alt="GitHub license" />
</div>

---

## 📒 Table of Contents
- [📒 Table of Contents](#-table-of-contents)
- [🧩 Modules](#modules)
- [🚀 Getting Started](#-getting-started)

---

## 🧩 Modules

<details closed><summary>Root</summary>

| File                                                                                                                                                                                                                           | Summary                   |
| ---                                                                                                                                                                                                                            | ---                       |
| [Controller.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/app\Http\Controllers\Controller.php)                                                                                                            | This is the main controller of the app. |
| [ComicController.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/app\Http\Controllers\Admin\ComicController.php)                                                                                            | This is the controller dedicated to the view of the comics in the admin section. |
| [ComicController.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/app\Http\Controllers\Guest\ComicController.php)                                                                                            | This is the controller dedicated to the view of the comics in the guest section. |
| [Comic.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/app\Models\Comic.php)                                                                                                                                | This is the model for the db of the comics. |
| [User.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/app\Models\User.php)                                                                                                                                  | This is the model for the db of the users. |
| [comics.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/config\db\comics.php)                                                                                                                               | This is a php with the comics infos. |
| [ComicsTableSeeder.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/database\seeders\ComicsTableSeeder.php)                                                                                                  | This is the seeder dedicated to the comics. |
| [DatabaseSeeder.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/database\seeders\DatabaseSeeder.php)                                                                                                        | This is the general seeder of the app. |
| [index.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/public\index.php)                                                                                                                                    | This is the index file. |
| [app.js](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\js\app.js)                                                                                                                                    | This is the  |
| [bootstrap.js](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\js\bootstrap.js)                                                                                                                        | HTTPStatus Exception: 429 |
| [deleteComicElement.js](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\js\Admin\deleteComicElement.js)                                                                                                | This is the file js dedicated to the creation of the pop-up during the elimination of the comics in the admin section. |
| [app.scss](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\scss\app.scss)                                                                                                                              | This is the main scss file. |
| [general.scss](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\scss\general.scss)                                                                                                                      | This is a scss file containing general styles. |
| [_comics.scss](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\scss\Guest\_comics.scss)                                                                                                                | This is the scss file for the comics section in the guest part. |
| [_footer.scss](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\scss\partials\_footer.scss)                                                                                                             | This is the sccs file for the footer. |
| [_header.scss](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\scss\partials\_header.scss)                                                                                                             | This is the scss file for the header. |
| [_loader.scss](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\scss\partials\_loader.scss)                                                                                                             | This is the scss file for the loader. |
| [_variables.scss](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\scss\partials\_variables.scss)                                                                                                       | This is a scss file containing the global variables. |
| [home.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\Admin\pages\home.blade.php)                                                                                                     | This is the homepage of the admin section. |
| [create.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\Admin\pages\comics\create.blade.php)                                                                                          | This is the create page for the comic model in the admin section. |
| [edit.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\Admin\pages\comics\edit.blade.php)                                                                                              | This is the edit page for the comic model in the admin section. |
| [index.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\Admin\pages\comics\index.blade.php)                                                                                            | This is the index page for the comic model in the admin section. |
| [show.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\Admin\pages\comics\show.blade.php)                                                                                              | This is the show page for the comic model in the admin section. |
| [form.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\Admin\pages\comics\partials\form.blade.php)                                                                                     | This is the form partial file for the comic model in the admin section. |
| [comics.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\Guest\pages\comics.blade.php)                                                                                                 | This is the page for the comics in the guest section. |
| [home.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\Guest\pages\home.blade.php)                                                                                                     | This is the homepage of the guest section. |
| [app.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\layouts\app.blade.php)                                                                                                           | This is the main layout of the page. |
| [footer.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\partials\footer.blade.php)                                                                                                    | This is the partial file containing the footer. |
| [header.blade.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/resources\views\partials\header.blade.php)                                                                                                    | This is the partial file containing the header. |
| [web.php](https://github.com/AnielloPiscopo/laravel-dc-comics/blob/main/routes\web.php)                                                                                                                                        | This is the main php dedicated to the routes. |

</details>

---

## 🚀 Getting Started

### ✔️ Prerequisites

Before you begin, ensure that you have the following prerequisites installed:
> - ℹ️ PHP: Ensure you have PHP installed on your system. Laravel requires PHP 7.3 or later. You can check the installed PHP version by running the php -v command in your terminal.
> - ℹ️ Composer: Composer is a PHP package manager widely used with Laravel. Make sure you have it installed on your system. You can verify this by running the composer --version command in the terminal.
> - ℹ️ Database: If the Laravel application uses a database, you'll need to ensure it's configured correctly. Laravel supports various databases, including MySQL, PostgreSQL, SQLite, and SQL Server.
> - ℹ️ Web Server: Laravel can run on various web servers, but one of the most common choices is Apache or Nginx. Ensure you have a web server configured and running on your system.

### 📦 Installation

1. Clone the laravel-dc-comics repository:
```sh
git clone https://github.com/AnielloPiscopo/laravel-dc-comics
```

2. Change to the project directory:
```sh
cd laravel-dc-comics
```

3. Copy the .env.example file to a new file named .env and set the necessary environment variables for configuring the application, such as the database connection.

4. Install the dependencies:
```sh
composer install
```

5. Generate a secret key for the Laravel application:
```sh
php artisan key:generate
```

6. Run database migrations (if needed) to create database tables.
```sh
php artisan migrate
```

7. Run database seeders (if needed) to fill database tables.
```sh
php artisan db:seed
```

### 🎮 Using laravel-dc-comics

1. Use:
```sh
php artisan serve
```

2: Go to http://localhost:8000

### 🧪 Running Tests
```sh
vendor/bin/phpunit
```

---
