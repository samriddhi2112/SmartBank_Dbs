# Smart_bank_DBS
1. Refer the MoneyPal.zip only it contains all the files
Download the zip file and extract all
Next go to https://www.apachefriends.org/ and donwload XAMPP for Windows
Then move the MoneyPal folder to "C:\xampp\htdocs\MoneyPal" it should be inside htdocs only
Open XAMPP Control panel and start Apache and MYSQL

3. Set Up the Database

Make sure XAMPP is running. Open your browser and go to http://localhost/phpmyadmin.

Drop your old database if you have one.

Create a brand new database named exactly smartbank.

Click the Import tab. Upload the file located at MoneyPal/db/schema.sql and click Import.

3. Run the Admin Fix

Open a new browser tab and go to: http://localhost/MoneyPal/fix_admin.php

This will generate the correct security hash for the admin account on your specific computer.

4. Launch the App!

Customer Portal: Go to http://localhost/MoneyPal/register.php

Admin Portal: Go to http://localhost/MoneyPal/login.php, change the dropdown to Admin, and log in with Username: admin and Password: admin123."
