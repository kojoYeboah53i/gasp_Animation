<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="main.css">
    <script src="../jquery.js"></script>
    <script src="../main.js"></script>
</head>
<body>
    <h1>Add Staff Member</h1>
    <div class="msg"></div>
    <form id="staffform" action="" method="post">
       <p><input type="text" name="uname" id="" placeholder="User Name"></p>
       <select name="cate" id="">
           <option value="---">Enter Category</option>
           <option value="collectors">Collectors</option>
           <option value="signups">Signups/Marketer</option>
       </select>
       
      <p><input type="date" name="date" id=""></p>
       <p><input type="submit" name="addup" id="adds" value="addUser"></p>
    </form>
</body>
</html>