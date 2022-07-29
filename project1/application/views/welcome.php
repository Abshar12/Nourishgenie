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
                    ?>
                <?php echo form_open(action:'home/newUser' , attributes:'');?>

                <div class="form group">
<<<<<<< HEAD
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">

                </div>
                <div class="form group">
                <input type="int" name="age" class="form-control" placeholder="Enter your age">

                </div>
                <div class="form group">
                <input type="int" name="contact" class="form-control" placeholder="Enter your contact">

                </div>
                <div class="form group">
                <input type="text" name="country" class="form-control" placeholder="Enter your country">

                </div>
                <div class="form group">
                <input type="text" name="state" class="form-control" placeholder="Enter your state">

                </div>
                <div class="form group">
                <input type="text" name="city" class="form-control" placeholder="Enter your city">
                </div>
                
                
                
                <button class="btn btn-primary m-5" type="Submit">Signup</button>

                    </div>
                        </div>

                    </div>

                </div>

                        </div>
                    </div>

=======
                    <label for=""><h5>Name</h5></label>
                    <?php
                    $name = array('name'=>"name" , 'id'=>"name" ,'value'=>"" , 'class'=>"form-control");
                    echo form_input($name);
                    ?>

                </div>
                <div class="form group">
                    <label for=""><h5>Age</h5></label>
                    <?php
                    $age = array('input type'=>"int" , 'name'=>"age" , 'id'=>"age" , 'value'=>"" , 'class'=>"form-control");
                    echo form_input($age);
                    ?>

                </div>
                <div class="form group">
                    <label for=""><h5>Contact</h5></label>
                    <?php
                    $contact = array('input type'=>"int" , 'name'=>"contact" , 'id'=>"contact" , 'value'=>"" , 'class'=>"form-control");
                    echo form_input($contact)
                    ?>

                </div>
                <div class="form group">
                    <label for=""><h5>country</h5></label>
                    <?php
                    $country = array('input type'=>"text" , 'name'=>"country" , 'id'=>"country" , 'value'=>"" , 'class'=>"form-control");
                    echo form_input($country)
                    ?>

                </div>
                <div class="form group">
                    <label for=""><h5>state</h5></label>
                    <?php
                    $state = array('input type'=>"int" , 'name'=>"state" , 'id'=>"state" , 'value'=>"" , 'class'=>"form-control");
                    echo form_input($state)
                    ?>

                </div>
                <div class="form group">
                    <label for=""><h5>city</h5></label>
                    <?php
                    $city = array('input type'=>"int" , 'name'=>"city" , 'id'=>"city" , 'value'=>"" , 'class'=>"form-control");
                    echo form_input($city)
                    ?>

                </div>
                
                
                
                <button class="btn btn-primary m-5" type="Submit">Signup</button>

                    </div>
                        </div>

                    </div>

                </div>

                        </div>
                    </div>

>>>>>>> 724fc32a714d9bdd819786e10bdca0db2f950c5e
</body>

</html>