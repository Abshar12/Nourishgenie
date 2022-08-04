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
        <?php echo form_open(action: 'home/newUser', attributes: ''); ?>
        <div class="row">
            <div class="col-md-12">
                <h3 class="bg-dark text-white p-3">Please fill this form</h3>
                <?php if ($this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                }
                ?>
                <div class="form group">
                    <label for="">
                        <h5>Name</h5>
                    </label>
                    <input type="text" name="name" id="name" value="" class="form-control">
                </div>
                <div class="form group">
                    <label for="">
                        <h5>Age</h5>
                    </label>
                    <input type="number" name="age" id="age" value="" class="form-control">
                </div>
                <div class="form group">
                    <label for="">
                        <h5>Contact</h5>
                    </label>
                    <input type="number" name="contact" id="contact" value="" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 m-2">
                <select class="form-select" id="country" name="country">
                    <option value="">country</option>

                </select>
            </div>
            <div class="col-md-12 m-2">
                <select class="form-select" id="state" name="state">

                    <option value="">state</option>
                </select>
            </div>
            <div class="col-md-12 m-2">
                <select class="form-select" id="city" name="city">

                    <option value="" selected>city</option>
                </select>
            </div>
            <button class="btn btn-primary m-5" type="Submit">Signup </button>
        </div>
        <?php echo form_close(); ?>
    </div>

    <script src="<?= base_url();?>/public/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="custom.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">