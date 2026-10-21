
<!DOCTYPE html>
<html>
<head>
    <title>Lab 4 JSON Test</title>
</head>
<body>
    <h2>Lab 4 - JSON Input</h2>
    <button onclick="sendJSON()">Send JSON</button>
    <pre id="result"></pre>

    <script>
        async function sendJSON() {
            const response = await fetch("lab4_input.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    username: "King",
                    password: "test123"
                })
            });

            document.getElementById("result").textContent =
                await response.text();
        }
    </script>
</body>
</html>

