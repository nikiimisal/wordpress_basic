# wordpress_basic


<h1>Step 1 : Install Required Software</h1>
    <h2> WordPress Installation on Amazon Linux using LEMP Stack</h2><br>
✅ Packages to Install:

Nginx (Web server)

MariaDB (mariadb105-server) – Database server

PHP-FPM (php-fpm) – PHP FastCGI Process Manager

PHP-MySQLi – PHP extension for MySQL interaction

Unzip – For extracting the WordPress archive

📦 Installation Commands:

                  sudo yum update -y
                  sudo yum install -y nginx mariadb105-server php php-fpm php-mysqli unzip 
                  
                  sudo systemctl start nginx
                  sudo systemctl start mariadb
                  sudo systemctl enable nginx
                  sudo systemctl enable mariadb

<h1>Step 2: Download and Extract WordPress</h1>
Navigate to Nginx's web root directory and download the latest version of WordPress:

         cd /usr/share/nginx/html/
         sudo wget https://wordpress.org/latest.zip
         sudo unzip latest.zip

         
This will extract the wordpress folder into /usr/share/nginx/html/.
         
<h1> Step 3: Verify Installation and Troubleshoot</h1>
  
 ✅ Check Nginx:
Visit the following URL in a browser:

http://localhost/ → Should display "Welcome to Nginx"

✅ Check WordPress:
http://localhost/wordpress → Should launch the WordPress setup interface

⚠️ Error After Submitting WordPress Installation Details
If the WordPress installation page loads but displays an Nginx error after submitting the setup form
(such as site title, username, and database details), this typically indicates a backend issue. 
The most common cause is a database connection error.

✅ Recommended Actions:
Verify Database Configuration:

Ensure that the MySQL/MariaDB service is running.

Confirm that the database name, username, and password entered in the setup form are correct.

Check that the php-mysqli extension is installed to enable WordPress to connect to the database..

Submit the WordPress Setup Form Again:
Once the database connection issue is resolved, return to http://your-ip/wordpress and complete the installation process.

"You may encounter different problems or errors during the process. Identify the specific issue and resolve it accordingly."

🔐 Note:
If using a public IP, restarting the EC2 instance may assign a new IP. To prevent this:

Allocate and associate an Elastic IP

Or configure a domain name pointing to your instance

<h1>Step 4: Customize WordPress</h1>
   Once WordPress is installed:

Log in to the WordPress admin dashboard

Learn to create, edit, and manage:

Themes

Posts and Pages

Plugins

Site settings

You can now build and launch your website.

 I created a WordPress-based news article site, captured a screenshot, and shared it on my LinkedIn profile.
    --- https://www.linkedin.com/in/nikhilmisal/<br>
    
    
   
       
         
         

