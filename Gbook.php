<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
</head>
<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    min-height: 100vh;
}
.navbar {
    display: flex;
    justify-content: center;
    background-color: #333;
    z-index: 1000;
}
.navbar a:hover{
    background-color: #666666;
}
.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    width: 30%; 
    transition: background-color 0.3s ease,padding 0.3s ease;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
form {
    margin-bottom: 20px;
}
h1{
    text-align: center;
}
label {
    display: block;
    margin-bottom: 5px;
    text-align: center;
}

input, textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

button:hover {
    background-color: #45a049;
}

#guestList {
    margin-top: 20px;
}
    </style>
<body>
<nav class="navbar">
            <a class="active" href="index.php">Home</a>
             <a href="Profile.php" target="_blank">Profile</a>
             <a href="">Guest Book</a>
        </nav>
    <h1>Guest Book</h1>
    <form id="guestForm">
        <label for="name">Nama:</label>
        <input type="text" id="name" required>
        <label for="email">Email:</label>
        <input type="gmail" id="email" required>
        <label for="message">Pesan:</label>
        <textarea id="message" required></textarea>
        <button type="submit">Kirim</button>
    </form>
    <div id="guestList"></div>
    <script>document.getElementById('guestForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get input values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    // Create new guest entry
    var guestEntry = document.createElement('div');
    guestEntry.classList.add('entry');
    guestEntry.innerHTML = '<strong>' + name + ':</strong> ' + message;

    // Append to guest list
    document.getElementById('guestList').appendChild(guestEntry);

    // Clear form fields
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('message').value = '';
});</script>
</body>
</html>