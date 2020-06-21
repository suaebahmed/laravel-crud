# **vs code extension for laravel:**
1. laravel blade snippets <br>
2. laravel-blade //-- syntax highlighting <br>
3. laravel blade spacer <br>
4. Bootstrap 4 snippests

* **controller:**
to make users controller with terminal <br>
you can also id make manually <br>

```sh
$ php artisan make:controller users
# create resource full controller
$ php artisan make:controller users --resource

```

* **database configure:**
```sh
# .env file setup database name
$ php artisan migrate 
$ php artisan make:migration create_products_table --create=products
```

* **Create model**
```sh
$ php artisan make:model Product
```

* **Data base seeder**
```sh
$ php artisan db:seed
# to seeder one more class
$ php artisan make:seeder class_name
$ php artisan db:seed --class=class_name
```

* **Data base seeder**
```sh
# default seeder class
$ php artisan db:seed
# to seeder one more class
$ php artisan make:seeder class_name
$ php artisan db:seed --class=class_name
```
* **model accessor**

* **three type of middleware**
1.global middleware<br>
2.group middleware<br>
3.Route middleware<br>

```sh
$ php artisan make:middleware customAuth
```

## laravel error:
    **419 page expired for @csrf token**
    **Call to a member function diffForHumans() on string**
   ```sh
    #i don't use eloquent model for my query 
    #then my date is not automatically cast to Carbon
   ```