# PRE-REQUISITE: To get started with this project.
1. You must be acquainted with the tools below .
>>XAMPP control panel.
>>>Visual Studio Code Text Editor.

## CREATE A DATABAE
1. navigate to your browser i prefer you use `` google chrome ``.
2. type `` localhost/phpmyadmin ``
3. Then create a database called `` database_search `` .

### On the sql page in the localhost/phpmyadmin, to create the TABLE needed for this project .
1. type the code below on the sql page
CREATE TABLE pushed (
		file_id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    	name text not null,
    	new_name text not null ,
);

## Ensure to go through the database.sql file 