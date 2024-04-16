

<template>
  <div>
    <ChildComponent @message="handleMessage"></ChildComponent>
    <p>{{ weatherData.title }}</p>
    <p>今日: {{ weatherData.today }}</p>
    <p>明日: {{ weatherData.tomorrow }}</p>
    <p>明後日: {{ weatherData.totomorrow }}</p>
  </div>
</template>

<script>
import ChildComponent from './ChildComponent.vue';

export default {
  components: {
    ChildComponent
  },
  data() {
    return {
      weatherData: []
    };
  },
  methods: {
    async handleMessage(message) {
        console.log(message);
    if(message){
        console.log('メッセージ');
        const apiUrl = `https://weather.tsukumijima.net/api/forecast/city/${message}`;

        await fetch(apiUrl).then(response => {
            if (!response.ok) {
                console.error('サーバーエラー');
            }
                console.log('取得中');
                return response.json()
            }).catch(error => {
            console.error('通信に失敗しました', error);
            }).then(json => {
                console.log(json);
                this.weatherData ={
                    title: json['title'],
                    today: json['forecasts'][0]['telop'],
                    tomorrow: json['forecasts'][1]['telop'],
                    totomorrow: json['forecasts'][2]['telop']
                }
                })
         

    } 
  }}
};
</script>