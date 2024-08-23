Learning Challenge

# Intro to PHP Workshop 🐘

Welcome to the Intro to PHP workshop! 👋 

This workshop provides hands-on experience working with PHP, a popular server-side scripting language. You will learn:

- Basic PHP syntax and structure 📝
- Variables and data types in PHP 🔢
- Control structures (if statements, loops) 🔁
- Functions in PHP 🛠️
- Working with arrays 📊
- Handling form data 📋

## Getting Started

1. Ensure PHP is installed on your system. Check by running `php -v` in your terminal.
2. Clone this repository to your local machine.
3. Navigate to the project directory in your terminal.
4. Start a local PHP server:

php -S localhost:8000

5. Open your browser and go to `http://localhost:8000` to see your PHP page in action.

## Workshop Tasks

Complete the following tasks in `index.php`:

### Ticket 1: Variables and Data Types

#### 1a. Declaring Variables

- **Instructions**: 

- Create variables for a person's name, age, and whether they're a student (boolean).
- Echo these variables to the browser.

- **Expected Outcome**: 

- The browser should display the person's name, age, and student status.

#### 1b. Data Type Conversion

- **Instructions**:

- Convert the age to a string and concatenate it with the name.
- Convert the boolean student status to a string ("Yes" or "No").

- **Expected Outcome**:

- The browser should display a sentence like "John is 25 years old." and "Student: Yes" or "Student: No".

### Ticket 2: Control Structures

#### 2a. If Statements

- **Instructions**:

- Use an if statement to check if the person is over 18.
- Echo an appropriate message based on the result.

- **Expected Outcome**:

- The browser should display either "You are an adult." or "You are a minor." based on the age.

#### 2b. Loops

- **Instructions**:

- Create an array of 5 favorite foods.
- Use a foreach loop to display each food item.

- **Expected Outcome**:

- The browser should display a list of 5 favorite foods.

### Ticket 3: Functions

#### 3a. Creating a Function

- **Instructions**:

- Create a function that takes a name as a parameter and returns a greeting.
- Call this function with different names and echo the results.

- **Expected Outcome**:

- The browser should display greetings for different names, like "Hello, John!" and "Hello, Jane!".

#### 3b. Function with Multiple Parameters

- **Instructions**:

- Create a function that calculates the area of a rectangle (length * width).
- Call this function with different values and echo the results.

- **Expected Outcome**:

- The browser should display the areas of different rectangles, like "Area: 50 sq units" for a 5x10 rectangle.

### Ticket 4: Working with Arrays

#### 4a. Associative Arrays

- **Instructions**:

- Create an associative array representing a person (name, age, city).
- Use a foreach loop to display the key-value pairs.

- **Expected Outcome**:

- The browser should display the person's details, like "Name: John, Age: 25, City: New York".

#### 4b. Array Functions

- **Instructions**:

- Use PHP array functions (like sort(), count(), array_push()) on your favorite foods array.
- Display the results of these operations.

- **Expected Outcome**:

- The browser should display the sorted array, the count of items, and the array after adding a new item.

### Ticket 5: Handling Form Data

#### 5a. Creating a Form

- **Instructions**:

- Create an HTML form that asks for a user's name and favorite color.
- Use the POST method for the form.

- **Expected Outcome**:

- The page should display a form with fields for name and favorite color, and a submit button.

#### 5b. Processing Form Data

- **Instructions**:

- Create a PHP script that receives the form data.
- Display a personalized message using the submitted data.

- **Expected Outcome**:

- After submitting the form, the page should display a message like "Hello, John! Your favorite color is blue."

