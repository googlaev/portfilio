<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>новости</title>
    <style>
   .header { background: #D5BAE4; 
    height: 300px;
    background-image: url(1.png);
    text-align: center;
    font-size: 600%;
    color: white;
    line-height: 5em;
  }
  .layout { overflow: hidden; }
   .col1 { background: #ffffff; float: left; width: 200px; }
   .col2 { background: #e7e7e66b; 
    margin: 0 100px 0 200px; /* Отступ справа и слева */
   }
   .col3 { background: #ffffff; width: 100px; float: right; }
   #footer {
    position: fixed; /* Фиксированное положение */
    left: 0; bottom: 0; /* Левый нижний угол */
    padding: 10px; /* Поля вокруг текста */
    background: #212330; /* Цвет фона */
    color: #fff; /* Цвет текста */
    width: 100%; /* Ширина слоя */
   }


    </style>
</head>
<body>
  <div class="header">МОЙ БЛОГ</div>
  <div class="layout">
<div class="col1">
    <form name="feedback" method="POST" action="index.php">
<label>Логин: <input type="text"  name="name"></label>
<br>
  <label>Пароль: <input type="password"  name="pass"></label>
 <br>
<br>
  <input type="submit" name="send" value="Ok">
</form>

</div>
   <div class="col3"></div>
   <div class="col2"> <?php

if ($_POST['name'] == "admin" and $_POST["pass"] == "1234"){
echo '<a href="add_news.php">ДОБАВИТЬ НОВОСТЬ</a> 
<a href="del_news.php">удалить НОВОСТЬ</a>
<a href="update.php">Обновить НОВОСТЬ</a>';

}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`, `head`, `text` FROM `news` WHERE 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<p> <div style='border:1px solid black'> <h1> ".$row['head']."</h1>";
      echo " <p>".$row['id']." | ".$row['text']."</p> </div> </p>";
    }
} else {
    echo "0 results";
}
$conn->close();



?> </div>
  </div>
  
  <div id="footer">
    &copy; Иванов Иван
   </div>









</body>
</html>
