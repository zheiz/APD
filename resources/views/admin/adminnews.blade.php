<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "apdicon.png">
    <link rel="stylesheet" href="admin/adminnews.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>APD Admin - News</title>
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
    

    <div class = "container">
        <form id = "article">
            <input class = "form-control" type = "text" id = "title" for = "title" placeholder = "Article Title">
            <input class = "form-control" type = "text" id = "content" for = "content" placeholder = "Article Content">
            <input class = "form-control" type = "text" id = "author" for = "author" placeholder = "Article Author">
            <input class = "form-control" type = "file" id = "images" for = "images">

            <button class="btn btn-warning" type = "submit" id = "post">Post Article</button>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            // Attach a click event handler to the "Save changes" button
            $("#post").click(function (e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = {
                        title: $("#title").val(),
                        content: $("#content").val(),
                        author: $("#author").val()
                };

                // Send an AJAX request to update the profile
                $.ajax({
                    type: "POST",
                    url: "/post",
                    data: formData,
                    success: function (response) {
                        if (response.success) {
                            // Display a success message or perform any desired actions
                            console.log("Article Posted Successfully");
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Article Posted',
                                showConfirmButton: true,
                                timer: 2500
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                            });
                        } else {
                            // Handle errors if necessary
                            console.error("Article Posting Failed");
                        }
                    },
                    error: function () {
                        // Handle errors if necessary
                        console.error("Article Posting Failed");
                    }
                });
            });
        });
    </script>
</body>
</html>