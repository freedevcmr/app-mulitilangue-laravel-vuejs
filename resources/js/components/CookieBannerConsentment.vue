<template>
    <p :class="isDisplay? 'block':'hidden'">
   
     {{ __('messages.cookie_consentement') }}
    
     <a href="#">{{ __('messages.learn_more') }}</a>
     
      <button type="button" @click="handleCookie">Ok</button>
     </p>
</template>
<style scoped>
.hidden {
    display: none;
}

.block {
    display: block;
}
</style>

<script>


import Cookies from 'js-cookie';



export default {
    data(){
        return {
            isDisplay: false
        }
    },
    methods:{
        handleCookie(){
            // alert('hello');
            Cookies.set('user_has_agree', 'true', { expires: 10 });
            this.isDisplay = false;
        }
        
    },
    mounted(){
        // console.log( Cookies.get('user_has_agree'))
        // console.log(lang.get('messages.learn_more'));
        //     // var lang = new Lang();

        // console.log(lang.getLocale());
        if(Cookies.get('user_has_agree') === undefined)
        {
            //on affiche la banniere
            this.isDisplay = true
        }
    }
        
    
}






//je suis a la minute 20 de l'episode 5
</script>


