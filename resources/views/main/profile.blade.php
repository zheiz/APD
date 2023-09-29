<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "apdicon.png">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>APD - Home</title>
</head>
<body>

    <header>
        <nav>
            <img src = "apdicon.png" alt = "APD Logo" class = "logo">
            <ul>
                <li class = "home">
                    <a href = "/home">Home</a>
                </li>
                <li class = "cq">
                    <a href = "/codequest">Code Quest</a>
                </li>
                <li class = "news">
                    <a href = "/news">News</a>
                </li>
                <li class = "about">
                    <a href = "/about">About</a>
                </li>
                <li class = "profile">
                    <a href = "/profile"><i class="fa-solid fa-address-card"></i></a>
                </li>
                <li class = "hamburger">
                    <a href = "#">
                        <div class = "bar"></div>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    
    <div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <button class="btn btn-warning" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="studentid">Student Number</label>
                                <input class="form-control" id="studentid" type="text" placeholder="Enter your Student Number" value="202310642">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="email">Email</label>
                                <input class="form-control" id="email" type="text" placeholder="Enter your Email" value="202310642@feudiliman.edu.ph">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">                
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputFirstName">First Name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your First Name" value="Ben">
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="middlename">Middle Name</label>
                                <input class="form-control" id="middlename" type="text" placeholder="Enter your Middle Name" value="De">
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="lastname">Last Name</label>
                                <input class="form-control" id="lastname" type="text" placeholder="Enter your Last Name" value="Ober">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="yearlevel">Year Level</label>
                                <input class="form-control" id="yearlevel" type="text" placeholder="Enter your Year Level" value="2">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="program">Program</label>
                                <input class="form-control" id="program" type="text" placeholder="Enter your Program" value="BSITWMA">
                            </div>
                        </div>
                        <button class="btn btn-warning" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>