# COSC349 Assignment 2

I chose to extend the program I developed for assignment one(https://github.com/bscobie/COSC349A1.git). The program is a booking system for reserving video games. This application allows users to book a video game from the supplied list as well as giving their details. There is a second web page for an admin user that is able to see the current bookings stored in the database.

This application is made up of two virtual machines as Amazon Ec2 instances that are running an Apache web server each. Each of the Ec2 instances interact with the MySQL RDS instance in different ways. The web-server instance retrieves the stored title values from the Games table to populate the dropdown box that is in the booking form. When the user submits the booking form, the input data is then posted to the database and stored in the bookings table. The second Ec2 instance running the admin server only pulls data from the bookings table and displays it in a table.

# Using the application
- To use the user facing site, go to http://ec2-107-23-216-245.compute-1.amazonaws.com
- To use the admin facing site, go to http://ec2-34-230-99-236.compute-1.amazonaws.com
