    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include '../../assets/boot.php' ?>
        <title> Add Record Form</title>

        <style>
            .form-design{
                height: 290px;
            }
        </style>


    </head>
    <body>

            <div class="container w-25 border shadow my-4">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <form action="../Controller/add-record.php"  method="POST" enctype="multipart/form-data">
                                <h2 class="my-3 text-center"> Add Student Form</h2>
                                <hr>
                                <label for="name"> Name</label>
                                <input type="text" name="name" placeholder="Enter your Name" class="form-control my-3">

                                <label for="name"> Father Name</label>
                                <input type="text" name="fname" placeholder="Enter your Father Name" class="form-control my-3">
                                
                                <label for="name"> Student Image</label>
                                <input type="file" class="form-control my-3" name="image">

                                <input type="submit" value="Add Record" class="btn btn-info w-75  d-flex align-items-center justify-content-center  m-auto my-4">

                            </form>
                        </div>
                    </div>            
            </div>
                    



    </body>
    </html>