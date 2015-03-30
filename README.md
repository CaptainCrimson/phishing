[![Stories in Ready](https://badge.waffle.io/simplephishingtoolkit/sptoolkit-rebirth.png?label=ready&title=Ready)](https://waffle.io/simplephishingtoolkit/sptoolkit-rebirth)
# From the ashes shall rise a phish..

Welcome to the spt (rebirth) project.

[sptoolkit](https://github.com/sptoolkit/sptoolkit) hasn't been actively developed for two years. As it stands, it's a brilliant peice of software, and the original developers are pretty damn awesome for creating it. But we'd like to go further, and bring sptoolkit up to date. We've tried contacting the developers, but to no avail.
We're taking matters into our own hands now.

## How can I help?
Please please please look at the [reported issues](https://github.com/simplephishingtoolkit/sptoolkit-rebirth/issues) and if you're able, try fixing them! Nothing that takes your fancy? Install spt(r), give it a go and submit some bugs/feature suggestions.
We accept pull requests, so give it a go!

## INSTALLATION

### The Basics

1.  Create and configure the MySQL database.  spt will need a MySQL database to house its data, so go ahead and create that database and configure the associated user account for the new database with ALL PRIVILEGES assigned to it.  Be sure you record the database name, user name and password in a safe place, you'll need it soon to install spt!
2.  Extract the spt files from the archive.
3.  Create a new directory on your web server, such as "spt" and upload the files to the directory.

### Install spt

1.  Open your web browser and navigate to the location where you uploaded the files and browse to install.php.  For example, http://www.myhost.com/spt/install.php.  If you accidentally just go to the root of the folder you placed the files in, you will be prompted to start the installation by clicking the right pointing arrow.
2.  When prompted to accept the GNU General Public License, click the "I Agree!" button.  For reference, you can read the full text of the license in the license.htm file included in the root of the extracted files.
3.  On the next page, you will get feedback on the readiness of your server to install the spt.  You can learn more about any failed items by hovering over the icon.  Click the “Proceed!” button if all checks passed, or click the “Proceed Anyways” button if one of the checks failed and you have verified that the spt installer is reporting incorrectly.
4.  On the next page, you will need to provide those database details from earlier.  The default server and database ports are provided, be sure to change them if your installation will require something else.  Enter in the remaining required information and click the "Install Database!" button to get things moving along.
5.  If all goes well, you will see a listing of tables that have been successfully created.  Click "Continue!" to move on.
6.  If instead you see an error indicated, click the "<back" button to go back and enter the database information again.
7.  Now it's time to create your first user, for you!  Enter your first and last name, email address and password and click the "Create User" button to continue on.
8.  If you receive any errors, such as for an invalid email address or a password that does not meet the complexity requirements, click the "<back" button and try it again.
9.  Once you enter the required information successfully, you  will receive confirmation.  Click the "Proceed to Login" button to get logged into the spt!
10.  Now it's time to login using the email address and password you entered in the previous step.  See, that was easy!


## About
The spt (rebirth) project is an open source phishing education toolkit that aims to help in securing the mind as opposed to securing computers. Organizations spend billions of dollars annually in an effort to safeguard information systems, but spend little to nothing on the under trained and susceptible minds that operate these systems, thus rendering most technical protections instantly ineffective. A simple, targeted link is all it takes to bypass the most advanced security protections. The link is clicked, the deed is done.

spt was developed from the ground up to provide a simple and easy to use framework to identify your weakest links so that you can patch the human vulnerability.  If the spt project sounds interesting to you, please consider downloading it for evaluation in your own organization.  Feedback is welcomed and always appreciated.

**Current stable version:  0.80.1**

Next release version:  0.80.2



