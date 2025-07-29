# wordpress_basic


<h1>step 1</h1>
      word press install through LEMP server
      start a aws service or any services..
      open any terminal  and first upon download related software..
      such as nginx , mariadb (mariadb105-server), sql (sql-fpm) fpm is a key component or a package manager of sql,and also download php-mysqli connector.
      and start the softwers to command


<h1>step 2</h1>

         i have use amizon linux service and nginx software.so i have go to nginx root path of html.there we have download the wordpress.
         my path     cd /usr/share/nginx/html/
         go to html and there we download wordpress through link
         command : sudo wget https://wordpress.org/latest.zip
         "When downloading a file that is in .zip format, check if the unzip software is installed. If it's not, install it. 
         installaction command for nginx
         sudo yum install unzip
         Then unzip the file using 
         sudo unzip filename."
         then it will add wordpress directory in html directory
         
<<h1> step 3</h1>
    checkup step our installection and setup..
    
  <br> ---check your nginx run properly in web server <br>
   ---https://localhost/<br>
      if they show welcom to nginx ..here you go "nginx is not causing the problem."<br>
   ---then try<br>
       https://localhost/wordpress<br>
   --- if the webpage run but after the submitting information another web page show nginx error,
       then you will check database connection ....or what's the other problem check also..<br>
   --- fill the informaction and here you will go wordpress website web page
       
         
         

