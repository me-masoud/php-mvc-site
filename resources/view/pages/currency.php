<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <?php require_once './resources/view/parts/generals/head.php' ?>
</head>
</head>
<body>


<div class="fh5co-loader"></div>
	
	<div id="page">	
	<?php include_once './resources/view/parts/components/currency/bitcoin.php' ;?>
	
	<?php include_once './resources/view/parts/generals/footer.php';?>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	<?php require_once './resources/view/parts/generals/scripts.php'; ?>

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