<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

        <title>Counter</title>
    </head>
    <body>
        <div id="app" class="example" style="padding-top: 2000px;">
            <div class="flex justify-center">
                <div class="bg-grey rounded-lg p-4 mx-4">
                    <count :to="11"></count>
                </div>

                <div class="bg-grey rounded-lg p-4 mx-4">
                    <count :to="5"></count>
                </div>

                <div class="bg-grey rounded-lg p-4 mx-4">
                    <count :to="1995"></count>
                </div>
            </div>
        </div>

         <script src="/js/app.js"></script>
     </body> 
</html>