# Lab Exercises: JSON in PHP

This repository contains five PHP JSON lab exercises.

## Files
- `lab1_encode.php` — converts a PHP associative array into JSON.
- `lab2_decode.php` — decodes JSON into an object and an associative array.
- `lab3_api.php` — returns a JSON API-style response.
- `lab4_input.php` — reads JSON sent in the HTTP request body.
- `lab5.html` and `lab5.php` — sends a name with Fetch API and displays the JSON response.

## Run using XAMPP
1. Copy this folder into the XAMPP `htdocs` directory.
2. Start Apache in the XAMPP Control Panel.
3. Open `http://localhost/JSON-in-PHP-Lab/lab1_encode.php` to test Lab 1.
4. Replace `lab1_encode.php` in the URL with `lab2_decode.php` or `lab3_api.php` for Labs 2 and 3.
5. For Lab 4, send a POST request to `http://localhost/JSON-in-PHP-Lab/lab4_input.php` with `Content-Type: application/json` and this body:
   ```json
   {"username":"admin","password":"1234"}
   ```
6. Open `http://localhost/JSON-in-PHP-Lab/lab5.html` to test Lab 5.

## Expected results
- Lab 1: `{"name":"Maria","age":21,"course":"IT"}`
- Lab 2: shows the name and email accessed as an object and as an array.
- Lab 3: `{"id":1,"name":"Maria","email":"maria@example.com","status":"active"}`
- Lab 4: `Username: admin` and `Password: 1234`
- Lab 5: entering `Maria` returns `{"status":"success","message":"Welcome, Maria!"}`

Take screenshots of your actual running results for submission. Do not use the expected-output examples as proof that the code ran.
