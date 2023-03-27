<?php
session_start();
if(isset($_SESSION['user_id'])) {
    // użytkownik jest już zalogowany, przekieruj na stronę panelu użytkownika
    header("Location: user_panel.php");
}

// funkcja do połączenia z bazą danych
function db_connect() {
    $db_host = "localhost";
    $db_user = "username";
    $db_password = "password";
    $db_name = "database_name";
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if(!$conn) {
        die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
    }
    return $conn;
}

// funkcja do weryfikacji danych logowania użytkownika
function login($username, $password) {
    $conn = db_connect();
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1) {
        // poprawne dane logowania
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        return true;
    } else {
        // niepoprawne dane logowania
        return false;
    }
}

// funkcja do rejestracji nowego użytkownika
function register($username, $password) {
    $conn = db_connect();
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        // rejestracja powiodła się
        return true;
    } else {
        // rejestracja nie powiodła się
        return false;
    }
}

// obsługa formularza logowania
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(login($username, $password)) {
        // zalogowano użytkownika, przekieruj na stronę panelu użytkownika
        header("Location: user_panel.php");
    } else {
        // niepoprawne dane logowania
        $error = "Niepoprawna nazwa użytkownika lub hasło.";
    }
}

// obsługa formularza rejestracji
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(register($username, $password)) {
        // rejestracja powiodła się, przekieruj na stronę logowania
        header("Location: login.php");
    } else {
        // rejestracja nie powiodła się
        $error = "Wystąpił błąd podczas rejestracji. Spróbuj ponownie.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forum internetowe - logowanie i rejestracja</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h1>Forum internetowe</h1>
        <h2>Logowanie</h2>
        <?php
        if(isset($error)) {
            echo '<p class="error">' . $error . '</p>';
        }
        ?>
          <form method="post" action="">
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" name="login" value="Zaloguj">
        </form>
        <h2>Rejestracja</h2>
        <form method="post" action="">
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" name="register" value="Zarejestruj">
        </form>
    </div>
</body>
</html>  
