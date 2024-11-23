<x-layout>

        <div class="content d-flex justify-content-center align-items-center mt-4">
            <div class="drink-image">
                <img src={{asset('images/personalizar/Taça.svg')}} alt="Imagem da Taça" class="img-fluid">
            </div>
            <div class="drink-customize ms-4">
                <h2>PERSONALIZE SUA BEBIDA!</h2>
                <form>
                    <div class="mb-3">
                        <label for="customization" class="form-label">Digite o que deseja adicionar em sua bebida:</label>
                        <textarea class="form-control" id="customization" rows="5" placeholder="Exemplo: limão, hortelã, açúcar"></textarea>
                    </div>
                    <button type="button" class="btn btn-dark w-100">Adicionar no carrinho</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
