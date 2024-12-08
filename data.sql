CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    membership_type ENUM('Standard', 'Premium') DEFAULT 'Standard',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
id: Unique user identifier (primary key).
email: User's email address.
password: User's password (hashed).
membership_type: Can be 'Standard' or 'Premium'.
created_at and updated_at: Timestamps for when the user was created and last updated.
2. Profiles Table
This table stores additional profile information for each user. Each user has one profile.

sql
Copy code
CREATE TABLE profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    full_name VARCHAR(255) NOT NULL,
    location VARCHAR(255),
    profile_picture VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
user_id: Foreign key referencing the users table. It creates a one-to-one relationship with the users table.
full_name: User's full name.
location: User's location.
profile_picture: Path to user's profile picture (if applicable).
created_at and updated_at: Timestamps for when the profile was created and last updated.
3. Activities Table
This table stores user activities like course completion, event attendance, and research submissions.

sql
Copy code

CREATE TABLE activities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    activity_type ENUM('Course', 'Event', 'Research', 'Other') NOT NULL,
    activity_description TEXT,
    activity_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

user_id: Foreign key referencing the users table.
activity_type: Type of activity (e.g., Course, Event, Research, etc.).
activity_description: A textual description of the activity (e.g., course name, event title).
activity_date: Timestamp for when the activity occurred.
4. Notifications Table
This table stores user notifications.

sql
Copy code
CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    message TEXT NOT NULL,
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

user_id: Foreign key referencing the users table.
message: The notification message.
is_read: Whether the notification has been read (default is FALSE).
created_at: Timestamp for when the notification was created.
Relationships
Users Table is related to Profiles Table through user_id (one-to-one relationship).
Users Table is related to Activities Table and Notifications Table through user_id (one-to-many relationships).
All relationships are defined with foreign keys, ensuring referential integrity.
Example SQL Queries
1. Inserting a New User
To register a new user, you'd insert data into the users table, then create their profile.

sql
Copy code
-- Insert new user into users table
INSERT INTO users (email, password, membership_type)
VALUES ('john.doe@example.com', 'hashed_password_here', 'Premium');

-- Insert user profile
INSERT INTO profiles (user_id, full_name, location)
VALUES (LAST_INSERT_ID(), 'John Doe', 'New York, USA');
LAST_INSERT_ID(): This function returns the last inserted id (from the users table) to link the profile correctly.
2. Updating a User's Profile
To update the user's profile details (such as full name, email, etc.):

sql
Copy code
UPDATE profiles
SET full_name = 'John Doe Updated', location = 'Los Angeles, USA'
WHERE user_id = 1;  -- Replace '1' with the actual user's id
3. Adding User Activity
You can record a new activity for a user:

sql
Copy code
-- User attended a course
INSERT INTO activities (user_id, activity_type, activity_description)
VALUES (1, 'Course', 'Completed Ethical Data Practices course');
4. Adding a Notification
A new notification for a user can be added like this:

sql
Copy code
-- Add a new notification
INSERT INTO notifications (user_id, message, is_read)
VALUES (1, 'Your course completion certificate is ready!', FALSE);
5. Retrieving User's Profile and Activities
You can retrieve a user’s profile along with their recent activities.

sql
Copy code
-- Get user profile details
SELECT p.full_name, p.location, p.profile_picture
FROM profiles p
JOIN users u ON p.user_id = u.id
WHERE u.email = 'john.doe@example.com';

-- Get user's recent activities
SELECT a.activity_type, a.activity_description, a.activity_date
FROM activities a
WHERE a.user_id = 1
ORDER BY a.activity_date DESC
LIMIT 5;
6. Retrieving Notifications
You can retrieve all unread notifications for a user:

sql
Copy code
-- Get unread notifications for a user
SELECT message, created_at
FROM notifications
WHERE user_id = 1 AND is_read = FALSE;
Backend Integration
To integrate this with your backend, you would need to use a server-side language (e.g., PHP, Node.js, Python, etc.) to interact with the database and display dynamic content on the user dashboard.

For instance, in PHP, you could use PDO to connect to the database and fetch data:

php
Copy code
// Example: Fetch user profile
$stmt = $pdo->prepare("SELECT full_name, location, profile_picture FROM profiles WHERE user_id = ?");
$stmt->execute([$userId]);
$userProfile = $stmt->fetch();