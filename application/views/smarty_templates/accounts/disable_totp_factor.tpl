            <div class="col-row">
            <blockquote class="blockquote text-center">
            <h2>Two Factor Authentication</h2><hr/>

                {assign var="defaultMessage" value="To disable two factor authentication, enter the token as displayed on your app:"}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="account/disable_2fa" attr=['class'=>'form-horizontal']}
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="totp_token">Token</label>
                            <div class="col-row">
                                <input type="text" name="totp_token" class="form-control" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="totp_token"}</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" class="btn btn-primary" name="disable_totp" value="Continue" />
                                {url type="anchor" url="account/two_factor" text="Cancel" attr='class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>

                </form>
		    </div></blockquote>
