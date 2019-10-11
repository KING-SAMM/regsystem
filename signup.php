<?php
    include_once 'header.php';
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h4>Sign up to get started</h4>
            <form class="signup-form" method="post" action="includes/signup.inc.php">
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Sign Me Up</button>
            </form>
        </div>
    </section>

<?php
    include_once 'footer.php';
?>

