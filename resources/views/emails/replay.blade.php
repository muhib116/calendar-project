<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background: #f3f4f6;
                display: flex;
                justify-content: center;
                align-content: center;
                padding: 50px;
            }
            *, ::before, ::after {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .wrap {
                padding: 30px;
                box-shadow: 0 2px;
                width: 100%;
                filter: drop-shadow(0 20px 13px rgba(0, 0, 0, 0.03)) drop-shadow(0 8px 5px rgba(0, 0, 0, 0.08));
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            {{ @$replay }}
        </div>
    </body>
</html>
