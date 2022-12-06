<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    .bg-bege {
        background-color: #F2E3D5;
    }

    .bg-degrade {
        background-image: linear-gradient(#3CA6A6, #026773);
    }

    .seta-container {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 20px;
        left: 2vw;
        height: 60px;
        width: 60px;
        border-radius: 50%;
        background-color: #026773;
        text-decoration: none;
    }
</style>

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-bege">
    <a href="{{ route('/') }}" class="text-white seta-container">
        <i class="fa-solid fa-arrow-left-long fa-2xl"></i>
    </a>

    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg bg-degrade">
        {{ $slot }}
    </div>
</div>
