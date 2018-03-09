            <div class="col-row" id="vendor_public_keys">    
            <blockquote class="blockquote text-center">
            
            <h2>{$coin.name} Payout Address</h2><hr/>

            {assign var="defaultMessage" value=""}
            {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

            <p>Your payout address is where funds should be sent when they are ready to be moved from the order address. Be sure to double check before you set this!</p>

            {if is_array($address) == TRUE}
                <hr/><p>Your earnings are being sent to <a class="text-primary">{$address.address|escape:"html":"UTF-8"}</a> (as of {$address.time_f})</p>
            {/if}

            {form method="open" action="accounts/payout" attr=['class'=>'form-horizontal']}
            <hr/>
                <div class='form'>
                    <div class="col-row">
                        <label for="address" class="control-label col-row">{$coin.name} Address</label>
                        <div class="col-row">
                            <input type='text' class="form-control text-center" placeholder="Payout Address" name='address' value='' />
                        </div>
                    </div>
                    <div class="col-row text-warning">
                        {form method="form_error" field="address"}
                    </div>
                </div><br/>

                <div class='form'>
                    <div class="col-row">
                        <label for="address" class="control-label col-row">Password</label>
                        <div class="col-row">
                            <input type='password' class="form-control text-center" placeholder="Password" name='password' value='' />
                        </div>
                    </div>
                    <div class="col-row text-warning">
                         {form method="form_error" field="password"}
                    </div>
                </div>

                <div class="form">
                    <label class="control-label col-row" for="submit"></label>
                    <div class="col-row">
                        <p align="center">
                            <input type='submit' name='submit_payout_address' value='Submit' class='btn btn-primary' />
                            {url type="anchor" url="account" text="Cancel" attr='class="btn btn-danger"'}
                        </p>
                    </div>
                </div>
            </form>

        </div></blockquote>
