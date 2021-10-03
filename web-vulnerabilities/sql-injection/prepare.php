<?php
if (isset($_POST['user']) && isset($_POST['pass'])) {
    // $mysqli = new mysqli('domain', 'user', 'password', 'db_name');
    $mysqli = new mysqli('****', '****', '****', '****');

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql_query = $mysqli->prepare("SELECT * FROM Users WHERE user = ? and pass = ?;");
    $sql_query->bind_param('ss', $user, $pass);
    $sql_query->execute();
    $result = $sql_query->get_result();
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