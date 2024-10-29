<section class="card">

    <div class="cards">

        <!-- Começar o foreach deste ponto -->
        @foreach($produtos as $produto)
        <div class="cards-body">
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                <div class="card-img">
                    <a href="#">
                        <img src="img\banner\bn1.avif" alt="produto-nome">
                    </a>
                </div>
                <div class="card-title">
                    <div class="badge">
                        <span class="badge-span"> DESCONTO (CALCULO) </span>
                    </div>

                    <a href="#"> {{ $produto->PRODUTO_NOME}}</a>

                    <ul class="card-content">
                        <li>
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11H4m15.5 5a.5.5 0 0 0 .5-.5V8a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44l-1.436-2.12a1 1 0 0 0-.828-.44H8a1 1 0 0 0-1 1M4 9v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44L9.985 8.44A1 1 0 0 0 9.157 8H5a1 1 0 0 0-1 1Z" />
                            </svg>
                            <p>Categoria: </p>
                        </li>

                        <li>
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9" />
                            </svg>
                            <p>Estoque: </p>
                        </li>
                    </ul>

                    <div class="card-price">
                        <p>R$ {{$produto->PRODUTO_PRECO}}</p>

                        <button type="button" class="btn">

                            <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                            </svg>
                            Carrinho
                        </button>
                    </div>
                </div>

            </div>

        </div>
        @endforeach


        
    </div>

</section>