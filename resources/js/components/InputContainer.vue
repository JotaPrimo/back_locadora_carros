<template>
    <div class="class-formgroup">
        <label :for="id" class="form-label">{{ titulo }}</label>
        <slot></slot>
        <div :id="idHelp" class="form-text">{{ textoAjuda }}</div>
    </div>
</template>

<script>
export default {
    name: "InputContainer",
    props: ['id', 'titulo', 'idHelp', 'textoAjuda']
}
</script>

<style scoped>

</style>
