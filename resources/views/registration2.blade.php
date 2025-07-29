<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOLEN ARTSPACE Registration - Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 class="volen-artspace-title text-center mb-2">VOLEN <br>ARTSPACE</h1>
        <p class="registration-system-text text-center mb-5">REGISTRATION SYSTEM</p>

        <div class="container-custom"> <form>
                <div class="mb-4 text-start">
                    <label for="nameInput" class="form-label form-label-custom">Name :</label>
                    <input type="text" class="form-control" id="nameInput" placeholder="Enter Your Name">
                </div>

                <div class="mb-4 text-start">
                    <label for="emailInput" class="form-label form-label-custom">Email Address :</label>
                    <input type="email" class="form-control" id="emailInput" placeholder="Enter Email Address">
                </div>

                <div class="mb-4 text-start">
                    <label for="whatsappInput" class="form-label form-label-custom">Whatsapp :</label>
                    <input type="tel" class="form-control" id="whatsappInput" placeholder="Enter Whatsapp Number">
                </div>

                <div class="btn-container">
                    <button type="button" class="btn btn-back">BACK</button>
                    <button type="submit" class="btn btn-next">NEXT</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eP0WOxIK7R7JqmkzwP" crossorigin="anonymous"></script>
</body>
</html>