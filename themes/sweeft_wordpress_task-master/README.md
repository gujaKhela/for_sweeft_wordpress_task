# Project Name

This project is a WordPress website created with a Bootstrap-based theme. It features three main pages (Home, About Us, Contact) and a custom post type for books, each with two distinct pages (List of Books and Individual Book Details). The book list includes numeric pagination (1, 2, 3) for easy navigation.

## Project Overview

### Pages

1. **Home**: The homepage of the website.
2. **About Us**: Information about the organization or team behind the website.
3. **Contact**: Contact details or a contact form.

### Custom Post Type: Books

- The "Books" post type is used to manage and display information about books.
- Two main pages associated with books:
  - **List of Books**: Displays a paginated list of books.
  - **Individual Book Details**: Displays detailed information about a specific book.

## ACF Field Groups

This project utilizes Advanced Custom Fields (ACF) to enhance WordPress content management. To replicate the ACF setup in your own WordPress instance, follow these steps:

1. **Download ACF Field Groups**:

   - Go to the [ACF JSON Export](/acf-data/) directory in this repository.
   - Download the `acf-export.json` file.

2. **Import ACF Field Groups**:

   - In your WordPress admin, navigate to "Custom Fields" > "Tools."
   - Choose the "Import" tab.
   - Click the "Choose File" button and select the downloaded `acf-export.json` file.
   - Click the "Import" button to import the ACF field groups.

3. **Review and Adjust**:
   - After importing the ACF field groups, review them in the ACF admin panel.
   - Make any necessary adjustments or additions to match your project's needs.

## Installation

1. Clone or download this repository to your local development environment.

2. Set up a local web server (e.g., using XAMPP or MAMP) and create a new WordPress installation.

3. Copy the contents of this repository (excluding the `.git` directory) to your WordPress root directory.

4. Create a new, empty database for your WordPress installation.

5. Import the provided database SQL file into the newly created database. You can use a tool like phpMyAdmin or the command line to do this.

6. Configure your `wp-config.php` file to connect to your database.

7. Access your WordPress site in your browser and log in with the provided admin credentials.

8. You're ready to explore and customize this WordPress project!

## Contact

For questions or inquiries, please contact [Guja] at [khelashviliguja@gmail.com].
