(function()
{
  var lwws = (new LWWS());


  $(document).ready(function(){
    console.log("page ready!!");
  });
       
       
  $(document).on('click', "a#excute", function(event)
  {
    var cityCode = $("select#city option:selected").attr('value');
    console.log(cityCode);
    lwws.getJSON(cityCode, function(json){
       var item = json.value.items[0];
       $('span#result').html(
         item['location']['prefecture'] +
         item['location']['city'] + "の今宵の天気は" + item['description']['text'] + "ってかんじ！"
       );       
       console.log(item);
       for(var i = 0; i < item['forecasts'].length; i++) {
         var min = item['forecasts'][i]['temperature']['min'];
         var max = item['forecasts'][i]['temperature']['max'];
         /* min, max maybe null */
         if (min != null){
           console.log('最低気温' + min['celsius']);
         }
         if (max != null){
           console.log('最高気温' + max['celsius']);
         }
       }
    });	 
  });
})();
