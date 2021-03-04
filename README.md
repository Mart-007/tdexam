# Engagia Exam

### Requirements:
- Xampp or Lampp
- notepad++ or any ide

### Setup Engagia Exam(tdexan) to XAMPP
to run the Engagia Exam, you need to set a virtual host to XAMPP
1. Go to XAMPP folder > apache > conf > extra
2. open httpd-vhosts.conf
3. Then copy the snippet then add it to httpd-vhosts.conf

```
<VirtualHost *:80>
    ServerAdmin admin@localhost
    DocumentRoot "C:\myapp\tdexam"
    ServerName exam.td
	<Directory "C:\myapp\tdexam">
		Order allow,deny
		Allow from all
		Require all granted
	</Directory>
	ErrorLog "logs/exam.com-error.log"
    CustomLog "logs/exam.com-access.log" common
</VirtualHost>
```
Change the **Document Root** and **Directory** where you set the path location of the git. example : "C:\myapp\tdexam"

4. Go to **hosts** (C:\Windows\System32\drivers\etc\hosts)
5. Edit it and add ```127.0.0.1 exam.td```
6. Start your Xampp, then try to access http://exam.td Done!

if done with the exam.
Recompress the folder then send it to the examiner.

