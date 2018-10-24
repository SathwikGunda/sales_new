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
                    <div class="card mb-5 wow fadeIn">
                        <div class="card-header unique-color text-white text-center font-weight-bold">Payment method</div>
                        <div class="card-body">
                            <form action="" method="">

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input p-type" id="p-cash" name="payment-type" value="cash" checked>
                                    <label class="custom-control-label" for="p-cash">Cash</label>
                                </div>

                                <div class="form form-cash pt-3">

                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="" disabled selected>Choose Option</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="c-amount">Amount</label>
                                        <input type="number" id="c-amount" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="c-reason">Reason</label>
                                        <textarea id="c-reason" class="form-control"></textarea>
                                    </div>

                                </div>

                                <div class="custom-control custom-radio mt-2">
                                    <input type="radio" class="custom-control-input p-type" id="p-online" name="payment-type" value="online">
                                    <label class="custom-control-label" for="p-online">Credit / Debit / ATM Card</label>
                                </div>

                                <div class="form form-online pt-3">

                                    <div class="form-group">
                                        <label for="o-card-number">Card Number</label>
                                        <input type="text" id="o-card-number" class="form-control">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="o-cvv">CVV</label>
                                                <input type="text" id="o-cvv" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="o-exp-mm">Expiry Month</label>
                                                        <select id="o-exp-mm" class="form-control">
                                                            <option value="" disabled selected>MM</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="o-exp-yy">Expiry Year</label>
                                                        <select id="o-exp-yy" class="form-control">
                                                            <option value="" disabled selected>YY</option>
                                                            <option value="1">22</option>
                                                            <option value="2">23</option>
                                                            <option value="3">24</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="custom-control custom-radio mt-2">
                                    <input type="radio" class="custom-control-input p-type" id="p-net-banking" name="payment-type" value="net-banking">
                                    <label class="custom-control-label" for="p-net-banking">Net-Banking</label>
                                </div>

                                <div class="form form-net-banking pt-3">
                                    
                                    <div class="form-group">
                                        <select id="n-bank" class="form-control">
                                            <option value="" disabled selected>Select Bank</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="n-username">Username</label>
                                                <input type="text" id="n-username" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="n-password">Password</label>
                                                <input type="text" id="n-password" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="text-center mt-4">
                                    <a id="" class="btn unique-color text-white btn-md mb-4 waves-effect waves-light" href="#" role="button">Confirm</a>
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
    function selectForm() {
        $("div.form").hide();
        $("div.form-" + $("input:checked").val()).show();
    }
    selectForm();
    $("input.p-type").click(function() {
        selectForm()
    });
</script>