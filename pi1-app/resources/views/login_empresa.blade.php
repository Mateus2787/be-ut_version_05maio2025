<div>

    <html lang="pt-BR">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Be-UT | Login Empresa</title>
        <link rel="icon" href="assets/favicon.png" type="image/png">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
        <body class="min-h-screen flex items-center justify-center" style="background-color: #6A3D8A;">
            <div class="w-full max-w-md p-6 rounded-2xl shadow-lg" style="background-color: #B4A7D6;">
                <h2 class="text-2xl font-bold text-center mb-6">Entrar como Empresa</h2>
                <form class="space-y-4">
                <div>
                    <label class="block mb-1 text-sm font-medium">CNPJ</label>
                    <input type="text" required class="w-full px-4 py-2 border rounded-xl" placeholder="00.000.000/0001-00">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Senha</label>
                    <input type="password" required class="w-full px-4 py-2 border rounded-xl" placeholder="********">
                </div>
                <button type="submit" class="w-full text-white py-2 rounded-xl hover:shadow-lg" style="background-color:  #5A5A5A;">Entrar</button>
                </form>
                <div class="text-sm text-center mt-4">
                <a href="login.blade.php" style="color: #800080;" class="hover:underline">Sou um cliente</a><br>
                <a href="cadastro.blade.php" style="color: #800080;" class="hover:underline">Não tem conta? Cadastre-se</a>
                </div>
            </div>
        </body>
    </html>
</div>
