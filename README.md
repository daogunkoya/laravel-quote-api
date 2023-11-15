

## Quote Feature API

This Laravel application provides an API to fetch Kanye West quotes. It includes caching using Redis, API token authentication, and uses the Laravel Manager design pattern to implement the feature.



### Setup

#### Prerequisites

-  Laravel installed (minimum version 10.10) 
-  Homestead configured (with Redis enabled) 

## Installation

 Clone the repository:
- git clone https://github.com/your-username/kanye-quote-app.git
- cd kanye-quote-app

 Install dependencies:
- composer install

- Set up your API_TOKEN in the .env file.

 Copy the .env.example file to .env:
- cp .env.example .env

#### Running the Application

- Laravel Homestad or php artisan serve


### The API endpoints are:

- GET /api/quotes/ - Fetch 5 random Kanye West quotes.
- GET /api/quotes/refresh - Refresh quotes and fetch the next five random quotes.


## Testing

 Feature Tests
 To run feature tests:
- php artisan test --testsuite=Feature

 Unit Tests
 To run unit tests:
- php artisan test --testsuite=Unit


## Additional Functionality
The application currently uses the KanyeQuote driver for fetching quotes from the Kanye West API. To expand functionality to fetch quotes from other APIs, additional drivers can be implemented following the Laravel Manager design pattern.


##   Authentication
API token authentication is enforced using middleware for the API endpoints. Ensure your requests include the Authorization header with the valid API_TOKEN.
