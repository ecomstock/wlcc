<?php $currentPage = "Contact"; ?>

<?php include "./header.php"; ?>

	<main role="main">

        <div class="container">
            <section class="resume-section p-md-5 text-center" id="contact">
                <div class="my-auto">
                    <h1 class="mb-4">Contact Us</h1>

                    <ul class="fa-ul mb-4 ml-0">
                        <li id="mail-address">
                            <i class="fas fa-envelope-open mr-2 contact-icons"></i>westlinnchorus@gmail.com</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt mr-2 contact-icons"></i>PO Box 187<br/>West Linn, OR 97068
                        </li>
                    </ul>
                    <p>
                        ...or leave your message below and we will get back to you as soon as
                        possible.
                    </p>

                    <form
                        class="contact-form d-flex flex-column align-items-center"
                        action="https://formspree.io/ecomstock@gmail.com"
                        method="POST">
                        <div class="form-group w-75">
                        <input
                            type="name"
                            class="form-control"
                            placeholder="Name"
                            name="name"
                            required
                        />
                        </div>
                        <div class="form-group w-75">
                            <input
                                type="email"
                                class="form-control"
                                placeholder="Email"
                                name="name"
                                required
                            />
                        </div>

                        <div class="form-group w-75">
                            <textarea
                                class="form-control"
                                type="text"
                                placeholder="Message"
                                rows="7"
                                name="name"
                                required
                            ></textarea>
                        </div>

                        <button type="submit" class="btn btn-submit btn-secondary w-75">Submit</button>
                    </form>
                </div>
            </section>
        </div>

    </main>

<?php include "./footer.php"; ?>