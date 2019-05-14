<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Horoscope</title>

</head>
<body>
  <div class="container">
      <h1> Wich Zodiac are you ?</h1>
  <article>
      <label for="birthday">Please enter your birthday:</label>
      <input type="date" name="birthDay" id="birthDay">
      <br>
      <button type="submit" id="save"   name="save"   value="Save" onclick="saveHoroscope()">Save</button>
      <button type="submit" id="update" name="update" value="Edit" onclick="updateHoroscope()">Update</button>
      <button type="submit" id="remove" name="remove" value="remove" onclick="deleteHoroscope()">Remove</button> 
  </article>    
    <ul id="zodiac"></ul>
       

  </div>

</body>

</html>
<script src="horoskop.js"></script>