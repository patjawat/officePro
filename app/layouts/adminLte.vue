<template>
  <div>
    <NavBar />
    <SideBar />
   <div class="content-wrapper">
       <section class="content">
            <nuxt />
       </section>
   </div>
    <Footer />
  </div>
</template>

<script>
import NavBar from '../components/adminlte/NavBar'
import SideBar from '../components/adminlte/SideBar'
import Footer from '../components/adminlte/Footer'
export default {
  components: {
    NavBar, SideBar, Footer
  }
}
</script>