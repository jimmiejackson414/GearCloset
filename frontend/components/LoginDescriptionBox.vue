<template>
  <v-container>
    <v-card
      class="content mx-auto">
      <v-card-title>
        <h2 class="text-h3 mb-3">
          Gear Closet
        </h2>
        <h1 class="text-h2 font-weight-bold header">
          Let's go outside.
        </h1>
      </v-card-title>
      <v-card-text>
        <p class="body-1">
          Gear Closet is the best way to plan your next hike.
        </p>
        <p class="body-1">
          Create lists based on different pack setups, put together a shopping or
          to do list, and collaborate with your friends on upcoming hikes.
        </p>
      </v-card-text>
    </v-card>
  </v-container>
</template>

<script>
  export default {};
</script>

<style lang="scss" scoped>
  .content {
    padding: 2rem;
    max-width: 740px;

    .header {
      line-height: 70px;
      margin-bottom: 2rem;
      word-break: normal;
    }
  }
</style>
