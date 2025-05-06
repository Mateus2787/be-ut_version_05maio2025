<div>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Be-UT | Cadastro</title>
        <link rel="icon" href="assets/favicon.png" type="image/png">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="min-h-screen flex items-center justify-center" style="background-color: #6A3D8A;">
        <div class="w-full max-w-lg p-6 rounded-2xl shadow-lg" style="background-color: #B4A7D6;">
            <h2 class="text-2xl font-bold text-center mb-6">Criar Conta no Be-UT</h2>
            <form id="cadastro-form" class="space-y-4">
                <div>
                    <label class="block mb-1 text-sm font-medium">Tipo de Usuário</label>
                    <select id="tipoUsuario" class="w-full px-4 py-2 border rounded-xl">
                    <option value="cliente">Cliente</option>
                    <option value="empresa">Empresa</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Nome</label>
                    <input type="text" required class="w-full px-4 py-2 border rounded-xl" placeholder="Seu nome">
                </div>
                <div id="empresaExtra" class="hidden">
                    <div class="mt-2">
                    <label class="block mb-1 text-sm font-medium">Nome da Empresa</label>
                    <input type="text" class="w-full px-4 py-2 border rounded-xl" placeholder="Nome fantasia">
                    </div>
                    <div class="mt-2">
                    <label class="block mb-1 text-sm font-medium">CNPJ</label>
                    <input type="text" class="w-full px-4 py-2 border rounded-xl" placeholder="00.000.000/0001-00">
                    </div>
                    <div class="mt-2">
                    <label class="block mb-1 text-sm font-medium">Website / Instagram</label>
                    <input type="url" class="w-full px-4 py-2 border rounded-xl" placeholder="https://">
                    </div>
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Email</label>
                    <input type="email" required class="w-full px-4 py-2 border rounded-xl" placeholder="seu@email.com">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Senha</label>
                    <input type="password" required class="w-full px-4 py-2 border rounded-xl" placeholder="********">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Confirmar Senha</label>
                    <input type="password" required class="w-full px-4 py-2 border rounded-xl" placeholder="********">
                </div>
                <button type="submit" class="w-full text-white py-2 rounded-xl hover:shadow-lg" style="background-color:  #5A5A5A;">Cadastrar</button>
            </form>
            <p class="text-sm text-center mt-4">Já tem conta? <a href="login.blade.php" style="color: #800080;" class="hover:underline">Faça login</a></p>
        </div>

        <script>
            const tipoUsuario = document.getElementById('tipoUsuario');
            const empresaExtra = document.getElementById('empresaExtra');
            tipoUsuario.addEventListener('change', () => {
            empresaExtra.classList.toggle('hidden', tipoUsuario.value !== 'empresa');
            });
        </script>
        </body>
    </html>
</div>
