<?php include('header.php'); ?>

<!--Main layout-->
<main class="">
    <div class="container">

        <!--Section: Post-->
        <section class="mt-5">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 mx-auto">

                    <!--Reply-->
                    <div class="card mb-4 wow fadeIn">
                        <div class="card-header text-center text-white font-weight-bold unique-color">Form</div>
                        <div class="card-body">

                            <form action="" method="">
                                
                                <div class="md-form">
                                    <input type="text" id="f-name" class="form-control">
                                    <label for="f-name">Name</label>
                                </div>
                                
                                <div class="md-form">
                                    <input type="number" id="f-number" class="form-control">
                                    <label for="f-number">Mobile Number</label>
                                </div>
                                
                                <div class="md-form">
                                    <input type="email" id="f-email" class="form-control">
                                    <label for="f-email">Email Id</label>
                                </div>
                                
                                <div class="md-form">
                                    <input type="text" id="f-bname" class="form-control">
                                    <label for="f-bname">Bussiness Name</label>
                                </div>

                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="" disabled selected>Select Nature of Business</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="" disabled selected>Select Desired Business</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>

                                <div class="text-center mt-4">
                                    <a id="" class="btn unique-color text-white btn-md mb-4 waves-effect waves-light" href="payment.php" role="button">Pay Bill</a>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!--/.Reply-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>

<!--Main layout-->

<?php include('footer.php'); ?>

