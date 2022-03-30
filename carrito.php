
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <script 
src="https://api.micuentaweb.pe/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
kr-public-key="72758033:testpublickey_6jgvzmrkFPAvXEGl9HVVr5Q9wRq3stjZgv597vLehgPuQ">
</script>
<link href="https://api.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic-reset.css" rel="stylesheet">
<link href="https://api.micuentaweb.pe/static/js/krypton-client/V4.0/ext/no-theme.css" rel="stylesheet">
<script 
src="https://api.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic.js">
</script>
 
 
 <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/perro-incrustado.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">PRUEBA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Carrito</h1>
                <p class="lead fw-normal text-white-50 mb-0">CheckOut</p>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody id="tblCarrito">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5 ms-auto">
                    <h4>Total a Pagar: <span id="total_pagar">0.00</span></h4>
                    <div class="d-grid gap-2">
                        <div id="button-container"></div>
                        <button class="btn btn-warning" type="button" id="btnVaciar">Vaciar Carrito</button>
                        <button class="kr-payment-button" type="button" >PAGAR</button>
                      
                        <!-- FORMULARIO-->
                        <a href="#" onClick="onCheckout()">Ver formulario</a>


                        
                        <div class="kr-embedded" id="paymentForm"  style="display: none;" kr-form-token="266R5VeoEVQfSvcOyZ_0bmOg223eyJhbW91bnQiOjE4MCwiY3VycmVuY3kiOiJVU0QiLCJtb2RlIjoiVEVTVCIsInZlcnNpb24iOjMsIm9yZGVySWQiOiJteU9yZGVySWQtNDYxMCIsInNob3BOYW1lIjoiSVpJKklGQSBQRVJVICg4MDExODkzKSIsInJpc2tBbmFseXNlciI6eyJmaW5nZXJQcmludHNJZCI6IjhlODNjMmNmLWU5ZWYtNDIzNi05ODA5LWMyZDAxNmQ3OTM3NyIsImpzVXJsIjoiaHR0cHM6Ly9zZWN1cmUubWljdWVudGF3ZWIucGUvdHJhcy9hbmFseXplci9wdWJsaWMvdjEvY2hlY2tlci84ZTgzYzJjZi1lOWVmLTQyMzYtOTgwOS1jMmQwMTZkNzkzNzcifSwiY2F0ZWdvcmllcyI6eyJkZWJpdENyZWRpdENhcmRzIjp7ImFwcElkIjoiY2FyZHMiLCJwYXJhbSI6WyJBTUVYIiwiTUFTVEVSQ0FSRF9ERUJJVCIsIk1BU1RFUkNBUkQiLCJNQ19DT1JET0JFU0EiLCJWSVNBIiwiVklTQV9FTEVDVFJPTiIsIlZJU0FfREVCSVQiLCJESU5FUlMiXX19LCJjYXJkcyI6eyJBTUVYIjp7ImZpZWxkcyI6eyJzZWN1cml0eUNvZGUiOnsibWF4TGVuZ3RoIjo0fSwiaW5zdGFsbG1lbnROdW1iZXIiOnsidmFsdWUiOiItMSIsInZhbHVlcyI6eyItMSI6IjE6Ojo6OjE4MCIsIkRZTkFNSUMiOiI6Ojo6OiJ9LCJyZXF1aXJlZCI6dHJ1ZSwic2Vuc2l0aXZlIjpmYWxzZSwiaGlkZGVuIjpmYWxzZSwiY2xlYXJPbkVycm9yIjpmYWxzZX0sImZpcnN0SW5zdGFsbG1lbnREZWxheSI6eyJ2YWx1ZSI6IjAiLCJ2YWx1ZXMiOnsiMCI6IjAiLCJEWU5BTUlDIjoiRFlOQU1JQyJ9LCJyZXF1aXJlZCI6dHJ1ZSwic2Vuc2l0aXZlIjpmYWxzZSwiaGlkZGVuIjpmYWxzZSwiY2xlYXJPbkVycm9yIjpmYWxzZX19LCJjb3B5RnJvbSI6ImNhcmRzLkRFRkFVTFQifSwiTUFTVEVSQ0FSRF9ERUJJVCI6eyJmaWVsZHMiOnsiaW5zdGFsbG1lbnROdW1iZXIiOnsidmFsdWUiOiItMSIsInZhbHVlcyI6eyItMSI6IjE6Ojo6OjE4MCIsIkRZTkFNSUMiOiI6Ojo6OiJ9LCJyZXF1aXJlZCI6dHJ1ZSwic2Vuc2l0aXZlIjpmYWxzZSwiaGlkZGVuIjpmYWxzZSwiY2xlYXJPbkVycm9yIjpmYWxzZX0sImZpcnN0SW5zdGFsbG1lbnREZWxheSI6eyJ2YWx1ZSI6IjAiLCJ2YWx1ZXMiOnsiMCI6IjAiLCJEWU5BTUlDIjoiRFlOQU1JQyJ9LCJyZXF1aXJlZCI6dHJ1ZSwic2Vuc2l0aXZlIjpmYWxzZSwiaGlkZGVuIjpmYWxzZSwiY2xlYXJPbkVycm9yIjpmYWxzZX19LCJjb3B5RnJvbSI6ImNhcmRzLkRFRkFVTFQifSwiTUFTVEVSQ0FSRCI6eyJmaWVsZHMiOnsiaW5zdGFsbG1lbnROdW1iZXIiOnsidmFsdWUiOiItMSIsInZhbHVlcyI6eyItMSI6IjE6Ojo6OjE4MCIsIkRZTkFNSUMiOiI6Ojo6OiJ9LCJyZXF1aXJlZCI6dHJ1ZSwic2Vuc2l0aXZlIjpmYWxzZSwiaGlkZGVuIjpmYWxzZSwiY2xlYXJPbkVycm9yIjpmYWxzZX0sImZpcnN0SW5zdGFsbG1lbnREZWxheSI6eyJ2YWx1ZSI6IjAiLCJ2YWx1ZXMiOnsiMCI6IjAiLCJEWU5BTUlDIjoiRFlOQU1JQyJ9LCJyZXF1aXJlZCI6dHJ1ZSwic2Vuc2l0aXZlIjpmYWxzZSwiaGlkZGVuIjpmYWxzZSwiY2xlYXJPbkVycm9yIjpmYWxzZX19LCJjb3B5RnJvbSI6ImNhcmRzLkRFRkFVTFQifSwiTUNfQ09SRE9CRVNBIjp7ImZpZWxkcyI6eyJpbnN0YWxsbWVudE51bWJlciI6eyJ2YWx1ZSI6Ii0xIiwidmFsdWVzIjp7Ii0xIjoiMTo6Ojo6MTgwIiwiRFlOQU1JQyI6Ijo6Ojo6In0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfSwiZmlyc3RJbnN0YWxsbWVudERlbGF5Ijp7InZhbHVlIjoiMCIsInZhbHVlcyI6eyIwIjoiMCIsIkRZTkFNSUMiOiJEWU5BTUlDIn0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfX0sImNvcHlGcm9tIjoiY2FyZHMuREVGQVVMVCJ9LCJWSVNBIjp7ImZpZWxkcyI6eyJpbnN0YWxsbWVudE51bWJlciI6eyJ2YWx1ZSI6Ii0xIiwidmFsdWVzIjp7Ii0xIjoiMTo6Ojo6MTgwIiwiRFlOQU1JQyI6Ijo6Ojo6In0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfSwiZmlyc3RJbnN0YWxsbWVudERlbGF5Ijp7InZhbHVlIjoiMCIsInZhbHVlcyI6eyIwIjoiMCIsIkRZTkFNSUMiOiJEWU5BTUlDIn0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfX0sImNvcHlGcm9tIjoiY2FyZHMuREVGQVVMVCJ9LCJWSVNBX0VMRUNUUk9OIjp7ImZpZWxkcyI6eyJpbnN0YWxsbWVudE51bWJlciI6eyJ2YWx1ZSI6Ii0xIiwidmFsdWVzIjp7Ii0xIjoiMTo6Ojo6MTgwIiwiRFlOQU1JQyI6Ijo6Ojo6In0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfSwiZmlyc3RJbnN0YWxsbWVudERlbGF5Ijp7InZhbHVlIjoiMCIsInZhbHVlcyI6eyIwIjoiMCIsIkRZTkFNSUMiOiJEWU5BTUlDIn0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfX0sImNvcHlGcm9tIjoiY2FyZHMuREVGQVVMVCJ9LCJERUZBVUxUIjp7ImZpZWxkcyI6eyJwYW4iOnsibWluTGVuZ3RoIjoxMCwibWF4TGVuZ3RoIjoxOSwidmFsaWRhdG9ycyI6WyJOVU1FUklDIiwiTFVITiJdLCJyZXF1aXJlZCI6dHJ1ZSwic2Vuc2l0aXZlIjp0cnVlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfSwiZXhwaXJ5RGF0ZSI6eyJyZXF1aXJlZCI6dHJ1ZSwic2Vuc2l0aXZlIjp0cnVlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfSwic2VjdXJpdHlDb2RlIjp7Im1pbkxlbmd0aCI6MywibWF4TGVuZ3RoIjo0LCJ2YWxpZGF0b3JzIjpbIk5VTUVSSUMiXSwicmVxdWlyZWQiOnRydWUsInNlbnNpdGl2ZSI6dHJ1ZSwiaGlkZGVuIjpmYWxzZSwiY2xlYXJPbkVycm9yIjp0cnVlfSwiaW5zdGFsbG1lbnROdW1iZXIiOnsidmFsdWUiOiItMSIsInZhbHVlcyI6eyItMSI6IjE6Ojo6OjE4MCJ9LCJyZXF1aXJlZCI6ZmFsc2UsInNlbnNpdGl2ZSI6ZmFsc2UsImhpZGRlbiI6ZmFsc2UsImNsZWFyT25FcnJvciI6ZmFsc2V9LCJmaXJzdEluc3RhbGxtZW50RGVsYXkiOnsidmFsdWUiOiIwIiwidmFsdWVzIjp7IjAiOiIwIn0sInJlcXVpcmVkIjpmYWxzZSwic2Vuc2l0aXZlIjpmYWxzZSwiaGlkZGVuIjpmYWxzZSwiY2xlYXJPbkVycm9yIjpmYWxzZX19fSwiRElORVJTIjp7ImZpZWxkcyI6eyJpbnN0YWxsbWVudE51bWJlciI6eyJ2YWx1ZSI6Ii0xIiwidmFsdWVzIjp7Ii0xIjoiMTo6Ojo6MTgwIiwiRFlOQU1JQyI6Ijo6Ojo6In0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfSwiZmlyc3RJbnN0YWxsbWVudERlbGF5Ijp7InZhbHVlIjoiMCIsInZhbHVlcyI6eyIwIjoiMCIsIkRZTkFNSUMiOiJEWU5BTUlDIn0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfX0sImNvcHlGcm9tIjoiY2FyZHMuREVGQVVMVCJ9LCJWSVNBX0RFQklUIjp7ImZpZWxkcyI6eyJpbnN0YWxsbWVudE51bWJlciI6eyJ2YWx1ZSI6Ii0xIiwidmFsdWVzIjp7Ii0xIjoiMTo6Ojo6MTgwIiwiRFlOQU1JQyI6Ijo6Ojo6In0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfSwiZmlyc3RJbnN0YWxsbWVudERlbGF5Ijp7InZhbHVlIjoiMCIsInZhbHVlcyI6eyIwIjoiMCIsIkRZTkFNSUMiOiJEWU5BTUlDIn0sInJlcXVpcmVkIjp0cnVlLCJzZW5zaXRpdmUiOmZhbHNlLCJoaWRkZW4iOmZhbHNlLCJjbGVhck9uRXJyb3IiOmZhbHNlfX0sImNvcHlGcm9tIjoiY2FyZHMuREVGQVVMVCJ9fSwicGFzc0FjdGl2YXRlZCI6dHJ1ZSwiYXBpUmVzdFZlcnNpb24iOiI0LjAiLCJjb3VudHJ5IjoiUEUifQb202">

                            <!-- payment form fields -->
                            <div class="kr-pan"></div>
                            <div class="kr-expiry"></div>
                            <div class="kr-security-code"></div>

                            <!-- payment form submit button -->
                            <button class="kr-payment-button"></button>

                            <!-- error zone -->
                            <div class="kr-form-error"></div>
                        </div>
</div>


                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
           
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        // mostrarCarrito();

        function mostrarCarrito() {
            if (localStorage.getItem("productos") != null) {
                let array = JSON.parse(localStorage.getItem('productos'));
                if (array.length > 0) {
                    $.ajax({
                        url: 'ajax.php',
                        type: 'POST',
                        async: true,
                        data: {
                            action: 'buscar',
                            data: array
                        },
                        success: function(response) {
                            console.log(response);
                            const res = JSON.parse(response);
                            let html = '';
                            res.datos.forEach(element => {
                                html += `
                            <tr>
                                <td>${element.id}</td>
                                <td>${element.nombre}</td>
                                <td>${element.precio}</td>
                                <td>1</td>
                                <td>${element.precio}</td>
                            </tr>
                            `;
                            });
                            $('#tblCarrito').html(html);
                            $('#total_pagar').text(res.total);
                        }
                    });
                }
            }
        }
//---------------------------------------------------------------------------------------------------
function onCheckout()
{
    // Create the order, based on your cart
    var order = {
        "amount":   180,
        "currency": "USD",
        "orderId":  "myOrderId-999999",
        "customer": {
            "email": "sample@example.com"
        }
    };

    // Call merchant server to get form token and then display payment form
    getFormToken(order, displayPaymentForm, alert);
}

/**
* Get form token from merchant server
* @param order
* @param resolve
* @param reject
*/
function getFormToken(order, resolve, reject) {
    var request = new XMLHttpRequest();

    // Open a new connection, using the POST request on the URL endpoint
    request.open('POST', 'https://ifalima2022.pe/pago/index.php', true);
    //request.setRequestHeader('Content-Type', 'application/json');

    request.onload = function () {
        if (request.status >= 200 && request.status < 400) {
            resolve(this.response);
        }
        else
        {
            reject("Invalid server response. Code " + request.status);
        }
    };

    request.onerror = function (error) {
        reject(error);
    };

    // Send request
	//request.send(JSON.stringify(order));
	
	var formData = new FormData();
	formData.append("amount", order.amount);
	formData.append("currency", order.currency);
	formData.append("orderId", order.orderId);
	formData.append("email", order.customer.email);
    request.send(formData);
}

/**
* Display the payment form with the argument form token
* @param formToken
*/
function displayPaymentForm(formToken)
{
	//alert(formToken);

    // Show the payment form
    document.getElementById('paymentForm').style.display = 'block';
    document.getElementById('paymentForm').setAttribute("kr-form-token",formToken)
    // Set form token
    // KR.setFormToken(formToken);

    // Add listener for submit event
    KR.onSubmit(onPaid);    
}

function onPaid(event) {
  if (event.clientAnswer.orderStatus === "PAID") {
    // Remove the payment form
    KR.removeForms();

    // Show success message
    document.getElementById("paymentSuccessful").style.display = "block";
  } else {
    // Show error message to the user
    alert("Payment failed !");
  }
}
    </script>

    
</body>

</html>