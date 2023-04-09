<?php
session_start();
if($_SESSION['success']!='1')
{
    header('location: index.html');
    return;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>My Webpage</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Roboto', sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
      }
      header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      h1 {
        margin: 0;
        font-size: 24px;
        font-weight: bold;
      }
      button {
        background-color: #4CAF50;
        border: none;
        border-radius: 10px;
        color: white;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        margin: 20px;
        cursor: pointer;
        font-family: 'Roboto', sans-serif;
        transition: all 0.3s ease-in-out;
      }
      button:hover {
        box-shadow: 0px 0px 15px #3e8e41;
        transform: scale(1.1);
      }
      #story-generator {
        background-color: #2196F3;
        width: 35%;
        height: 50%;
        font-size: 2rem;
        margin-right: 70px;
      }
      #mind-palace {
        background-color: #FFC107;
        width: 35%;
        height: 50%;
        font-size: 2rem;
      }
      .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 100px);
      }
    </style>
  </head>
  <body>
    <header>
      <h1>MemDump</h1>
      <button onclick="signOut()"><a href="index.html">Sign Out</a></button>

        <script>
        function signOut() {
          // Send an AJAX request to the signout.php script
          var xhr = new XMLHttpRequest();
          xhr.open('GET', 'signout.php', true);
          xhr.send();
        }
        </script>

    </header>
    <div class="button-container">
      <button id="story-generator">Story Generator</button>
      <button id="mind-palace">Mind Palace</button>
    </div>
  </body>
</html>
