<template>
    <div class="col-md-2 bars-item">
        <a @click="showModal = true" href="#item" class="md-trigger">
            <img :src="bar.image" class="img-fluid bars-logo">
        </a>

        <div v-if="showModal" :class="{'md-modal md-effect-1 md-show': showModal}">
            <div class="md-content">
                <div class="col-md-12 speaker-info-modal">
                    <div class="col-md-4 speaker-img-modal">
                        <img :src="bar.image" class="img-fluid">
                    </div>
                    <div class="col-md-8 speaker-description-modal">
                        <h4 class="speaker-name-modal">{{locale(bar.title)}}</h4>
                        <p>{{locale(bar.content)}}</p>
                        <ul class="navbar-social-bar-modal">
                            <li v-if="bar.fb" class="nav-item">
                                <a class="nav-link-modal" :href="bar.fb" target="_blank"><img src="/img/facebook-g.svg" alt=""></a>
                            </li>
                            <li v-if="bar.inst" class="nav-item">
                                <a class="nav-link-modal" :href="bar.inst" target="_blank"><img src="/img/instagram-g.svg" alt=""></a>
                            </li>
                            <li v-if="bar.ytube" class="nav-item">
                                <a class="nav-link-modal" :href="bar.ytube" target="_blank"><img src="/img/youtube-g.svg" alt=""></a>
                            </li>
                            <li v-if="bar.url" class="nav-item">
                                <a class="nav-link-modal" :href="bar.url" target="_blank"><img src="/img/web-icon.svg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <button @click="showModal = false" class="md-close"></button>
                </div>
            </div>
        </div>
        <div class="md-overlay"></div>
    </div>
</template>
 
<script>
    export default {
        mixins: [mixin],
        props: ['bar'],

        name: 'BarsInfo',

        data () {
            return {
                program: {},
                showModal: false
            };
        }
    };
</script>

<style lang="css" scoped>
</style>