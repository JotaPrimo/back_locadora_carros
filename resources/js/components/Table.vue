<template>
    <!--depencias do componete : se não tiver um array dados com id e nome, vai quebrar-->
    <div>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-uppercase" v-for="(t, key) in titulos" :key="key">{{ t }}</th>
                </tr>
            </thead>
            <tbody>
                <!--dessa forma fica idenpendene, posso usar esse compponente em qualquer lugar-->
                <!-- desde que os nomes das colunsa sejam iguais aos dos valores-->
                <tr v-for="obj in dados" :key="obj.id">
                    <td v-if="titulos.includes(chave)" v-for="(valor, chave) in obj" :key="chave">                       

                        <span v-if="chave == 'imagem'">
                            <img :src="'/storage/' + valor " alt="" width="30" height="30">
                        </span>
                        <span v-else>
                            {{ valor }}
                        </span>    
                    </td>
                </tr>
            </tbody>
        </table>
        {{ }}
    </div>
</template>

<script>
export default {
    props: ['dados', 'titulos']
}
</script>

<style scoped></style>
