<template>
  <div>
    <h1>Contact us</h1>
    <form>
       <div class="mb-3">
          <label class="form-label" for="name">Name</label>
          <input class="form-control" type="text" name="name" id="name">
       </div>

       <div class="mb-3">
          <label class="form-label" for="email">Email</label>
          <input class="form-control" type="email" name="email" id="email">
       </div>

       <div class="mb-3">
          <label class="form-label" for="email">Message</label>
          <input class="form-control" type="text" name="message" id="message">
       </div>
    </form>
  </div>
</template>

<script>
export default {
    name: 'PageContacts',
}
</script>

<style lang="scss" scoped>

</style>
