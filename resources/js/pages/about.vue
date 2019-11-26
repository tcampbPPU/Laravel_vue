<template>
  <div>
    <div class="heading">
      <h1 align="center">{{ $t('about') }}</h1>  
    </div>
    <div class="contianer">
      {{ $t('about-text') }}
    </div>
  </div>
</template>

<script>
export default {
  name: 'About',
  metaInfo () {
    return { title: this.$t('about') }
  }
}
</script>

<style>

</style>