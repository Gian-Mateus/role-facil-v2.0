<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Rolê Fácil</title>
</head>
<body>
    <main>
        <div class="variantsprimary">
            <x-ui.button variant="primary" size="sm">Texto</x-ui.button>
            <x-ui.button variant="primary" size="md">Texto</x-ui.button>
            <x-ui.button variant="primary" size="lg">Texto</x-ui.button>
            <x-ui.button variant="primary" size="xl">Texto</x-ui.button>
            <x-ui.button variant="primary" size="xxl">Texto</x-ui.button>
        </div>
        <div class="variantssecondary">
            <x-ui.button variant="secondary" size="sm">Texto</x-ui.button>
            <x-ui.button variant="secondary" size="md">Texto</x-ui.button>
            <x-ui.button variant="secondary" size="lg">Texto</x-ui.button>
            <x-ui.button variant="secondary" size="xl">Texto</x-ui.button>
            <x-ui.button variant="secondary" size="xxl">Texto</x-ui.button>
        </div>
        <div class="variantssuccess">
            <x-ui.button variant="success" size="sm">Texto</x-ui.button>
            <x-ui.button variant="success" size="md">Texto</x-ui.button>
            <x-ui.button variant="success" size="lg">Texto</x-ui.button>
            <x-ui.button variant="success" size="xl">Texto</x-ui.button>
            <x-ui.button variant="success" size="xxl">Texto</x-ui.button>
        </div>
        <div class="variantsinfo">
            <x-ui.button variant="info" size="sm">Texto</x-ui.button>
            <x-ui.button variant="info" size="md">Texto</x-ui.button>
            <x-ui.button variant="info" size="lg">Texto</x-ui.button>
            <x-ui.button variant="info" size="xl">Texto</x-ui.button>
            <x-ui.button variant="info" size="xxl">Texto</x-ui.button>
        </div>
        <div class="variantswarning">
            <x-ui.button variant="warning" size="sm">Texto</x-ui.button>
            <x-ui.button variant="warning" size="md">Texto</x-ui.button>
            <x-ui.button variant="warning" size="lg">Texto</x-ui.button>
            <x-ui.button variant="warning" size="xl">Texto</x-ui.button>
            <x-ui.button variant="warning" size="xxl">Texto</x-ui.button>
        </div>
        <div class="variantsdanger">
            <x-ui.button variant="danger" size="sm">Texto</x-ui.button>
            <x-ui.button variant="danger" size="md">Texto</x-ui.button>
            <x-ui.button variant="danger" size="lg">Texto</x-ui.button>
            <x-ui.button variant="danger" size="xl">Texto</x-ui.button>
            <x-ui.button variant="danger" size="xxl">Texto</x-ui.button>
        </div>
        <div class="variantsoutline">
            <x-ui.button variant="outline" size="sm">Texto</x-ui.button>
            <x-ui.button variant="outline" size="md">Texto</x-ui.button>
            <x-ui.button variant="outline" size="lg">Texto</x-ui.button>
            <x-ui.button variant="outline" size="xl">Texto</x-ui.button>
            <x-ui.button variant="outline" size="xxl">Texto</x-ui.button>
        </div>
    </main>
</body>
</html>