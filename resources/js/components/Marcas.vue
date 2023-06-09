<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <card-component titulo="Busca de Marcas">

                    <template v-slot:conteudo>
                        <div class="row">
                            <div class="mb-3 col">
                                <input-container-component
                                    id="ID"
                                    titulo="ID"
                                    id-help="idHelp"
                                    texto-ajuda="Informe o id da marca">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="id"
                                        placeholder="Id"
                                        aria-describedby="idHelp">
                                </input-container-component>
                            </div>
                            <div class="mb-3 col">
                                <input-container-component
                                    id="nome"
                                    titulo="Nome da marca"
                                    id-help="nomeHelp"
                                    texto-ajuda="Buscar por nome">

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nome"
                                        placeholder="Nome da marca"
                                        aria-describedby="nomeHelp">

                                </input-container-component>
                            </div>
                        </div>
                    </template>

                    <template v-slot:rodape>
                        <button type="submit" class="float-end btn btn-primary btn-sm">Buscar</button>
                    </template>

                </card-component>

                <!--    inicio card listagem marcas -->
                <card-component titulo="Listagem de Marcas">
                    <template v-slot:conteudo>
                        <table-component></table-component>
                    </template>
                    <template v-slot:rodape>
                        <button type="button" class="float-end btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalMarca">Adicionar</button>
                    </template>
                </card-component>
                <!--    fim card listagem marcas -->
            </div>
        </div>

        <!--        modal-->
        <!-- Modal -->
        <modal-component id="modalMarca" titulo="Adicionar Marca"></modal-component>
        <!--        modal-->
    </div>
</template>

<script>
export default {
    name: "Home"
}
</script>

<style scoped>

</style>
