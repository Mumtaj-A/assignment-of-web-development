# MVC and Laravel Questions & Answers

---

### 1. What responsibilities are unique to the **Model** compared to the View and Controller?

* **Model**:
  * Manages the data and business logic of the application.
  * Interacts with the database to fetch, insert, update, or delete data.
  * Validates data rules and ensures data integrity.
  * Contains the core logic for data processing and state management.

* **View**:
  * Responsible for displaying data (UI).
  * Presents the data fetched from the model to the user.
  * Handles the user interface elements (HTML, CSS, templates).

* **Controller**:
  * Acts as an intermediary between Model and View.
  * Processes user input from the View.
  * Calls model methods to update or fetch data.
  * Selects which View to display.

**Summary:** The Model uniquely handles **data management and business logic**, whereas the View is about presentation, and the Controller is about request handling and coordination.

---

### 2. Explain the process of accessing input data in a Controller?

* In frameworks like Laravel or other MVC frameworks:
  * The controller receives a request object that contains user input.
  * Input can come from GET, POST, PUT, DELETE requests.
  * The controller accesses input data using request helper methods.

**Example in Laravel:**

```php
public function store(Request $request) {
    $title = $request->input('title');   // Access input named 'title'
    $author = $request->get('author');   // Alternative way
    // Process the data...
}

### 3. What are the key features of Laravel?

- MVC architecture support.
- Eloquent ORM for database management.
- Routing system to define URL endpoints.
- Blade templating engine for views.
- Middleware for filtering HTTP requests.
- Authentication & Authorization built-in.
- Artisan CLI for command-line operations.
- Task scheduling for automated tasks.
- Queues for background jobs.
- Database migration & seeding.
- RESTful controllers and API support.
- Rich ecosystem and packages.

---

### 4. Describe the role of Model and what is business logic in Model?

**Role of Model:**

- Represents the data structure and handles database interactions.
- Encapsulates data retrieval, storage, validation, and update logic.
- Serves as the single source of truth for the application's data.

**Business Logic in Model:**

- The rules or algorithms that define how data is created, stored, validated, and manipulated.
- Examples: calculating prices, validating user age, enforcing constraints.
- Keeps application behavior consistent and centralized in one place.

---

### 5. What is Routing and how do we define routes for controller?

**Routing:**  
It is the mechanism of mapping HTTP requests (URLs) to specific controller actions or functions.  
Defines how the application responds to various endpoints.

**Defining routes for controller (Laravel example):**

```php
// Simple GET route to call showBookList method in BookController
Route::get('/books', [BookController::class, 'showBookList']);

// POST route to save a book
Route::post('/books/save', [BookController::class, 'saveBook']);

// DELETE route to delete a book
Route::delete('/books/delete/{id}', [BookController::class, 'deleteBook']);

