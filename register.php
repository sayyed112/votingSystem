<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Voting System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="font-family: calibri; font-size: 12px;">
  <center>
    <h2>Voting System</h2>
<div class="container">
  <form action="action.php" name="votingForm" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
    <div class="row">
      <div class="col-25">
        <label for="Fname">Ful Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your full name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="id">ID #</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" placeholder="Your ID..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="Enter Your Address" style="height:80px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="file">File</label>
      </div>
      <div class="col-75">
        <input type="file" id="anyfile" name="anyfile">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
<br>
</center>
</body>
</html>
<script>
function validateForm() {
  let name = document.forms["votingForm"]["name"].value;
  let id = document.forms["votingForm"]["id"].value;
  let address = document.forms["votingForm"]["address"].value;
  let file = document.forms["votingForm"]["anyfile"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  if (id == "") {
    alert("ID must be filled out");
    return false;
  }
  if (address == "") {
    alert("Address must be filled out");
    return false;
  }
  if (file == "") {
    alert("File must be filled out");
    return false;
  }
}
</script>
