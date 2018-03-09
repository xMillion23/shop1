            <div class="col-row">
            <blockquote class="blockquote text-center">
            
                <h2>Disable Two Factor Authentication</h2><hr/>

                {assign var="defaultMessage" value="Decrypt the following PGP message to remove two factor challenge on login:"}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="account/disable_2fa" attr=['class'=>'form-horizontal']}

                    <hr/><div class="form">
                        <label class="control-label col-row" for="challenge"></label>
                        <div class="col-row">
                            <div class="form"><textarea class="form-control text-center" rows="13">{$challenge}</textarea></div>
                        </div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="answer">Token</label>
                            <div class="col-row">
                                <input type="text" id="answer" class="form-control text-center" placeholder="Token" name="answer" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="answer"}</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" class="btn btn-primary" name="disable_pgp" value="Continue" />
                                {url type="anchor" url="account/two_factor" text="Cancel" attr='class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>

                </form>
    		</div></blockquote>
