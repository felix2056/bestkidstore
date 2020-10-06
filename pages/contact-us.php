<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="page-container drawer-page-content" id="PageContainer">

    <main class="main-content" id="MainContent" role="main">
        <div class="page-width">
            <div class="grid">
                <div class="grid__item medium-up--five-sixths medium-up--push-one-twelfth">
                    <div class="section-header text-center">
                        <h1>Contact us</h1>
                    </div>


                    <div class="rte">
                        <p><strong>GET IN TOUCH.</strong></p>
                        <p>Have a question, or you simply want an update on your order?</p>
                        <p>Feel free to&nbsp;drop us an email.&nbsp;We're always happy to help!</p>
                        <p>Our hours are Mon - Sat, 9am - 6.30pm EST. We aim to respond to most emails within 24-48
                            business hours (if you&nbsp;have not received&nbsp;a response from us after then, please
                            check your spam bin.)</p>
                    </div>


                    <div class="contact-form form-vertical">
                        <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8"
                            class="contact-form"><input type="hidden" name="form_type" value="contact"><input
                                type="hidden" name="utf8" value="✓">
                                
                            <div class="grid grid--half-gutters">
                                <div class="grid__item medium-up--one-half">
                                    <label for="ContactFormName">Name</label>
                                    <input type="text" id="ContactFormName" name="contact[name]" value="">
                                </div>
                                <div class="grid__item medium-up--one-half">
                                    <label for="ContactFormEmail" class="">Email</label>
                                    <input type="email" id="ContactFormEmail" name="contact[email]" autocorrect="off"
                                        autocapitalize="off" value="" class="">
                                </div>
                            </div>

                            <label for="ContactFormPhone">Phone Number</label>
                            <input type="tel" id="ContactFormPhone" name="contact[phone]" pattern="[0-9\-]*" value="">

                            <label for="ContactFormMessage">Message</label>
                            <textarea rows="10" id="ContactFormMessage" name="contact[body]"></textarea>

                            <input type="submit" class="btn" value="Send">

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include_once('../includes/footer.php'); ?>
</div>