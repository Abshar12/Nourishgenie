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
                <?php if ($this->session->flashdata('message')){
                    echo $this->session->flashdata('message');
                    }
                    $userrecord = $records->result_array()
                    ?>
                <?php echo form_open(action:'home/updateUser' , attributes:'');?>
                <div class="form group">
                    <label for=""><h5>Name</h5></label>
                    <input type="text" name="name" id="name" value="" class="form-control" value="<?php echo $userrecord[0]['name'] ?>">

                </div>
                <div class="form group">
                    <label for=""><h5>Age</h5></label>
                    <input type="int" name="age" id="age" value="" class="form-control" value="<?php echo $userrecord[0]['age'] ?>">

                </div>
                <div class="form group">
                    <label for=""><h5>Contact</h5></label>
                    <input type="int" name="contact" id="contact" value="" class="form-control" value="<?php echo $userrecord[0]['contact'] ?>">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">

</script>
<script src="custom.js">

</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div class="container">
    <div class="row" >
        <div class="col-md-12 m-2" >
            <select class="form-select" id="country" name="country" value="<?php echo $userrecord[0]['country'] ?>">
                <option value="">country</option>
            </select>
        </div>
        <div class="col-md-12 m-2">
            <select class="form-select" id="state" name="state" value="<?php echo $userrecord[0]['state'] ?>">
                <option value="">state</option>
            </select>
        </div>
        <div class="col-md-12 m-2">
            <select class="form-select" id="city" name="city" value="<?php echo $userrecord[0]['city'] ?>">
                <option value="">city</option>
            </select>
        </div>
        <input type="hidden" value="<?php echo $userrecord[0]['id']?>" name="uid">
        <button class="btn btn-primary m-5" type="Submit">Update</button>

    </div>
        </div>

    </div>

</div>