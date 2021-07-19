<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS files-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Basic Banking System</title>
    <style type="text/css">
      *{
          background-image: url('bank3.jpg');
          background-size: cover;
          background-attachment: fixed;
      }
    </style>
</head>

<body>
    <?php include 'navigation.php'; ?>
    <div class="container-fluid">
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
              <div class="heading text-center my-5">
                <marquee behavior="scroll" direction="right"><h1>Welcome to The Spark Foundation Bank</h1></marquee></br>
              </div>
              <div class="heading text-center my-5">
                  <a href="transfermoney.php"><img src="customers.png" width="150" height="100"></br><button>View Customers</button></a></br>
                </div>
                <div class="heading text-center my-5">
                  <a href="transfermoney.php"><img src="transfer.png" width="150" height="100"></br><button>Transfer money</button></a></br>
                </div>
                <div class="heading text-center my-5">
                  <a href="transactionhistory.php"><img src="history.jpg" width="150" height="100"></br><button>Transaction History</button></a>
              </div>
            </div>
         </div>
    </div>
    <footer class="text-center mt-5 py-2">
       <p>All rights reserved &copy 2021 | Developed by <b> Donadri Hema</b> <br>Web Developer Intern @ TSF </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>