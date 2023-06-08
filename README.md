# oldschool-portfolio-app
An example portfolio website prepared using HTML5, CSS3, JS, and PHP; with SQL database connection.

## Table of Contents

- [Introduction](#introduction)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This project is a PHP-based web application that interacts with a MySQL database. It retrieves comments from a database table and displays them on a webpage. The comments are sorted by date in descending order.

## Installation

1. Clone the repository:
git clone  https://github.com/srhtkemal/oldschool-portfolio-app.git

2. Configure the database connection:
- Open the `index.php` file.
- Update the `$servername`, `$username`, `$password`, and `$dbname` variables with your database information.
- - Create a database named `serhatkemal`.
 
3. Launch the application:
- Start a local web server or configure it to use the project's directory as the document root. (For example, you can use a PHP development environment like XAMPP.)
- Open the URL where the project is running in your browser.

## Usage

1. Access the application through the browser. 

2. Comments from the `yorumlar` table will be fetched from the database and displayed on the webpage.

3. Each comment will include the name of the commenter, the message, and the timestamp.

4. If there are no comments in the database, a message indicating that "there are no comments yet" will be displayed.



## Notes
Don't forget this is an experimental site. If you encounter any issue, please let me know.

## License

This project is licensed under the [MIT License](LICENSE).
