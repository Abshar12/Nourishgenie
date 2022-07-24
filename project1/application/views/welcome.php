<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="bg-dark text-white p-3">Please fill this form</h3>
                <div class="form group">
                    <label for=""><h5>Name</h5></label>
                    <input type="text" name="name" id="name" value="" class="form-control">

                </div>
                <div class="form group">
                    <label for=""><h5>Age</h5></label>
                    <input type="int" name="age" id="age" value="" class="form-control">

                </div>
                <div class="form group">
                    <label for=""><h5>Contact</h5></label>
                    <input type="int" name="contact" id="contact" value="" class="form-control">

                </div>
                <div class="form group">
                    <label for=""><h5>Country</h5></label>
                    <select name="country" id="country" class="form-control">
                        <option value="">Select your country</option>
                    </select>
                </div>
                <div class="form group">
                    <label for=""><h5>City</h5></label>
                    <select name="state" id="state" class="form-control">
                        <option value="">Select your state</option>
                    </select>

                </div>
                <div class="form group">
                    <label for=""><h5>City</h5></label>
                    <select name="city" id="city" class="form-control">
                        <option value="">Select your city</option>
                    </select>

                </div>
                <button class="btn btn-primary m-5" type="Submit">Signup</button>

            </div>

        </div>
    </div>
    
</body>
<script  src = "<?php echo base_url(uri:'assets/js/custom.js');?>"></Script>
</html>