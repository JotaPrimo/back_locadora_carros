<template>
    <div>
     <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col" v-for="(t, key) in titulos" :key="key">{{ t }}</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(m) in dados" :key="m.id">
            <th scope="row">{{  m.id }}</th>
            <td>{{  m.nome }}</td>
            <td>
                <img :src="'/storage/'+ m.imagem" alt="" width="30" height="30">
            </td>           
        </tr>       
        </tbody>
    </table>
        {{ }}
    </div>
</template>

<script>
export default {
    props: [ 'dados', 'titulos' ]
}
</script>

<style scoped>

</style>
