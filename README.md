# A module that allows users to create periodic tasks and manage them

> This solution was implemented in a modular software architecture pattern using Laravel and Livewire.
> Unit and feature tests for project can be found in `Modules/TaskManager/Tests` directory and can be run using `php artisan test` > [Laravel module package](https://nwidart.com/laravel-modules/v6/introduction) was used for creating modules
> The database contains two tables with a One to many relationship. The diagram below explains more.

![An image describing the database table design](https://drive.google.com/file/d/1MtTJqWVeSkKo5Z8LXgsUBOPPcnE1HUMb/view?usp=sharing)

### Check list
- [x] CRUD of periodic task
- [x] Display of periodic tasks grouped by task_groups
- [x] Task status toggle button to modify periodic task status to pending or done
- [x] Authentication using laravel breeze
- [x] Styled with tailwind css 

