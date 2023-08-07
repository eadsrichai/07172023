<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<form action="chklogin.php" method="GET">
        <div class="row   mt-3 g-2 justify-content-center ">
            <div class="col-1 align-content-end ">
                <label for="username" class="label-control  ">Username</label>
            </div>

            <div class="col-4">
                <input type="text"  class="form-control" value="" id="username"  name="username" />
            </div>
        </div>
        <div class="row   mt-3 g-2 justify-content-center ">
                <div class="col-1">
                    <label for="password">Password</label>
                </div>

                <div class="col-4">
                    <input type="text"  class="form-control" value=""  id="password" name="password" />
                </div>
        </div>
        <div class="row   mt-3 g-2 justify-content-center  ">
                <div class="col-6">
                   
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-primary" value="Login" name="Login" />
                </div>
        </div>
    <div>
    </form>
</div>

</body>
</html>