# Crazy-Horror-Website
This website uses PHP to establish a database connection using PDO (PHP Data Object) to a MySQL database and also handles user login functionality. The code also uses the w3.css framework to style the webpage.

*Welcome.php*

The code initializes a session and checks if the session has an 'id'. If there is no 'id', then the code redirects the user to the 'index.php' page. The rest of the code creates an HTML webpage with a navigation bar and four sections: a header, an about section, a survivor section, and a killer section.
The header section contains an image of horror movies and a title. The about section provides information about the website and its purpose. The survivor section lists some famous horror movie survivors along with their descriptions and images. The killer section is the same as the survivor section.

*Register.php*

This file handles user registration. It starts by setting the current year and starting a session. It then includes a separate file called dbconnection.php, which contains code to connect to the database.
Next the code checks if the submit button has been pressed, and if so, checks if the username, email, and password fields have been filled out. If all three fields are filled out, it sanitizes the input and hashes the password using the password_hash() function. It then checks if the email is valid using the FILTER_VALIDATE_EMAIL filter and if the email is not already in use in the database. If the email is valid and not already in use, it inserts the user's information into the registration table in the database.
If any of the fields are not filled out or if the email is not valid or already in use, it sets error messages to display to the user. If the registration is successful, it sets a success message to display to the user.

*Logout.php*

The code starts a session and then checks if the session has been set. If the session has been set, the session_destroy() function is called to destroy the current session. After destroying the session, the code redirects the user to the index.php page using the header() function and then terminates the script execution using the exit() function. The purpose of this is to log out the user by destroying their session. This is a common practice in web applications where users need to be authenticated to access certain features or content. By destroying the session, the user is logged out and their session data is cleared, making it necessary for them to log in again if they want to access restricted content.

***Note this website is through MAMP localhost:8888***
