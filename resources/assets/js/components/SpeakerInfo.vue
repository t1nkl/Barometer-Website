<template>
    <div v-bind:class="[speaker.type == 'Premium' ? 'col-md-2 speakers-item premium-speaker' : '', 'col-md-2 speakers-item']">
        <a @click="showModal = true" href="#item" class="md-trigger">
            <img :src="speaker.image" class="img-fluid speaker-img-bl">
            <h4 class="speaker-name">{{locale(speaker.title)}}</h4>
            <span class="cross-speaker"></span>
            <div class="speaker-info">
                <p class="speaker-txt-d" v-text="locale(speaker.descr)"></p>
                <img v-if="speaker.ytube" src="/img/youtube-w.svg" class="speaker-social" alt="">
                <img v-if="speaker.fb" src="/img/facebook-w.svg" class="speaker-social" alt="">
                <img v-if="speaker.inst" src="/img/instagram-w.svg" class="speaker-social" alt="">
            </div>
        </a>
        <div v-if="showModal" :class="{'md-modal md-effect-1 md-show': showModal}">
            <div class="md-content">
                <div class="col-md-12 speaker-info-modal">
                    <div class="col-md-4 speaker-img-modal">
                        <img :src="speaker.image" class="img-fluid">
                    </div>
                    <div class="col-md-8 speaker-description-modal">
                        <h4 class="speaker-name-modal">{{locale(speaker.title)}}</h4>
                        <span class="position-modal">{{locale(speaker.position)}}</span>
                        <p>{{locale(speaker.content)}}</p>
                        <ul class="navbar-social-modal">
                            <li v-if="speaker.fb" class="nav-item">
                                <a class="nav-link-modal" :href="speaker.fb" target="_blank"><img
                                        src="/img/facebook-g.svg" alt=""></a>
                            </li> 
                            <li v-if="speaker.inst" class="nav-item">
                                <a class="nav-link-modal" :href="speaker.inst" target="_blank"><img
                                        src="/img/instagram-g.svg" alt=""></a>
                            </li>
                            <li v-if="speaker.ytube" class="nav-item">
                                <a class="nav-link-modal" :href="speaker.ytube" target="_blank"><img
                                        src="/img/youtube-g.svg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 speaker-event-modal">
                        <div v-for="program in speaker.programs"
                             v-bind:class="[program.type == 'Premium' ? 'col-md-6 event-two-modal' : '', 'col-md-6 event-one-modal']">
                            <div class="event-date-modal">
                                <p class="date-modal" v-html="program_date(program.day)"></p>
                                <span>#{{locale(program.scene.title)}}</span>
                            </div>
                            <div class="event-name-modal">
                                <p>{{locale(program.title)}}</p>
                                <span class="time-modal">{{ program_time(program.start_date) }}-{{ program_time(program.end_date) }}</span>
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
        props: ['speaker'],

        name: 'SpeakerInfo',

        data () {
            return {
                program: {},
                showModal: false
            };
        },
        methods: {
            program_time(time)
            {
                moment.locale(document.documentElement.lang);
                return moment(time, 'HH:mm:ss').format('HH:mm');
            },
            program_date(date)
            {
                moment.locale(document.documentElement.lang);
                return moment(date, 'DD-MM-YY').format('[<span>] DD [</span>] MMMM');
            },
        },
    };
</script>

<style lang="css" scoped>
</style>