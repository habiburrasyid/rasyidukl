<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="stylere.css">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
            <form action="register.php" method="post" name="formal">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="teks" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="teks" name="password" required></td>
                    </tr>
                    <tr>
                        <td>level</td>
                        <td>
                            <select name="level" id="level" required>
                                <option disabled selected>Pilih</option>
                                <option value="admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <button class="btn" name="submit">Register</button>
                    </tr>
                </table>
                <?php
            //check if form submitted, insert form data into users table.
            if(isset($_POST['submit'])){
                $usernames = $_POST['username'];
                $passwords = $_POST['password'];
                $levels = $_POST['level'];
                //echo($judul);
                //include database connection file
                include_once("koneksi.php");
                
                //insert user data table
                $result = mysqli_query($mysqli,
                "INSERT INTO user(username,password,level) VALUES('$usernames','$passwords','$levels')");

                //show message when user added
                //echo "Data added successfully. <a href='index.php'>View data</a>
                header("location: index.php");
            }
            ?>
            </form>
    </div> 
</body>
</html>