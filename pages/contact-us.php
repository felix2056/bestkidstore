<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<main class="wrapper main-content" role="main">

    <div class="container">

        <div class="col-md-8 offset-2 grid four-fifths">

            <h2 class="mb-3">Contact Us</h2>

            <form method="post" action="" id="create_customer" class="row" accept-charset="UTF-8">
                <div class="col-md-6">
                    <input type="text" value="" name="name" id="name" placeholder="Name"
                        autofocus="">
                </div>

                <div class="col-md-6">
                    <input type="email" value="" name="email" id="email" placeholder="Email">
                </div>

                <div class="col-md-12">
                    <input type="text" value="" name="phone" id="phone" placeholder="Email" autocorrect="off"
                        autocapitalize="off">
                </div>

                <div class="col-md-12">
                    <textarea name="message" id="message" cols="30" rows="5"></textarea>
                </div>

                <div class="col-md-4">
                    <button type="submit" class="contact-btn mt-3">Submit</button>
                </div>
            </form>

        </div>

    </div>


</main>

<?php include_once('../includes/footer.php'); ?>