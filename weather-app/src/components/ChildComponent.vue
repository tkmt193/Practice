
<template>
  <div class="region-selector">
    <label for="region">地域選択:</label>
    <select id="region" v-model="message">
      <option v-for="region in regions" :key="region.id" :value="region.id">{{ region.name }}</option>
    </select>
    <button @click="sendMessage">検索</button>
  </div>
</template>

<script>
export default {
  name: "RegionSelector",
  data() {
    return {
      message: null,
      regions: [
        { id: 1, name: "東京" },
        { id: 2, name: "大阪" },
        { id: 400040, name: "福岡" },
        { id: 4, name: "札幌" },
        // 他の地域データを追加
      ],
    };
  },
  methods: {
    sendMessage() {
      this.$emit('message', this.message); // 親コンポーネントにメッセージを送信
    }
  }
};

</script>