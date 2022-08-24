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
          <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
       </div>

       <div>
          <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter" checked>
          <label class="form-check-label" for="newsletter">Iscrivimi alla newsletter</label>
       </div>

       <button type="submit" class="btn btn-primary">Send</button>
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
