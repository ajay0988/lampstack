# lampstack
containerize the lamp stack 
# Simple LAMP Application
This is a simple LAMP application written to support the simulation of application deployments using Ansible. The application acts like a 'wall', where users can post comments that are stored in a database and displayed on the main page for everyone to see.

## Database Schema
Entries are stored in a table called *records*. The schema for the *records* table is as follows:

|Column Name|Type|Attributes|
|:---|:---|:---|
|id|MEDIUMINT|NOT NULL, AUTO_INCREMENT, PRIMARY KEY|
|message|VARCHAR(255)|none|

To create the table, run the following SQL command:
```sql
USE `my_database_name`;
CREATE TABLE IF NOT EXISTS `records` (`id` MEDIUMINT NOT NULL AUTO_INCREMENT, `message` VARCHAR(255), PRIMARY KEY (`id`));
```
## Application Variables
The following variables should be stored outside the document root. By default, index.php will try and source `../credentials.php`.
```php
$database_hostname = "blah.asdf.us-east-1.rds.amazonaws.com";
$database_username = "my_app_user";
$database_password = "password";
$database = "myapp";
```
