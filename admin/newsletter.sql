CREATE DATABASE newsletter;
USE newsletter;
CREATE TABLE register_newsletter(
        id INT AUTO_INCREMENT PRIMARY KEY,
        mail VARCHAR(255) not null unique,
        date_location date default CURRENT_DATE not null
)