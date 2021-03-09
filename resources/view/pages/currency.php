<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency</title>
</head>
<body>
    <div>
        <h1>BitCoin Price</h1>
        <p id="bitcoinUSD"></p>
        <p id="bitcoinEUR"></p>
        <p id="bitcoinGBP"></p>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      
        axios.get('https://api.coindesk.com/v1/bpi/currentprice.json').then(function(response){
            if(response.status == 200 && response.statusText == 'OK'){
                bitcoinPrice(response.data.bpi)
            }
        });
        function bitcoinPrice(Price){
            console.log(Price)
            document.getElementById('bitcoinUSD').innerHTML = Price.USD.symbol+ ' ' + Price.USD.rate
            document.getElementById('bitcoinEUR').innerHTML = Price.EUR.symbol+ ' ' + Price.EUR.rate
            document.getElementById('bitcoinGBP').innerHTML = Price.GBP.symbol+ ' ' + Price.GBP.rate
        }
    </script>
</body>
</html>