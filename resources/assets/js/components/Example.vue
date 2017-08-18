<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                        {{data}}
                    </div>
                    <router-link to="/">Home</router-link>
                    <router-link to="/user">User</router-link>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data'],
        data() {
          return {

          }  ;
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
