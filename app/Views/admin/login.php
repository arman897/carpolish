<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glassmorphism Login</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 5.15.3 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <style>
        body {
            margin: 0;
            height: 100vh;
            background: url('https://img.freepik.com/premium-vector/professional-carwash-driver-covers-auto-with-soap-foam-cleans_1138841-50854.jpg?w=740') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        /* Glass Card */
        .glass-card {
            width: 390px;
            padding: 35px;
            border-radius: 20px;
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(12px);
            border: 2px solid rgba(0, 195, 255, 0.4);
            box-shadow: 0 0 25px rgba(0, 195, 255, 0.5), 0 0 60px rgba(0, 195, 255, 0.2) inset;
            color: #fff;
            animation: fadeIn 0.9s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-area img {
            width: 120px;
            margin-bottom: 12px;
            filter: drop-shadow(0 0 6px #00c6ff);
        }

        /* Floating Fields */
        .floating {
            position: relative;
            margin-bottom: 30px;
        }

        .floating input {
            width: 100%;
            height: 52px;
            padding: 12px 45px 12px 45px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(0, 195, 255, 0.4);
            color: #fff;
            font-size: 15px;
            box-shadow: inset 0 0 12px rgba(0, 195, 255, 0.3);
        }

        .floating label {
            position: absolute;
            top: 13px;
            left: 45px;
            font-size: 15px;
            color: #cfe8ff;
            transition: 0.2s ease;
            opacity: 0.8;
            pointer-events: none;
        }

        .floating input:focus+label,
        .floating input:not(:placeholder-shown)+label {
            top: -8px;
            font-size: 13px;
            background: rgba(0, 0, 0, 0.7);
            padding: 0 6px;
            border-radius: 6px;
            color: #00c6ff;
        }

        /* Field Icons */
        .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            font-size: 19px;
            opacity: 1;
        }

        /* Password Eye */
        .eye-btn {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #00c6ff;
        }

        /* Button */
        .btn-login {
            height: 48px;
            border-radius: 12px;
            margin-top: 10px;
            background: linear-gradient(90deg, #0072ff, #00c6ff);
            border: none;
            color: white;
            font-size: 16px;
            letter-spacing: 0.5px;
            box-shadow: 0 0 14px rgba(0, 195, 255, 0.7);
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(0, 195, 255, 1);
        }

        /* Errors */
        .input-error {
            font-size: 13px;
            color: #ff7d7d;
            margin-top: 3px;
            text-align: left;
            padding-left: 5px;
            display: none;
        }

        /* Car Animation */
        .car-drive-icon {
            position: absolute;
            left: -40px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 22px;
            opacity: 0;
        }

        .car-drive-icon.run {
            opacity: 1;
            animation: driveCar 1.4s ease forwards;
        }

        @keyframes driveCar {
            0% {
                transform: translate(-40px, -50%);
            }

            40% {
                transform: translate(80px, -50%) rotate(-1deg);
            }

            100% {
                transform: translate(330px, -50%) rotate(2deg);
            }
        }

        /* Fade Login Text */
        .fade-out {
            opacity: 0;
            transition: 0.3s ease;
        }





        /* Smoke Effect Only */
        .smoke {
            position: absolute;
            background: rgba(255, 255, 255, 1);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            bottom: 3px;
            left: -15px;
            opacity: 0;
            filter: blur(3px);
        }

        .smoke1 {
            animation: smokePuff 0.9s ease-out infinite;
        }

        .smoke2 {
            animation: smokePuff 1.2s ease-out infinite;
        }

        @keyframes smokePuff {
            0% {
                opacity: 0;
                transform: translate(0, 0) scale(1);
            }

            40% {
                opacity: 0.6;
                transform: translate(-6px, -8px) scale(1.5);
            }

            100% {
                opacity: 0;
                transform: translate(-12px, -18px) scale(2);
            }
        }
    </style>
</head>

<body>

    <div class="glass-card text-center">

        <!-- Logo -->
        <div class="logo-area">
            <img src="<?= base_url('public/assets/web/img/logo.png') ?>" alt="Logo">
        </div>

        <h4 class="mb-2">Welcome Back</h4>
        <p class="text-light">Login to continue</p>



        <form id="loginForm" autocomplete="off">
            <!-- Login Input (Email / Username / Phone) -->
            <div class="floating mb-1">
                <i class="fas fa-user input-icon"></i>
                <input type="text" id="email" placeholder=" "
                    autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
                <label for="email">Email / Username / Phone</label>
            </div>
            <div id="emailError" class="input-error"></div>


            <!-- Password -->
            <div class="floating mb-1">
                <i class="fas fa-lock input-icon"></i>
                <input type="password" id="password" placeholder=" "
                    autocomplete="new-password" autocorrect="off" autocapitalize="off" spellcheck="false">
                <label for="password">Password</label>

                <button type="button" class="eye-btn" onclick="togglePassword()">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <div id="passwordError" class="input-error"></div>



            <div class="btn-wrapper" style="position: relative;">
                <button type="submit" class="btn btn-login w-100" id="loginBtn">
                    <span id="loginText">Login</span>
                    <div class="car-drive-icon" id="carIcon">
                        <i class="fas fa-car-side main-car"></i>

                        <!-- Exhaust smoke -->
                        <span class="smoke smoke1"></span>
                        <span class="smoke smoke2"></span>
                    </div>


                </button>
            </div>




            <div class="mt-3">
                <a href="#">Forgot Password?</a>
            </div>

        </form>
    </div>

    <script>
        const BASE_URL = "<?= base_url() ?>";
    </script>




    <script>
        function togglePassword() {
            var input = document.getElementById("password");
            input.type = input.type === "password" ? "text" : "password";
        }

        $("#loginForm").on("submit", function(e) {
            e.preventDefault();

            let email = $("#email").val().trim();
            let password = $("#password").val().trim();

            let emailError = $("#emailError");
            let passwordError = $("#passwordError");
            let btn = $(".btn-login");

            // Reset errors
            emailError.hide().html("");
            passwordError.hide().html("");

            // Validation
            if (email === "") {
                emailError.html("Please enter Email / Username / Phone").show();
                return;
            }
            if (password === "") {
                passwordError.html("Please enter your password").show();
                return;
            }

            // Disable button
            btn.prop("disabled", true);


            $.ajax({
                url: BASE_URL + "api/login",
                type: "POST",
                data: {
                    email: email,
                    password: password
                },
                success: function(response) {
                    console.log("API Response:", response);

                    if (response.status === false) {
                        passwordError.html(response.message).show();
                        btn.prop("disabled", false).html("Login");
                        return;
                    }

                    // Start success animation
                    $("#loginText").addClass("fade-out");

                    // Start car animation
                    setTimeout(() => {
                        $("#carIcon").addClass("run");
                    }, 300);

                    // Redirect after animation
                    setTimeout(() => {
                        window.location.href = BASE_URL + "admin/dashboard";
                    }, 1800)
                },

                error: function() {
                    passwordError.html("Network error. Try again.").show();
                },

                complete: function() {
                    btn.prop("disabled", false);
                }
            });
        });
    </script>













    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>





</body>

</html>