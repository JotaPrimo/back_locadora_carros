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
                        <button type="button" class="float-end btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalMarca">Adicionar
                        </button>
                    </template>
                </card-component>
                <!--    fim card listagem marcas -->
            </div>
        </div>

        <!-- Modal -->
        <modal-component id="modalMarca" titulo="Adicionar Marca">
            <template v-slot:conteudo>
                <div class="form-group">
                    <input-container-component id="novoNome" titulo="Nome da marca" id-help="novoNomeHelp"
                                               texto-ajuda="Informe o nome da marca">
                        <input v-model="nomeMarca" type="text" class="form-control" id="novoNome"
                               placeholder="Informe o nome" aria-describedby="novoNomeHelp">
                    </input-container-component>
                {{ nomeMarca }}
                </div>

                <div class="form-group">
                    <input-container-component id="novoImagem" titulo="Imagem" id-help="novoImagemHelp"
                                               texto-ajuda="Envie o arquivo">
                        <input type="file" @change="carregarImagem($event)" class="form-control-file" id="imagem"
                               placeholder="Selecione Imagem" aria-describedby="novoImagemHelp">
                    </input-container-component>
                </div>
                {{ arquivoImagem }}
            </template>

            <template v-slot:rodape>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button @click="salvar()" type="button" class="btn btn-primary btn-sm">Salvar</button>
            </template>

        </modal-component>
        <!-- modal-->
    </div>
</template>

<script>
export default {
    data() {
        return {
            urlBase: 'http://localhost:8000/api/v1/marca',
            nomeMarca: '',
            arquivoImagem: [], // inputs do tipo file não podem ser usados com v-model
        }
    },
    methods: {
        carregarImagem(e) {
            this.arquivoImagem = e.target.files
        },

        salvar() {

            let formData = new FormData();
            formData.append('nome', this.nomeMarca)
            formData.append('imagem', this.arquivoImagem[0])

            let config = {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'Accept': 'application/json'
                }
            }

            // axios.post(<url>, <conteudo>, <config>)
            axios.post(this.urlBase, formData, config)
                .then(response => {
                    console.log(response)
                }).catch(err => {
                console.log(err)
            })
        }
    }

}
</script>

<style scoped>

</style>
