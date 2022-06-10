<strong>HServices</strong>: A platform that will help householders find contractors for their household services. The system has 3 types of users: Contractor, Customer, and System admin.

<h3>Requirements</h3>
<ul>
<li>Php</li>
<li>Apache server (XAMP)</li>
<li>MySQL</li>
<li>Bootstrap</li>
<li>JQuery</li>
<ul>
<h3>Installation</h3>
<ol>
<li>Import the file login/multiuser/DB/hservices.sql and login/multiuser/DB/reg.sql into the current DBMS. The dump file also creates the database (named hservices), so no prior action is needed. If database name needs to be updated, change it in the dump file where the database title is declared.</li>
<li> Edit the file  login/multiuser/includes/connect.php and setup the Application information: Database connection. Port value is usually not needed in Database connections, so only edit if you know what you are doing.</li>

</ol>
<h3>Existing account(s)</h3>
<p>The database already contains a sample account to test things out with.</p>
<ol>
<li>Contractor</li>
<ul>
<li>Email: admin@admin.com</li>
<li>Password: 123</li>
</ul>
<li>Customer</li>
<ul>
<li>Email: user@user.com</li>
<li>Password: 123</li>
</ul>
<li>System admin</li>
<ul>
<li>Email: daniel@hservices.com</li>
<li>Password: admin123</li>
</ul>

</ol>
