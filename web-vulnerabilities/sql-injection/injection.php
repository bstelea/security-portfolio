<?php
if (isset($_POST['user']) && isset($_POST['pass'])) {
    // $mysqli = new mysqli('domain', 'user', 'password', 'db_name');
    $mysqli = new mysqli('****', '****', '****', '****');

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql_query = "SELECT * FROM Users WHERE user = '$user' and pass = '$pass';";
    $result = $mysqli->query($sql_query);
    if ($result->num_rows == 0) {
        echo "<p>Something went wrong...</p>";
    } else {
        echo "<h2>Here are your details:</h2>";
        while ($row = $result->fetch_array()) {
            echo "<p>id: " . $row['id'] . ", username: " . $row['user'] . ", and password: " . $row['pass'] . "</p>";
        }
    }
}
?>