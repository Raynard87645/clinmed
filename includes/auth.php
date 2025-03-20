<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['username']);
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: ../views/auth/login.php');
        exit();
    }
}

function login($username, $password) {
    global $conn;
  
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result === false) {
        die("Error executing query: " . $stmt->error);
    }
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['firstname']." ". $user['lastname'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['success'] = "You are now logged in";
            return true;
        }
    } else {
        array_push($errors, "No user found with email: $username");
    }

    $stmt->close();
    $conn->close();
    return false;
}


function register($firstname, $lastname, $username, $email, $password_1, $password_2, $title) {
    global $conn;
    global $errors;

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        // $password = password_hash($password_1, PASSWORD_DEFAULT);//encrypt the password before saving in the database
        $sql = "INSERT INTO users (username, firstname, lastname, email, password, title ) VALUES(?,?,?,?,?,?)";
            $stmtinsert = $conn->prepare($sql);
            $result = $stmtinsert->execute([$username, $firstname, $lastname, $email, password_hash($password_1, PASSWORD_DEFAULT), $title]);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['firstname']." ". $user['lastname'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['success'] = "You are now logged in";
    }
}


function logout() {
    session_destroy();
    header('Location: ../');
    exit();
}
?>
