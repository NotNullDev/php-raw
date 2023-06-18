-- seed.sql

USE test;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE
);

INSERT INTO users (name, email)
VALUES
  ('User 1', 'user1@example.com'),
  ('User 2', 'user2@example.com'),
  ('User 3', 'user3@example.com');
