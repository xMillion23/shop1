          <div class="col-row">
            <blockquote class="blockquote text-center">
				<h2>Two Factor Authentication</h2><hr/>

                {assign var="defaultMessage" value="Decrypt the following PGP text and enter it below: "}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="login/pgp_factor" attr=['class'=>'form-horizontal', 'name' => 'pgp_factor']}
                    <hr/><fieldset>
                        <div class="form">
                            <div class="control-label col-row" for="challenge"></div>
                            <div class="col-row">
                                <div class="form"><textarea class="form-control text-center" rows="13">{$challenge}</textarea></div>
                            </div>
                        </div><hr/>

					    <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="answer">Token</label>
                                <div class="col-row">
                                    <input type="text" id="answer" class="form-control text-center" placeholder="Token" name='answer' size='12'/>
                                </div>
                            </div>
                            <div class="col-row"><div class="text-warning">{form method="form_error" field="answer"}</div></div>
                        


                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                    <input type="submit" class="btn btn-primary "name="submit_pgp_token" value="Continue" />
                                    {url type="anchor" url="logout" text="Cancel" attr='title="Cancel" class="btn btn-danger"'}
                            </div>
                        </div>

				    </fieldset>
				</form>
			</div></blockquote>
