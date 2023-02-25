
<template>

    <div class="insta-wrapper">
        <div class="row">
            <div class="col-md-3" v-for="(posts, index) in InstaPosts">
                <a :href="posts.permalink" target="_blank" :key="index" v-if="index < 8">
                <img :src="posts.media_url" :alt="posts.caption"> 
                </a>
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
                token:"IGQVJWdTF2M3NZAZA0gyMzRWRzduWDV4TkZAEV1I5alp1Q3M5cTJFdkVnajc2SV9WYTZAvS2N2SjA0MUViTmNkNUI1YmdQVmJMQ2c1RWdvaFlaUFl0b2lDLXZARWGx0N3d0MDVWOWNuektmaDIybVo3T0NuYQZDZD",
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