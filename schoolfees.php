<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>School fees payment</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

form{ width: 50%; padding: 20px;align:center; }
.bs-example{
        margin: 20px;
    }
</style>
</head>
<body>

<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">
            <img src="logo.png" height="28" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Pay and Transfer</a>
                <a href="#" class="nav-item nav-link">Postpaid</a>
                <a href="#" class="nav-item nav-link disabled" tabindex="-1">School fees</a>
            </div>

        </div>
    </nav>
    
<form>
  <div class="form-group" >
                        <label>School Code</label>
                        <input type="text" class="form-control" required="required">
                    </div>

    <div class="form-group">
                        <label>Student Number</label>
                        <input type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" required="required">
                    </div>
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="trigger-btn" data-toggle="modal">Pay</a>  
</form>

    


</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <form action="transaction_successful.php" method="post">
                <div class="modal-header">              
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <div class="clearfix">
                            <label>Password</label>
                            <a href="#" class="float-right text-muted"><small>Forgot?</small></a>
                        </div>
                        
                        <input type="password" class="form-control" required="required">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <label class="form-check-label"><input type="checkbox"> Remember me</label>
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>     
</body>
</html>