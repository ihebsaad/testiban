<h2>iBan First API</h2><br>
<a href="https://test8.enterprise-esolutions.com/iban/"> DEMO </a><br>
<b>Login :</b> iban@first.com<br>
<b>Password :</b> DguzNoKJ+UrRy

<h3>functionalities</h3>
<ul>
<li>Show the list of wallets</li>
<li>Show a wallet</li>
<li>Find a wallet balance by date</li>
<li>Submit a new wallet</li>
<li>Show the List of financial movements</li>
<li>Show a financial movements</li>
</ul>
<br><br><br>
<H2>Installation on localhost</H2><br>
<h4>Requirements :</h4><br>
<ul>
<li>php >=7.1.3</li>
<li><a href="https://getcomposer.org/download/">Composer</a></li>
<li>Web Server(Apache)</li>
<li>MySQL Server</li>
</ul><br>
<h4>Setup :</h4><br>
Go to your local server and folder destination with CMD :<br>
<pre> cd  /path_to_folder<br></pre>
clone project :<br>
<pre>git clone https://github.com/ihebsaad/testiban.git</pre>

composer install<br>
Rename .env.example to .env<br>
<br>
<b>Set Database Parameters</b><br>
<br>
DB_CONNECTION=''<br>
DB_HOST=''<br>
DB_PORT=''<br>
DB_DATABASE=''<br>
DB_USERNAME=''<br>
DB_PASSWORD=''<br>

<br>
<b>Set API Parameters</b><br>
API_BASE=''<br>
API_USERNAME=''<br>
API_PASSWORD=''<br>

Import the database (file database.sql) to your MySQL Server :<br>
<br>
<b>Run the server:</b><br>
<pre>php artisan serve</pre><br>

http://localhost:8000/folder_name<br>