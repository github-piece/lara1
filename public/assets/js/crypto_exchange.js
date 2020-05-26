import Vue from 'vue'
const url = "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC,BCH&tsyms=USD,EUR,GBP";

new Vue({
    el: '#crypto_exchange',   
    data: {
     results: []
        },

     mounted() {

      this.upDate();
      this.timer = setInterval(this.upDate, 1000)
      }, 

      methods:{
      upDate: function() {
            axios.get(url).then(response => {
              this.results = response.data
            })
       }, 
      cancelAutoUpdate: function(){
            clearInterval(this.timer)
       },

       beforeDestroy() {
         clearInterval(this.timer)
       }
    }
});