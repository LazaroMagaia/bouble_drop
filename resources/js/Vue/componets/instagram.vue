
<template>

    <div class="insta-wrapper">
        <div class="row">
            <div class="col-md-3" v-for="(posts, index) in InstaPosts">
                <div v-if ="index < 8">
                    <a :href="posts.permalink" target="_blank" :key="index" 
                        v-if = "posts.media_type === 'VIDEO'">
                        <iframe class="embed-responsive-item" 
                        :src="posts.media_url"
                            allowfullscreen>
                        </iframe>
                    </a>

                    <a :href="posts.permalink" target="_blank" :key="index" 
                        v-if = "posts.media_type === 'IMAGE'" >
                        <img :src="posts.media_url" :alt="posts.caption"> 
                    </a>
                    
                </div>
            </div>
    </div>
    </div><!--insta-wrapper-->
</template>

<script>    
    import axios from 'axios';
    export default{

        data()
        {
            return{
                token:"IGQVJWcFMybHpPX2xLc1ZABWFRnWkxtekpmRjNxNk1aT1dFNkRFcEphcm9TUlJhOTdYdk5lNGluR2ZACMXRwN2lwXzN3N3Fac0ZA6cENOdTRIYUZAUaldVOW1iNjRBYm9KM3BYS09WemNQT2NZAYU5VUURGcwZDZD",
                InstaPosts:{},
                i:0
                }
        },
        created(){
            this.getInstaFeed();
        },
        methods: {
            getInstaFeed()
            {
                axios.get(`https://graph.instagram.com/me/media?access_token=${this.token}&fields=id,media_url,media_type,caption,permalink`)
                .then((res)=>{
                    this.InstaPosts =res.data.data;
                })
                .catch(err =>{
                    console.log(err)
                })
            }
        },
    }
</script>