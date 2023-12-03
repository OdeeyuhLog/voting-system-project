<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="e-ballotnew.css">
    <title>Voting System</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Voting System</div>
            <div class="profile-section">
                <div class="welcome-text">Welcome, User!</div>
                <div class="profile-picture" id="uploadedImage"></div>
                <a href="firtpage.php" class="sign-out-btn">SIGN OUT</a>
            </div>
        </div>

        <div class="e-ballot">
            <h1>E-BALLOT</h1>
        </div>

        <div class="squares-container">
            <div class="square">
                <div class="circle"></div>
                <div class="candidate-info">
                    <p>Candidate Name</p>
                    <div class="image-box"></div>
                </div>
            </div>

            <div class="squaretwo">
                <div class="circletwo"></div>
                <div class="candidatetwo">
                    <p>Candidate Name</p>
                    <div class="image-box"></div>
                </div>
            </div>

            <div class="squarethree">
                <div class="circlethree"></div>
                <div class="candidatethree">
                    <p>Candidate Name</p>
                    <div class="image-box"></div>
                </div>
            </div>

        </div>
        

    </div>






  <!--  <div class="imageboxOne">
    <img src="wallpaper.jpg" alt="Image" class="resized-image">
    </div>
        

        <div class="upload-box">
            <input type="file" id="fileInput" accept="image/*" onchange="displayImage()">
            <label for="fileInput" class="upload-label">Upload Photo</label>
            <div class="uploaded-image" id="imageBox"></div>
        </div>
    </div>

    <script>
        function displayImage() {
            var input = document.getElementById('fileInput');
            var imageBox = document.getElementById('imageBox');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    imageBox.style.backgroundImage = "url('" + e.target.result + "')";
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    a-->
</body>
</html>
