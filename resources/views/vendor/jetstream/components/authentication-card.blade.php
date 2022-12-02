<style>
    .bg-bege {
        background-color: #F2E3D5;
    }

    .bg-degrade {
        background-image: linear-gradient(#3CA6A6, #026773);
    }
</style>

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-bege">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg bg-degrade">
        {{ $slot }}
    </div>
</div>
