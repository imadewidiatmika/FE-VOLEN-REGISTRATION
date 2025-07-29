<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOLEN ARTSPACE Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 class="volen-artspace-title text-center mb-2">VOLEN <br>ARTSPACE</h1>
        <p class="registration-system-text text-center mb-5">REGISTRATION SYSTEM</p>

        <div class="container-custom"> {{-- Laravel form: method POST, action ke route 'registration.step2' --}}
            <form >
                @csrf {{-- CSRF token for Laravel security --}}

                <div class="mb-4">
                    <label for="activitySelect" class="form-label form-label-custom">Activities :</label>
                    <select class="form-select" id="activitySelect" name="activity" aria-label="Activities selection">
                        <option value="" selected disabled>Open Registration Activities</option>
                        <option value="clay_painting">Clay Painting</option>
                        <option value="pottery_class">Pottery Class</option>
                        <option value="sculpture_workshop">Sculpture Workshop</option>
                        <option value="drawing_session">Drawing Session</option>
                    </select>
                </div>

                <div id="dateInputWrapper" class="mb-4 hidden">
                    <label for="dateInput" class="form-label form-label-custom">Date :</label>
                    <input type="date" class="form-control" id="dateInput" name="date" data-placeholder="Available Dates">
                </div>

                <div id="step3Content" class="hidden">
                    <div class="mb-4">
                        <p class="location-text">Location : The Patra Ubud</p>
                    </div>

                    <button type="submit" class="btn btn-next">NEXT</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eP0WOxIK7R7JqmkzwP" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>