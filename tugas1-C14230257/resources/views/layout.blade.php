<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rumah Kita</title>
    @vite('resources/css/app.css')
    
    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Dots&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --cap-green6: #14240a;
            --cap-green5: #25483d;
            --cap-green4: #56843a;
            --cap-green3: #82b741;
            --cap-green2: #a8c747;
            --cap-green1: #e6e773;
            /*yellow*/
        }

        html {
            scroll-behavior: smooth;
        }

        .title {
            font-family: 'Zen Dots', sans-serif;
        }
        
        .text {
            font-family: 'Poppins', sans-serif;
        }
        
    </style>

    @yield('style')
    
</head>
<body class="overflow-x-hidden">
    @include('nav')

    @yield('content')
    
    
    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script> 
    @yield('script')
    
</body>
</html>