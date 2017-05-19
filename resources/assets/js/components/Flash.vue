<template>
<div class="alert callout" role="alert">
    <strong>Success</strong>
    {{  body }}
</div>
</template>

<script>
    export default {
        data(){
            return {
                body: "Temp for now"
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
