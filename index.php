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

                            <form action="" method="" name="paymentForm" id="paymentForm">
                                
                                <div class="form-group">
                                    <label for="f_name">Name</label>
                                    <input type="text" id="f_name" name="f_name" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="f_number">Mobile Number</label>
                                    <input type="number" id="f_number" name="f_number" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="f_email">Email Id</label>
                                    <input type="email" id="f_email" name="f_name" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="f_bname">Bussiness Name</label>
                                    <input type="text" id="f_bname" name="f_bname" class="form-control">
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="f_bnature" id="f_bnature">
                                        <option value="" disabled selected>Select Nature of Business</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <select class="form-control" name="f_dbusiness" id="f_dbusiness">
                                        <option value="" disabled selected>Select Desired Business</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn unique-color text-white btn-md mb-4 waves-effect waves-light" href="#">Pay Bill</button>
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


<script>

    $(document).ready(function() {
        $('#paymentForm').bootstrapValidator({

            fields: {

                f_name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },
                f_number: {
                    validators: {
                        notEmpty: {
                            message: 'Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9. ]*$/,
                            message: 'Number can only consist of digits'
                        }
                    }
                },
                f_email: {
                    validators: {
                        notEmpty: {
                            message: 'Email is required'
                        }
                    }
                },
                f_bname: {
                    validators: {
                        notEmpty: {
                            message: 'Business Name is required'
                        }
                    }
                },
                f_bnature: {
                    validators: {
                        notEmpty: {
                            message: 'Nature of Business is required'
                        }
                    }
                },
                f_dbusiness: {
                    validators: {
                        notEmpty: {
                            message: 'Desired Business is required'
                        }
                    }
                }
            }
        })

    });

</script>