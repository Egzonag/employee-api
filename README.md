# Employee Batch Import & Management REST API

This Laravel application provides RESTful APIs for batch importing and managing employee data.

## Features

- **Batch Import:** Upload CSV files containing employee data for import into the system.
- **Employee Management:** Provides APIs to manage employee data, including listing, retrieving individual records, and deleting records.
- **Data Structure:** Employees are represented by a data model with various fields such as employee ID, name, gender, email, etc.

## Getting Started

### Prerequisites

- PHP 8.x
- Composer
- MySQL database

### Installation

1. Clone the repository:

```bash
git clone <repository-url>
cd employee-batch-api

Install dependencies:
composer install


Copy the .env.example file to .env and configure your environment variables:
cp .env.example .env

Generate an application key:
php artisan key:generate



Create a new MySQL database and update the .env file with your database credentials.

Run database migrations:
php artisan migrate


Usage
Start the development server:
php artisan serve


You can now access the API endpoints using a tool like cURL, Postman, or your preferred HTTP client.

Batch Import API Endpoint: POST /api/employee
Employee Management API Endpoints:
GET /api/employee: Get all employees
GET /api/employee/{id}: Get employee by ID
DELETE /api/employee/{id}: Delete employee by ID
Example Usage
Batch Import

curl -X POST -H 'Content-Type: text/csv' --data-binary @import.csv http://localhost:8000/api/employee


Get All Employees
curl http://localhost:8000/api/employee

Get Employee by ID
curl http://localhost:8000/api/employee/1


Delete Employee by ID
curl -X DELETE http://localhost:8000/api/employee/1

- **What could be added
- ** 1. Authentication and Authorization
- ** 2. Proper error handling
- ** 3. Validation
- ** 4. Make it scalable 