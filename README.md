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
