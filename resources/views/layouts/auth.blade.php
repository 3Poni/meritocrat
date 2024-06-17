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
            padding: 10px;
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
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
    </style>
</head>
<body>
<main>
@yield('content')
</main>
</body>
</html>
