<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login | Student Work Related Learning System</title>
    <!-- Favicon -->
    <link rel="icon" href="https://evaluation.msu.ac.zw/logo/logo1.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            max-width: 500px;
            width: 100%;
            padding: 15px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background-color: #4e73df;
            border-radius: 10px 10px 0 0 !important;
            padding: 1.25rem;
        }

        .btn-google {
            background-color: #ea4335;
            border-color: #ea4335;
            color: white;
            font-weight: 500;
            padding: 10px 16px;
        }

        .btn-google:hover {
            background-color: #d33426;
            border-color: #d33426;
            color: white;
        }

        .logo-container {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="login-container">

        @include('layouts.messages')
        <div class="card">

            <div class="card-body p-4">
                <div class="alert alert-danger">
                    Please login with your MSU staff account to access the admin area.
                </div>



                <div class="text-center mb-4 logo-container">
                    <img src="https://evaluation.msu.ac.zw/logo/logo1.png" alt="MSU Logo" style="max-height: 100px;">
                    <h5 class="mt-3">Midlands State University</h5>
                    <p class="text-muted">Travel & Subsistence</p>
                </div>

                <div class="d-grid gap-2">
                    <a href="{{ route('auth.google') }}" class="btn btn-google">
                        <i class="fab fa-google me-2"></i> Sign in with Google
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
