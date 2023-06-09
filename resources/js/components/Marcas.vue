<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Busca de Marcas</div>
                    <div class="card-body">
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
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="float-end btn btn-primary btn-sm">Buscar</button>
                    </div>
                </div>
                <!--    inicio card listagem marcas -->
                <div class="card mt-3">
                    <div class="card-header">Listagem de Marcas</div>
                    <div class="card-body">
                       <table-component></table-component>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="float-end btn btn-primary btn-sm">Adicionar</button>
                    </div>
                </div>
                <!--    fim card listagem marcas -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home"
}
</script>

<style scoped>

</style>
