<template>
  <span>
    <p>This is the homepage</p>
    <button @click="takePicture">take picture</button>
  </span>
</template>

<script>
    export default {
        methods: {
            takePicture: function () {
                this.cordova.camera.getPicture((imageURI) => {
                    window.alert('Photo URI : ' + imageURI)
                }, (message) => {
                    window.alert('FAILED : ' + message)
                }, {
                    quality: 50,
                    destinationType: Vue.cordova.camera.DestinationType.FILE_URI
                })
            }
        }
    }
</script>