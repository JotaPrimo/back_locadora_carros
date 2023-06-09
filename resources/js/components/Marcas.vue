<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Busca de Marcas</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="id" class="form-label">#ID</label>
                                <input type="number" class="form-control" id="id" placeholder="Id" aria-describedby="idHelp">
                                <div id="idHelp" class="form-text">Buscar por id</div>
                            </div>
                            <div class="mb-3 col">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Nome da marca" aria-describedby="nomeHelp">
                                <div id="nomeHelp" class="form-text">Buscar por nome</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="float-end btn btn-primary btn-sm">Buscar</button>
                    </div>
                </div>
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
