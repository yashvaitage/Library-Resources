<head>
    <title> Contact Us</title>
</head>


    <!-- navbar starts -->
    <?php include './lrheader.php'; ?>
    <!-- start contact us map page coding -->

    <div class="contact3 py-5 mt-55">
        <div class="row no-gutters">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-shadow">
                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/2.jpg" class="img-fluid">
                        </div>
                    </div>
                    <?php
                    include("config.php");
                    if (isset($_POST['send'])) {
                        $sname = $_POST['sname'];
                        $email = $_POST['email'];
                        $phoneno = $_POST['phoneno'];
                        $message = $_POST['message'];
                        $query = mysqli_query($con, "INSERT INTO `contact`(`sname`, `email`, `phoneno`, `message`) VALUES ('$sname','$email','$phoneno','$message')");
                        if ($query) {
                            echo "<script>alert('Your Message Sent Successfully');
                window.location.href='contactus.php';</script>";
            } else {
                echo "<script>alert('Sumission Failed');
        window.location.href='contactus.php';</script>";
            }}
                    ?>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   

                    <div class="col-lg-6">
                        <div class="contact-box ml-3">
                            <h1 class="font-weight-light mt-2">Contact Us</h1>
                            <form method="POST" class="mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input class="form-control" type="text" placeholder="name" name="sname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input class="form-control" type="email" placeholder="email address" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input class="form-control" type="text" placeholder="phone" name="phoneno" required>
                                            <input class="form-control" type="text" placeholder="" name="id" value="<?php echo $id ?>" hidden>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea class="form-control" rows="message" placeholder="message" name="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" name="send" data-target="#exampleModal" data-toggle="modal" class="btn btn-danger-gradiant mt-3 text-white border-0 px-3 py-2"><span>
                                                SUBMIT</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card mt-4 border-0 mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="card-body d-flex align-items-center c-detail pl-0">
                                        <div class="mr-3 align-self-center">
                                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png">
                                        </div>
                                        <div class="">
                                            <h6 class="font-weight-medium">Address</h6>
                                            <p class="">Bharati Vidyapeeth Educational Complex,
                                                More Vidyalaya Campus,
                                                Erandwane, Paud Road, Pune – 411038
                                                Maharashtra, INDIA
                                                <br> Maharashtra, INDIA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card-body d-flex align-items-center c-detail">
                                        <div class="mr-3 align-self-center">
                                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png">
                                        </div>
                                        <div class="">
                                            <h6 class="font-weight-medium">Phone</h6>
                                            <p class="">+91-20-25448005, +91-20-25425517, +91-20-25431060
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card-body d-flex align-items-center c-detail">
                                        <div class="mr-3 align-self-center">
                                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png">
                                        </div>
                                        <div class="">
                                            <h6 class="font-weight-medium">Email</h6>
                                            <p class="">
                                                ranjanajadhav@gmail.com
                                                <br>imed@bharatividyapeeth.edu
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="address">
                        <h4>Map Location: </h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.3319279242073!2d73.81841921414882!3d18.51389657421202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf9799dbe4f9%3A0x800b27fa2a1a162a!2sInstitute%20of%20Management%20and%20Entrepreneurship%20Development%2CPune!5e0!3m2!1sen!2sin!4v1623342930477!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Footer starts from here  -->
    <?php include("footer.php"); ?>
    <!-- Footer ends here -->
