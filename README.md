[mail function]

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = edgroomdemo@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
[mail function]

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = edgroomdemo@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"


---------------------------------------------------------------------------------------------------------------------------------------------------------
open your server folder and then open php folder
open php.ini
find the mail function part
modify that code snippet with above code
---------------------------------------------------------------------------------------------------------------------------------------------------------

[sendmail]

smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=edgroomdemo@gmail.com
auth_password=Tarun@123
force_sender=edgroomdemo@gmail.com

------------------------------------------------------------------------------------------------------------------------------------------------------
open your server folder and then open send mail folder
open sendmail.ini
find the mail function part
modify that code snippet with above code
------------------------------------------------------------------------------------------------------------------------------------------------------