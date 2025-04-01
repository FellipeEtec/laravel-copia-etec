<header class="flex flex-col w-full h-[120px]">
    <div class="flex justify-between">
        <div><!-- Logo do Governo do Estado de São Paulo com link --></div>

        <div>
            <!-- Redes Sociais -->
            <div>

            </div>

            <!-- Acessibilidade -->
            <div>

            </div>
        </div>
    </div>

    <div class="flex justify-between">
        <!-- Imagens -->
        <div>
            <div><!-- Logo da ETEC com link --></div>
            <div><!-- Logo do CPS com link --></div>
        </div>

        <!-- Navegação -->
        <nav>
            <ul class="flex gap-4">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('courses') }}">Cursos</a></li>
                <li><a href="{{ route('departments') }}">Departamentos</a></li>
                <li><a href="{{ route('contact') }}">Contato</a></li>
            </ul>
        </nav>

        <!-- Pesquisa -->
        <form action="">
            <input type="search" name="" id="">
            <button type="submit"></button>
        </form>
    </div>
</header>