<template>
    <transition name="bounceDown">
        <component :is="currentView"></component>
    </transition>
</template>

<script>
    import Post from './Blog/Posts.vue';


    export default {
        data() {
            return {
                currentView: 'app-post'
            };
        },
        components: {
            'app-post': Post,
        }

    }
</script>
<style>
    /* Enter and leave animations can use different */
    /* durations and timing functions.              */
    .slide-fade-enter-active {
        transition: all 2s ease;
    }

    .slide-fade-leave-active {
        transition: all 0.8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }

    .slide-fade-enter, .slide-fade-leave-to
        /* .slide-fade-leave-active below version 2.1.8 */
    {
        transform: translateX(10px);
        opacity: 0;
    }
</style>