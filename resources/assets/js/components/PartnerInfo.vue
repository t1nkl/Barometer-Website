<template>
    <div class="col-md-2 partners-item">
        <a @click="showModal = false" :href="partner.url" rel="nofollow" class="" >
            <img :src="'/uploads/'+partner.image" class="img-fluid partner-img-bl">
            <h4 class="speaker-name">{{locale(partner.title)}}</h4>
        </a>

        <div v-if="showModal" :class="{'md-modal md-effect-1 md-show': showModal}">
            <div class="md-content">
                <div class="col-md-12 speaker-info-modal">
                    <div class="col-md-4 speaker-img-modal">
                        <img :src="'/uploads/'+partner.image" class="img-fluid" >
                        <ul class="navbar-social-modal">
                            <li class="nav-item">
                                <a class="nav-link-modal" href="#"><img src="img/facebook-g.svg" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link-modal" href="#"><img src="img/instagram-g.svg" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link-modal" href="#"><img src="img/youtube-g.svg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 speaker-description-modal">
                        <h4 class="speaker-name-modal">{{locale(partner.title)}}</h4>
                        <span class="position-modal">Position</span>
                        <p>{{locale(partner.url)}}</p>
                    </div>
                    <div class="col-md-12 speaker-event-modal">
                        <div class="col-md-6 event-one-modal">
                            <div class="event-date-modal">
                                <p class="date-modal"><span>28</span>октября</p>
                                <span>#degustation #1</span>
                            </div>
                            <div class="event-name-modal">
                                <p>Step by step: Образование для бармена</p>
                                <span class="time-modal">12.30-14.30</span>
                            </div>
                        </div>
                        <div class="col-md-6 event-two-modal">
                            <div class="event-date-modal">
                                <p class="date-modal"><span>28</span>октября</p>
                                <span>#degustation #1</span>
                            </div>
                            <div class="event-name-modal">
                                <p>Step by step: Образование для бармена</p>
                                <span class="time-modal">12.30-14.30</span>
                            </div>
                        </div>
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
        props:['partner'],

        name: 'PartnerInfo',

        data () {
            return {
                program : {},
                showModal: false
            };
        }
    };
</script>

<style lang="css" scoped>
</style>