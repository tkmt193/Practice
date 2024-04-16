<template>
    <!-- htmlファイルを記述 -->
    <div>
        <h1>Message</h1>
        <p>{{ msg }}</p>
    </div>
</template>
<script>
export default {
    // ここに処理を記述
    name: 'MessageVue',
    props: {
        msg: String
    }
}
</script>
<style scoped>
h1 {
    color: red;
}
</style>

