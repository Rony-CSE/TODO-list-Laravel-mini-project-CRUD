# --------------- TODO list laravel mini project ----------------- #
What I have done in this mini project

### Features: Laravel framework, Bootstrap
### Description:
	On the home page you can see all todos.
	From here you can go all the pages.
	When click the title it will take to its own View page.
	When you click the edit icon, it will take you to the edit page, where you edit the title and the body of
	the todo.
	If you click the delete icon, the todo will be deleted.
	If you click the “Add New” button it will take you to the create new todo page, where you can add a
	new todo to the database.

### layout page
	layout.app

### resource controller
	php artisan make:controller TodoController --resource

### home page
	display all lists

### create page
	form
	textarea
	submit button
	form action
	csrf - validation

### migration
### model
	php artisan make:model todo -m

### database
	php artisan migrate

==============================================


### save data to database
	edit the store function of TodoController
	
### validation
	add validate() to the store function of TodoController

### display errors
	add condition into todo.create

### created at data with carbon
	add diffForHumans() into todo.home 

### trim data

==============================================

-------------------CRUD-----------------------
## CREATE
### add title
	into todo.create page
	into database.php
	update database
		php artisan migrate:refresh
	into todo.home page
	update store function into TodoController
	
### add Mutator
	into todo.php file to make the uppercase of first letter
	
	
## UPDATE
### add edit option
	into todo.home page
	
### add @yield 
	into todo.create page
	
### create todo.edit page
	extends all from todo.create page
	
### modify edit function
	into TodoController
	
### modify update function
	into TodoController
## DELETE
### add delete option
	into todo.home page
	
### update delete function
	into the TodosController
	
### add flush session
	into todo.home page

## How to use


Clone repo

	git clone https://github.com/Rony-CSE/TODO-list-Laravel-mini-project-CRUD
Install the composer dependencies

	composer install
Set application key

	php artisan key:generate        
Configure .env and migrate

	php artisan migrate
