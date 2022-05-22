<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Sistem Pembelajaran Online Terpadu</title>
    
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body class="body">
        <div class="container center bg-light col-lg-6 shadow">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md mx-5">
                    <h1><span class="text-warning">SPOT</span> <br>
                    Sistem Pembelajaran Online Terpadu</h1>
                </div>
                <div class="col-lg-5 col-md p-5">
                    <form action="/loginAction" method="POST">
                        <div class="mb-3">
                            <label for="username" class="col-form-label">NIM:</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                            <div id="passwordHelpBlock" class="form-text">
                              Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg mt-3" value="Login">
                    </form>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
</body>
</html>