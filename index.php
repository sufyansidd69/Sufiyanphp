<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!--ADD RECORD-->
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <form id="" name="" method="post" action="addrecord.php">
                <h3>ADD RECORD</h3>
                <div class="col-md-6 mb-3">
                    <label for="fName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fName" name="fName">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="CS" class="form-label">Cyber Security</label>
                    <input type="text" class="form-control" id="CS" name="CS">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="OOP" class="form-label">Object-Oriented Programming</label>
                    <input type="text" class="form-control" id="OOP" name="OOP">
                </div> 
                <div class="col-md-6 mb-3">
                    <label for="DSA" class="form-label">Data Structures and Algorithm</label>
                    <input type="text" class="form-control" id="DSA" name="DSA">
                </div> 
                <div class="col-md-6 mb-3">
                    <label for="CP" class="form-label">Computer Programming</label>
                    <input type="text" class="form-control" id="CP" name="CP">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
            <!--DISPLAY RECORD-->
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3> DISPLAY RECORD</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col-md-6">S.NO</th>
                                    <th scope="col-md-6">NAME</th>
                                    <th scope="col-md-6">Email</th>
                                    <th scope="col-md-6 mb-3">CS</th>
                                    <th scope="col-md-6 mb-3">OOP</th>
                                    <th scope="col-md-6 mb-3">DSA</th>
                                    <th scope="col-md-6 mb-3">CP</th>
                                    <th scope="col-md-6 mb-3">Total</th>
                                    <th scope="col-md-6 mb-3">Persentage</th>
                                    <th scope="col-md-6 mb-3">Grade</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                require "./assets/config/dbc.php"; 
                                $sql="SELECT * From Account order by id desc";
            $result=mysqli_query($conn,$sql);
            $a=1;

            while($row= mysqli_fetch_assoc($result)){?>
                <tr>
                <th scope="row"><?php echo $a++;?></th>
                <td><?php echo $row['fName'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['CS'];?></td>
                <td><?php echo $row['OOP'];?></td>
                <td><?php echo $row['DSA'];?></td>
                <td><?php echo $row['CP'];?></td>
                <td><?php echo $row['Total']; ?></td>
                <td><?php echo $row['per']; ?></td>
                <td><?php echo $row['Grade']; ?></td>
            </tr>

            <?php 
            }
             ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>