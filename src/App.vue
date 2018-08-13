<template>
  <div class="flexible-content">
    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">
      <a class="logo-wrapper"><img alt="" class="img-fluid" src="./assets/wazp.png"/></a>
      <list-group class="list-group-flush">
        <router-link to="/dashboard" @click.native="activeItem = 1">
          <list-group-item :action="true" :class="activeItem === 1 && 'active'"><fa icon="home" class="mr-3"/>Home</list-group-item>
        </router-link>
        <router-link to="/profile" @click.native="activeItem = 2">
          <list-group-item :action="true" :class="activeItem === 2 && 'active'"><fa icon="user" class="mr-3"/>Profile</list-group-item>
        </router-link>
        <router-link to="/tables"  @click.native="activeItem = 3">
          <list-group-item :action="true" :class="activeItem === 3 && 'active'"><fa icon="book" class="mr-3"/>Your Library</list-group-item>
        </router-link>
        <router-link to="/maps" @click.native="activeItem = 4">
          <list-group-item :action="true" :class="activeItem === 4 && 'active'"><fa icon="file" class="mr-3"/>Upload 3D files</list-group-item>
        </router-link>
      </list-group>
    </div>
    <!-- /Sidebar  -->
    <main>
      <div class="mt-5 p-5">
        <router-view></router-view>
      </div>
      <ftr color="primary-color-dark" class="text-center font-small darken-2">
        <hr class="my4"/>
        <div class="pb-4">
          <a href="https://www.instagram.com/wazp.io/"><fa icon="instagram" class="mr-4"/></a>
          <a href="https://www.facebook.com/wazp.io/"><fa icon="facebook" class="mr-4"/></a>
          <a href="https://twitter.com/WazpWorkLive"><fa icon="twitter" class="mr-4"/></a>
          <a href="https://www.youtube.com/channel/UCD-KQJbZmMRobxfeB39B-_g"><fa icon="youtube" class="mr-4"/></a>
          <a href="https://plus.google.com/u/1/102578006717137002553"><fa icon="google-plus" class="mr-4"/></a>
          <a href="https://www.linkedin.com/company/wazp/"><fa icon="linkedin" class="mr-4"/></a>
          <a href="https://www.pinterest.ie/WazpWorkLive/"><fa icon="pinterest" class="mr-4"/></a>
        </div>
        <p class="footer-copyright mb-0 py-3 text-center">
          &copy; {{new Date().getFullYear()}} Copyright: <a href="https://www.wazp.io"> wazp.io </a>
        </p>
      </ftr>
    </main>
  </div>
</template>

<script>
import { Container, Navbar, NavbarItem, NavbarNav, NavbarCollapse, Btn, Fa, ListGroup, ListGroupItem, CardBody, Footer, waves } from 'mdbvue'
import Dashboard from './components/Dashboard'
import Profile from './components/Profile'

export default {
  name: 'AdminTemplate',
  components: {
    Container,
    Navbar,
    NavbarItem,
    NavbarNav,
    NavbarCollapse,
    Btn,
    ListGroup,
    ListGroupItem,
    Fa,
    CardBody,
    'ftr': Footer,
    Dashboard,
    Profile
  },
  data () {
    return {
      activeItem: 1
    }
  },
  beforeMount () {
    this.activeItem = this.$route.matched[0].props.default.page
  },
  mixins: [waves]
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
main {
  background-color: #EDEDEE;
}

.flexible-content {
  transition: padding-left 0.3s;
  padding-left: 270px;
}

.flexible-navbar {
  transition: padding-left 0.5s;
  padding-left: 270px;
}

.sidebar-fixed {
  left: 0;
  top: 0;
  height: 100vh;
  width: 270px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  z-index: 1050;
  background-color: #fff;
  padding: 1.5rem;
  padding-top: 0;
}

.sidebar-fixed .logo-wrapper img{
  width: 100%;
  padding: 2.5rem;
}

.sidebar-fixed .list-group-item {
  display: block !important;
  transition: background-color 0.3s;
}

.sidebar-fixed .list-group .active {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  border-radius: 5px;
}

@media (max-width: 1199.98px) {
  .sidebar-fixed {
    display: none;
  }
  .flexible-content {
    padding-left: 0;
  }
  .flexible-navbar {
    padding-left: 10px;
  }
}
</style>
<style>
.navbar-light .navbar-brand {
  margin-left: 15px;
  color: #2196f3 !important;
  font-weight: bolder;
}
</style>
