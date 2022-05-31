# han-flatnix-php
docker run --name flatnix-web -d -v /Users/thomashofman/Git/han-flatnix-php:/var/www/html -p 80:80 php:apache
docker run--name flatnix-db -d -e 'ACCEPT_EULA=Y' -e 'MSSQL_SA_PASSWORD=P@ssw0rd' -p 1433:1433 -v flatnix-db:/var/opt/mssql mcr.microsoft.com/azure-sql-edge


# to do
- add animation
- index page more href's
- add back button to player page
- clean up css
- add variables (color pallet)
- text too small on iphone devices = (min width and height for images), font style not based on variabels


