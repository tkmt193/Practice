<template>
  <header>
    <div class="logo">
        <img src="../assets/logo.png" alt="Vue logo" />
        {{ title }}
    </div>
    <nav>
      <ul>
        <li><a href="#">メニュー1</a></li>
        <li><a href="#">メニュー2</a></li>
        <li><a href="#">メニュー3</a></li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  name: "HeadNavbar",
  props: {
    title: {
      type: String,
      required: true,
    },
  },
};
</script>

<style>
header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 60px;
  color: #42b983;
  background-color: #f5f5f5;
  padding: 0 20px;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}
.logo img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

nav {
  display: flex;
}

ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

li {
  margin-left: 20px;
}

nav a {
  color: #42b983;
  text-decoration: none;
  padding: 5px 10px;
}

nav a:hover {
  background-color: #ddd;
}
</style>