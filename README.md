# A module that allows users to create periodic tasks and manage them

> This solution was implemented in a modular software architecture pattern using Laravel and Livewire.
> Unit and feature tests for project can be found in `Modules/TaskManager/Tests` directory and can be run using `php artisan test` > [Laravel module package](https://nwidart.com/laravel-modules/v6/introduction) was used for creating modules
> The database contains two tables with a One to many relationship. The diagram below explains more.

![An image describing the database table design](https://viewer.diagrams.net/?tags=%7B%7D&highlight=0000ff&edit=_blank&layers=1&nav=1&title=jabuo.drawio#R7VxRc6I6GP01zPQ%2BtKMgtn2sFtudtd0d2%2B6de186qUTMLSRsiK3ur78JBBSCFqpYFWccB0L8IN8530GPJJrR9aY3FPjjO2JDV9Mb9lQzrjVdvzRb%2FF00zKKGdusianAosqOm5rzhAf2BsrEhWyfIhkGqIyPEZchPNw4JxnDIUm2AUvKe7jYibvqsPnCg0vAwBK7a%2Bjey2ThqvTAb8%2FZbiJxxfOZmQx7xQNxZNgRjYJP3VBOcsh7BTF7iT0g9gCFm%2FMgdoK%2BQaqY1ZkyM9ErTe%2Fw1Er3PHEIcFwIfBWdD4vHmYcC79EbAQ65I80KgjgzET2dYmtGlhLBoy5t2oSugimGIrqm35GiSByriFvhA9%2FRt1n9tMHz7bvxid3fOz%2FOXUxnlDbgTmV%2BZGzaLEw5tnn%2B5y0%2BF2GwAXcAQwdb8SAdi%2B0qgyztZgz%2BQkkdyBzAffCdggLL5MYJl9x7il2dcN%2BMucr%2FB99WhyesMyIQO4Yrx6JLdPKAD2YqObQm4nWKbzNwNJB5kdMY7vM85ljBpvMivuJGGSXlLsxRIJjlJwOQcPwkKiSXr0mjJOLIsz2NKxiGioctPLcKcCdTKBGpnA0WpUQLxjYWBz5tCFpVglK4wioHg9dmhZMLrJksuXoO%2B2GTgJaRRyAQpOoagApcRBhDmFRNRZUhcF%2FgBCrtHLWPk2n0wIxMWB4r3OiM0hfYg0hzRl5Owz4MFkmeiemNqi8PARQ7m20POO3HGDoUBv5Y%2BCJjssZSZb5AyOF1JJXnUPE8DlDBogWq6mUe1LJKLrErBWBYz42MViIHiQ2cIuAMu7QA7IWZpSERebUr8x7gCRYMv2Aap9QYjcQ2Tz%2Bu9S1wikMWRKoTdwsGZHf7iw%2B02zkzN5BfQ5fvN%2BT5%2Fie6UdQkOGAUohANyoN6hAKvDiC%2FP48JRfBlUJlNsvxDGuFYvg3Ultz%2FGWmJrFIS2MmRbayFL%2BEhHbijcY2TbEEcFKe7rYI52DpC52U8ynoUiW4YF0TAKo7GQfqNk9mWweVZKRwMuZz4GDHbIBNtBFZprKigTakP6zD%2FU1bWrRnSDuP%2FxKN6f%2Bn0t%2BQq0SzSI1Tfq2wl8METY6UefbGd4YlbBk6m2tGr1jfKmULgtEKddZ%2BHP%2F6a5GeE3Cwq%2FUZXwn%2B%2BD8BfMfrtw9j%2BQ5lXZLi%2F02WhbqNcLBVUMPBjCSrlWZkR%2B5%2FD%2BUOE3ToiSiv55ghQKtwWGXB4VvRpFv%2FhqRY8NuIOQ9MvC6T90SW%2BqFpwNgyFFvrDYaiftxYlRO2nXVZsmtNY8gIED6dFc40ey3pqussPILfzKZFtfz4LZ8ztyGXOt%2BO%2F05e5aPriVYasaLzsozZ%2B01xLiHu%2FRuuqT8P56zX21EgRZfq828v5UW4cwO8KY9fyXPVf9Mr%2FDSqt%2B%2B8tVX3VhdrDqi%2Bb%2FvHD%2BD17lVe%2Bklu5aCUocsq7%2Ftq69%2B1%2F%2Bo3MxOv3%2B77en%2F%2FwpKvK8zFHWPyXrl1uU9Vxo9bWg%2FTJVX0nTWol6biZUz6Qm7tqavKidstfapqlU2YubcFVJ%2B17YNAVLuJauTG4mVFPGntDwweTn0Onmx2x%2BAXXR9qMbszQ1RzOmMm3PedBpu9q%2Bp2bMSp4etV21YhJth9iumbIf%2FZjlP2jWeyjmKO0rpD3niaftSnvOozE7WOUFizhh6lHcm6rVNqLw9wTi4ax%2BlkxxXtRP3Ws9Ma1SdU%2Fmc3%2Bduu%2FF3LSiVbyxyWj7r%2B6q2xYwwCb8ZI0XQlwIhO9%2BbfWunvqPJ42%2FdhD0jWn7JqaeHaq2H%2BeeVabtrYLablam7Xs6%2FWw1U9fW9lX5Lq%2Ft2WjbKFrVbev9GFjfbu6jicbfrX%2BijZOFRR%2Bekc1FnifRaIqsD6yeNbDuu9aDJtbpSLqdhN12jiQbuxdsYtJarnivw6odoZVq9wmoxMpCmlh6B4usULnqTDBGvsITnlKBzph58ZoyynQDkXg0BO6VPOBx0oRECuchLFAmfUMQmg8mjATRvIlouRpKXmGGVTlEU5lR%2Bv%2F3VkNWXGzKxBW4uC5NVdPQ8h%2BTUU2ZWyC%2B23kRTKunpBwqTu1GM4WTkQNTe6swqR5LB7oEO0FcVrLCEgGuDVaXZgoqMweq881AxXfn63tFYjlfk82w%2Fgc%3D)

### Check list
- [x] CRUD of periodic task
- [x] Display of periodic tasks grouped by task_groups
- [x] Task status toggle button to modify periodic task status to pending or done
- [x] Authentication using laravel breeze
- [x] Styled with tailwind css 

