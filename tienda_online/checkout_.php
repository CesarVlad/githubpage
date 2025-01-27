<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-AU-Compatible" content="IE=edge">
    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <title>Document</title>

    <script
     src="https://www.paypal.com/sdk/js?client-id=ATQJeD-Wr0_a5NZEuYfSZnaDoX0kbXhyY-Nl2_e4v1oK8kQW1ja3QQ9wlwf7MqkD1aoYySDhTAD_EEuz"
        ></script>
     </head>

<body>

    <div id="paypal-button-container"></div>

    <script>
        paypal.Buttons({
            style:{
                color:'blue',
                shape: 'pill',
                label: 'pay',
            },
            createOrder: function(data, actions){
                return actions.order.create({
                    purchase_units: [{
                        amount:{
                            value: 100
                        }
                    }]
                });
            },
            
            onApprove: function(data, actions){
                actions.order.capture().then(function(detalles){
                    window.location.href="completado.html"
                });
            },

            onCancel: function(data){
                alert("Pago Cancelado");
                console.log(data);
            }
        }).render('#paypal-button-container');
    </script>
    
</body>

</html>
