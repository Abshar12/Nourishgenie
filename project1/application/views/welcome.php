<?php
?>
<html>
  <head>
    <title>Welcome to Codeignitor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <div class = "container">
        <div class="row">
            <div class="col-md-6">
                <h1>Please fill the form</h1>
                
                <?php echo form_open(action:'home/newUser' , );?>
                
                
                <div class = "form-group">
                    <label>Enter your name</label>
                    <?php
                        $name = array('name'=>"name" , 'class'=>"form_control");
                        echo form_input($name);
                    ?>
                </div>
                <div class = "form-group">
                    <label>Enter your age</label>
                    <?php
                        $age = array('name'=>"age" , 'class'=>"form_control");
                        echo form_input($age);
                    ?>
                </div>
                <div class = "form-group">
                    <label>Enter your contact no</label>
                    <?php
                        $contact = array('name'=>"contact" , 'class'=>"form_control");
                        echo form_input($contact);
                    ?>
                </div>
                <div class = "form-group">
                    <label>Select your Country</label>
                    <?php
                        $country = array('name'=>"country" , 'class'=>"form_control");
                        echo form_input($country);
                    ?>
                </div>
                <div class = "form-group">
                    <label>Select your City</label>
                    <?php
                        $city = array('name'=>"city" , 'class'=>"form_control");
                        echo form_input($city);
                    ?>
                </div>
                <div class = "form-group">
                    <?php
                        echo form_submit(data:'Signup' , value:'Signup' , extra:'btn btn-primary');
                    ?>
                </div>
            
                <?php echo form_close();?>
            </div>
        </div>
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>