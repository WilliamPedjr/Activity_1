<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
    <style>
        html {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: peachpuff;
        }
        form {
            display: flex;
            justify-content: center;
            justify-items: center;
            margin-top: 100px;
        }
        .form {
            width: 250px;
            text-align: center;
            background-color: gainsboro;
            padding: 20px;
            box-shadow:2px 2px 5px 0px rgba(0, 0, 0, .5);
            border-radius: 5px;
        }
        input {
            width: 100%;
        }
        #submit {
            width: 100%;
            margin-top: 10px;
            background-color: rgb(100, 100, 255);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold
        }
        #submit:hover {
            cursor: pointer;
            background-color: darkblue;
            transition: 0.5s;
        }
        #male, #female, #personal, #company {
            width: 5%;
        }
        .info {
            padding: 10px;
            border: none;
            border-radius: 0px 2px 2px 0px;
        }
        i {
            color: white;
            background-color: rgb(100, 100, 255);
            padding: 10px;
            width: 20px;
            border-radius: 2px 0px 0px 2px;
            
        }
        .input {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, .5);
            border-radius: 2px 2px 2px 2px;
        }
        p {
            font-size: 10px;
            color: blue;
            text-decoration: underline;
        }

        </style>
</head>

<body>
    <div class="cont">
        <form action="" method="post">
            <div class="form">
                <h1>Registration</h1><hr>
                <input type="radio" name="user" id="personal" value="personal" required>
                <label for="male">Personal</label>
                <input type="radio" name="user" id="company" value="company" required>
                <label for="female">Company</label><hr>
                <div class="input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" placeholder="Email" name="email" id="email" class="info" required><br>
                </div>
                <div class="input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Name" name="email" id="name" class="info"><br>
                </div>
                <div class="input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" placeholder="Password" id="pass" class="info" required><br>
                </div><hr>
                
                <input type="radio" name="sex" id="male" value="male" required>
                <label for="male">Male</label>
                <input type="radio" name="sex" id="female" value="female" required>
                <label for="female">Female</label><hr>

                <p>Privacy Protected</p>

                <input type="submit" name="action" value="Submit" id="submit">
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentL  oaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = {
                    firstname: document.getElementById('firstname').value,
                    lastname: document.getElementById('lastname').value,
                    email: document.getElementById('email').value,
                    sex: document.querySelector('input[name="sex"]:checked').value
                };
                localStorage.setItem('formData', JSON.stringify(formData));
                alert('Form data has been saved to local storage');
            });
        });
    </script>
</body>

</html>
