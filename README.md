# --------------- TODO list laravel mini project ----------------- #
What I have done in this mini project


# layout page
	layout.app

# resource controller
	php artisan make:controller TodoController --resource

# home page
	display all lists

# create page
	form
	textarea
	submit button
	form action
	csrf - validation

# migration
# model
	php artisan make:model todo -m

# database
	php artisan migrate

==============================================


# save data to database
	edit the store function of TodoController
	
# validation
	add validate() to the store function of TodoController

# display errors
	add condition into todo.create

# created at data with carbon
	add diffForHumans() into todo.home 

# trim data