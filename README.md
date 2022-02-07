# oms
A client management Website - OMS

This is a website I created for a project in which the user can login as an admin.

The options available to the admin are:


Register a new client.

List all active clients.

List all inactive clients.

Search for a specific client. (using phone or last name)

Register a new admin.

When listing either active or inactive clients, there is an option next to each client to either edit the clients details, make the client active (or inactive), or delete
the client alltogether.

The credentials to login to the website are:

username:  admin
password: password


Note*

These credentials will only work if you use mysql with the following settings: database_host = 'localhost', database_username = 'root', database_password = '',
database_name = 'oms', and my exported sql file.

If you want to use your own database you will need to change the files accordingly.
