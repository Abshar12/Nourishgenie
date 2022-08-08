<!DOCTYPE html>
<html lang="en">

<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    <title>AllRecords</title>
    



</head>


<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-black p-3 m-5">All Records</h3>
                <?php if ($this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                }
                ?>
                <?php if ($allRecords->num_rows() > 0) : ?>
                    <table id="mytable" class="table table-bordered m-5">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Contact</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <?php foreach ($allRecords->result() as $rows) : ?>
                            <tr>
                                <td>
                                    <?php echo $rows->id ?>
                                </td>
                                <td>
                                    <?php echo $rows->name ?>
                                </td>
                                <td>
                                    <?php echo $rows->age ?>
                                </td>
                                <td>
                                    <?php echo $rows->contact ?>
                                </td>
                                <td>
                                    <?php echo $rows->country ?>
                                </td>
                                <td>
                                    <?php echo $rows->state ?>
                                </td>
                                <td>
                                    <?php echo $rows->city ?>
                                </td>
                                <td>
                                    <a href="<?php echo site_url(uri: 'home/update/' . $rows->id) ?>" class="btn btn-primary">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo site_url(uri: 'home/delete/' . $rows->id) ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </table>
                <?php else : ?>
                    <h1>Not working </h1>
                <?php endif; ?>
                <a href="<?php echo site_url(uri: '') ?>">
                    Insert a new record
                </a>

            </div>

        </div>
            <?php echo $this->pagination->create_links();?>
    </div>


</body>

</html>