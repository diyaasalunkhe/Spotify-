<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify Login</title>
  <style>
    
    body {
      font-family: Arial, sans-serif;
      background-color: #77DD76;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color:#77DD76;
      color: white;
      padding: 20px;
      text-align: center;
    }
    
    h1 {
      margin: 0;
    }
    
    main {
      margin: 20px;
    }
    
    form {
      background-color: #FFFF;
      padding: 20px;
      border-radius: 5px;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
    }
    
    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
    }
    
    input[type="submit"] {
      background-color:rgb(2, 2, 51);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header>
    <h1>Spotify Login</h1>
  </header>
  
  <main>
    <form action="spotify.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>

      <label for="gender">Gender:</label>
      <input type="radio" id="male" name="gender" value="m">Male
      <input type="radio" id="female" name="gender" value="f">Female
      <input type="radio" id="other" name="gender" value="o">Other
      
      <label for="Age">Age:</label>
      <input type="text" id="Age" name="Age" required>

      <label for="mobile">Mobile:</label>
      <input type="number" id="mobile" name="mobile" required>

      <label for="Genre">Genre:</label>
      <input type="radio" id="POP" name="Genre" value="POP">POP
      <input type="radio" id="Metal" name="Genre" value="Metal">Metal
      <input type="radio" id="Rock" name="Genre" value="Rock">Rock
      
      <input type="submit" value="Submit" name="submit">
    </form>

    <hr>

    <form action="spotify.php" method="post">
      <label for="delete-email">Email to Delete:</label>
      <input type="text" id="delete-email" name="delete-email" required>
      <input type="submit" value="Delete" name="delete">
    </form>
  </main>
</body>
</html>
