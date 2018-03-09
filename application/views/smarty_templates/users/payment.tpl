		<div class="col-row">
                  <blockquote class="blockquote text-center">
	   	  <h2>Welcome {$user.user_name|escape:"html":"UTF-8"}!</h2><hr/>

            {assign var="defaultMessage" value=""}
            {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

            Please pay an entry fee to {$entry_payment.bitcoin_address}.<br/><br/>
			
			So far you have paid {$coin.symbol} {$paid} of the {$coin.symbol} {$entry_payment.amount} fee. Once the full amount has one confirmation your account will be activated.
			  
        </div></blockquote>
