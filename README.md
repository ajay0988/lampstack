
# Simple LAMP Application setup using Devtron
This is a simple LAMP application written to support the simulation of application deployments using Devtron tool. The application acts like a 'wall', where users can post comments that are stored in a database(mysql) and displayed on the main page for everyone to see.

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
The following variables should be the pass during create the application by docker.

## Note
Before access the index.php page , first access `setup.php` file to fulfil basic requirement 
```php
    HOSTNAME=abc.mysql.com
    ROOT_USERNAME=xxxabcxxx
    ROOT_PASSWORD=xxxxabcxxx
    DB_NAME=mydb
```
