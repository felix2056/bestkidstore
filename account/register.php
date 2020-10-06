<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<main class="wrapper main-content" role="main">

    <div class="grid">

        <div class="grid-item large--one-third push--large--one-third text-center">

            <h1>Create Account</h1>

            <form method="post" action="/account" id="create_customer" accept-charset="UTF-8"><input type="hidden"
                    name="form_type" value="create_customer"><input type="hidden" name="utf8" value="✓">





                <label for="first_name" class="hidden-label">First Name</label>
                <input type="text" value="" name="customer[first_name]" id="first_name" placeholder="First Name"
                    autofocus="">

                <label for="last_name" class="hidden-label">Last Name</label>
                <input type="text" value="" name="customer[last_name]" id="last_name" placeholder="Last Name">

                <label for="email" class="hidden-label">Email</label>
                <input type="email" value="" name="customer[email]" id="email" placeholder="Email" autocorrect="off"
                    autocapitalize="off">

                <label for="password" class="hidden-label">Password</label>
                <input type="password" value="" name="customer[password]" id="create_password" placeholder="Password">
                <p>
                    <input type="submit" value="Create" class="btn">
                </p>
                or <a href="/">Return to Store</a>

            </form>

        </div>

    </div>


</main>

<?php include_once('../includes/footer.php'); ?>