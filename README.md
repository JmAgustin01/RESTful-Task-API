# RESTful-Task-API

RESTful Task API

A lightweight backend API endpoint built in PHP. It is designed to handle HTTP GET and POST requests for a mock task management system, demonstrating a solid understanding of core backend routing, JSON data structuring, and HTTP response codes.

Features

GET Endpoint: Retrieves a list of current tasks in JSON format.

POST Endpoint: Accepts JSON payloads to create a new task and returns the created data.

Error Handling: Returns appropriate HTTP status codes (e.g., 200 OK, 201 Created, 400 Bad Request, 405 Method Not Allowed).

CORS Enabled: Cross-Origin Resource Sharing headers are configured to allow frontend applications to consume the API.

Tech Stack

PHP: Core backend logic and request handling.

JSON: Data interchange format.

How to Run Locally

To run this API, you will need a local PHP server environment (like XAMPP, WAMP, or Laragon).

Clone this repository: git clone https://github.com/JMAGUSTIN01/restful-task-api.git

Move the project folder into your local server's root directory (e.g., htdocs for XAMPP).

Start your Apache server.

Use a tool like Postman or cURL to send requests to the endpoint: http://localhost/restful-task-api/api.php
