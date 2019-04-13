<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spam Avengers</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="contener-fluid">
        <!-- Start content fluid -->
        <h1 class="text-center">Spam Avengers</h1>
        <div class="row">
            <!-- Start form -->
            <form class="col-lg-6 col-lg-offset-3" action="index.php" method="POST" role="form">
                <legend>My form</legend>
                <div class="form-group">
                    <p class="col-lg-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="your name here">
                    </p>
                    <p class="col-lg-6">
                        <label for="surname">surname</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="your surname here">
                    </p>
                    <p class="col-lg-6">
                        <label for="phone">phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="your phone number">
                    </p>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form><!-- end form -->
        </div>
    </div><!-- end content fluid -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>