<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authorization</title>
    <!-- Styles -->
    <style>
        main {
            font-family: Arial, sans-serif;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .auth-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .auth-header {
            /* Create the gradient. */
            background-image: linear-gradient(45deg, #b4b4b4, #6f5af5);
            font-weight: 900;
            font-size: 32px;
            /* Set the background size and repeat properties. */
            background-size: 100%;
            background-repeat: repeat;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .auth-form {
            display: flex;
            gap: 15px;
            flex-direction: column;
        }
        .auth-field {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .auth-field input {
            background: transparent;
            padding: 15px;
            border: 1px solid gray;
            border-radius: 12px;
        }
        .auth-action {
            gap: 10px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        .auth-action button {
            padding: 10px;
            border-radius: 12px;
            background: white;
        }
        .auth-input {
            box-shadow: #00000026 0 6px 20px;
            min-width: 270px;
            display: flex;
            flex-direction: column;
            gap: 5px;
            border-radius: 12px;
        }
        .auth-error {
            display: flex;
            justify-content: center;
            font-size: 12px;
            color: #ff3d3d;
        }
        .auth-action button {
            transition: linear 0.4s;
            min-width: 170px;
            padding: 15px;
            font-weight: 700;
            color: #3c3c3cde;
            letter-spacing: 4px;
            text-shadow: 0 1px 20px #2300ffbf;
            box-shadow: #2000fa69 0 5px 63px;
            border: none;
            font-family: Arial, sans-serif;
            font-size: 14px;
            border-radius: 12px;
            background: #783dff30;
        }
        .auth-action button:hover {
            cursor: pointer;
            color: white;
            transition: linear 0.3s;
            background: gainsboro;
        }
    </style>
</head>
<body>
<main>
@yield('content')
</main>
</body>
</html>
