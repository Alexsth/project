<template>
  <div>
    <!--? Preloader Start -->
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <img src="../../img/logo/logo.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- Preloader Start -->
    <header-view></header-view>
    <main>
      <router-view></router-view>
    </main>
    <footer-view></footer-view>
  </div>
</template>

<script>
export default {
  name: "App",
};
</script>

<style scoped>
</style>
