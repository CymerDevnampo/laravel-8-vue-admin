<script>
import Links from "@/Layouts/Admin/Links.vue";
import Sidebar from "@/Pages/Admin/Pages/Sidebar.vue";
import Header from "@/Pages/Admin/Pages/Header.vue";
import Footer from "@/Pages/Admin/Pages/Footer.vue";
import Scripts from "@/Layouts/Admin/Scripts.vue";

export default {
  name: "App",

  components: {
    Links,
    Sidebar,
    Header,
    Footer,
    Scripts,
  },
};
</script>

<template>
  <Links />
  <!-- <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div> -->

  <Sidebar />
  <Header />

  <div class="pc-container">
    <div class="pc-content">
      <div class="row">
        <slot />
      </div>
    </div>
  </div>
  <Footer />
  <Scripts />
</template>
