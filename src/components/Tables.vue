<template>
  <section id="tables">
    <iframe src="https://digifabster.com/sa/client" frameborder="0" width="12000" height="800"><p>Your browser may not support iframes.</p></iframe>
  </section>
</template>

<script>
import { Row, Column, Card, ViewWrapper, CardBody } from 'mdbvue'

export default {
  name: 'Tables',
  components: {
    Row,
    Column,
    Card,
    ViewWrapper,
    CardBody
  },
  data () {
    return {}
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.card.card-cascade .view.gradient-card-header {
  padding: 1rem 1rem;
  text-align: center;
}
.card.card-cascade h3,
.card.card-cascade h4 {
  margin-bottom: 0;
}
</style>
