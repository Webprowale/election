<?php
session_start();
$username = $email = $password = $catch_pass = $catch_user = $catch_email = "";

if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if (empty($username) || empty($password)) {
        $catch_user = "The input field is required!";
        $catch_pass = "The input field is required!";
    } else {
        include("./Components/config.php");
        $check_user = $conn->prepare("SELECT * FROM auth WHERE username =? AND role = 'voter'");
        $check_user->bind_param("s", $username);
        $check_user->execute();
        $results = $check_user->get_result();

        if (!$results->num_rows > 0) {
            $catch_user = "Username does not exist";
        } else {
            $user = $results->fetch_assoc();
            $user_password = $user['password'];

            if (password_verify($password, $user_password)) {
                $_SESSION['role'] = 'voter';
                $_SESSION['user_id'] = $username;
                $_SESSION['LAST_ACTIVITY'] = time();
                $update_at = $conn->prepare("UPDATE auth SET update_at = CURRENT_TIMESTAMP WHERE username = ? AND role = 'voter'");
                $update_at->bind_param("s", $username);
                $update_at->execute();
                $update_at->close();

                echo "<script>
                        alert('Logged in successfully!');
                        window.location.href = '../voter';
                      </script>";
            } else {
                $catch_pass = "Incorrect password";
            }
        }
        $check_user->close();
        mysqli_close($conn);
    }
}
?>

<?php include("./Components/header.php"); ?>

<section class="container-fluid pb-5">
    <div class="container my-3 shadow rounded px-md-5 px-2 py-4 bg-white mt-5" style="max-width: 30rem;">
        <div class="text-center mb-5">
            <h5 class="fs-3 fw-bold secondaryC">Sign In</h5>
            <p class="fw-semibold mb-1">Let's get you set up to vote for your candidate</p>
        </div>
        <form method="post">
            <div class="form-floating mb-3 shadow rounded">
                <input type="text" name="username" value="<?= htmlspecialchars($username) ?>" class="form-control text-black" id="floatingInput" placeholder="username">
                <label for="floatingInput" style="background-color: transparent;">Enter Username...</label>
                <small class="fw-semibold text-danger"><?= $catch_user ?></small>
            </div>
            <div class="form-floating mb-1 shadow rounded p-0">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password...">
                <label for="password" style="background-color: transparent;">Password...</label>
                <small class="fw-semibold text-danger"><?= $catch_pass ?></small>
            </div>
            <div class="mb-4">
                <input type="checkbox" id="togglePassword" class="toggle-password">
                <label for="togglePassword">Show Password</label>
            </div>
            <input type="submit" name="login" value="Sign In" class="btn secondaryB text-white form-control b fs-5">
        </form>
    </div>
</section>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#password');

    togglePassword.addEventListener('change', function() {
        const type = this.checked ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    });
</script>

<?php include("./Components/footer.php"); ?>
