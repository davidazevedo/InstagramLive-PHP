Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'));
choco install git -a;
choco install composer -a;
choco install php -a;
composer install;
composer require adrifkat/instagram-api react/child-process;
