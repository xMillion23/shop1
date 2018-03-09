            <div class="col-row">
                <blockquote class="blockquote text-center">
                
                <h2>Two Factor Authentication</h2><hr/>

                {assign var="defaultMessage" value="To activate two factor authentication, decrypt the following challenge and paste it in the box below:"}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="account/pgp_factor" attr=['class'=>'form-horizontal', 'name' => 'loginForm']}

                    <hr/><div class="form">
                        <div class="control-label col-row" for="challenge"></div>
                        <div class="col-row">
                            <textarea name="public_key" id="public_key" class="form-control text-center" rows="13" >
                            {$challenge}</textarea>
                        </div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="answer">Token</label>
                            <div class="col-row">
                                <input type="text" id='answer' class="form-control text-center" placeholder="Token" name='answer'/>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="answer"}</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                                <input type="submit" name="submit_pgp_token" class="btn btn-primary" value="Continue" />
                                {url type="anchor" url="account/two_factor" text="Cancel" attr='class="btn btn-danger"'}
                        </div>
                    </div>
                </form>
            </div></blockquote>
