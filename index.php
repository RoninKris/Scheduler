<!-- TODO: DEPLOY this project by following this link https://dev.to/jorenrui/6-ways-to-deploy-your-personal-websites--php-mysql-web-apps-for-free-4m3a#heroku-mysql -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Scheduler</title>
</head>
<body>
  <div class="main-container">
    <a onClick="showAddForm()" id="add-button">&plus;</a>
    <div class="header"><p>Scheduler</p></div>
    <?php include('display.php'); ?>
    <div class="main-course-container">
      <p id="day">Monday</p>
        <?php 
        createDiv("monday");
        ?>
      <p id="day">Tuesday</p>
      <?php
        createDiv("tuesday");
      ?>
      <p id="day">Wednesday</p>
      <?php
        createDiv("wednesday");
      ?>
      <p id="day">Thursday</p>
      <?php
        createDiv("thursday");
      ?>
      <p id="day">Friday</p>
      <?php
        createDiv("friday");
      ?>
      <p id="day">Saturday</p>
      <?php
        createDiv("saturday");
      ?>
      <p id="day">Sunday</p>
      <?php
        createDiv("sunday");
        
      ?>
    </div>
    <div class="add form">
      <div class="header"><input type="button" value="X" id="close-button" onClick="hideAddForm()"></div>
      
      <form name="add-form"action="add.php" method="post" onsubmit="return validateAddForm()">
        <center>
          <select name="day" id="day">
            <optgroup>
              <option value="" selected disabled>Select Day</option>
              <option value="monday">Monday</option>
              <option value="tuesday">Tuesday</option>
              <option value="wednesday">Wednesday</option>
              <option value="thursday">Thursday</option>
              <option value="friday">Friday</option>
              <option value="saturday">Saturday</option>
              <option value="sunday">Sunday</option>
            </optgroup>
          </select><br>
        </center>
          <label for="subject">Subject</label><br>
          <input type="text" name="subject" required> <br>
          <label for="teacher">Teacher</label><br>
          <input type="text" name="teacher"> <br>
          <label for="start-time" required>Start Time</label><br>
          <input type="time" name="start-time"> <br>
          <label for="end-time">End Time</label><br>
          <input type="time" name="end-time" required> <br>
          <center><input type="submit" value="Submit"></center>
        </form>
    </div>
  </div>
</body>

<script src="script.js"></script>
</html>