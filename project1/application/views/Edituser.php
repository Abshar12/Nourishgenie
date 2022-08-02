<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Signup</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">

</script>
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

                    <input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $userrecord[0]['name'] ?>">

                </div>
                <div class="form group">
                <input type="number" name="age" class="form-control" placeholder="Enter your age" value="<?php echo $userrecord[0]['age'] ?>">

                </div>
                <div class="form group">
                <input type="number" name="contact" class="form-control" placeholder="Enter your contact" value="<?php echo $userrecord[0]['contact'] ?>">

                </div>
                <div class="form group">
                <input type="text" name="country" class="form-control" placeholder="Enter your country" value="<?php echo $userrecord[0]['country'] ?>">

                </div>
                <div class="form group">
                <input type="text" name="state" class="form-control" placeholder="Enter your state" value="<?php echo $userrecord[0]['state'] ?>">

                </div>
                <div class="form group">
                <input type="text" name="city" class="form-control" placeholder="Enter your city" value="<?php echo $userrecord[0]['city'] ?>">
                </div>
                
                <input type="hidden" value="<?php echo $userrecord[0]['id']?>" name="uid">
                <div class="form-group">
                <button class="btn btn-primary m-5" type="Submit">Update</button>
                </div>
                
                    </div>
                        </div>

                    </div>

                </div>

                        </div>
                    </div>


                    
</body>

</html>



