<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Static Form</title>
<style>
    body { font-family: sans-serif; margin: 20px; }
    label { display: block; margin-bottom: 5px; }
    input[type="text"],
    textarea {
        width: 300px;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
<h1>Simple Static Form</h1>
<form action="/submit-static-form" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required />
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5"></textarea>
    </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>
