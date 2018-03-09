            <div class="col-row">
                <blockquote class="blockquote text-center">
                <h2>Two Factor Authentication</h2><hr/>   

                <div class="card bg-light card-body mb-3">
                    {assign var="defaultMessage" value=""}
                    {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                    <div class='form'>
                        <div class='col-row'><strong>Current Setting</strong></div>
                        <div class='col-row'><u>{if $two_factor_setting == TRUE}Enabled{else}Disabled{/if}</u></div>
                    </div>
                    <hr/>

                    <div class='form'>
                        <div class='col-row'>
                            <div class='col-row'>
                                <strong>Time-based Two Factor Tokens</strong>

                                {if $two_factor.totp == TRUE}
                                <div class="col-row">
                                    You are currently using time based two-factor tokens to authorize logins.<br />
                                    {url type="anchor" url="account/disable_2fa" text="Click here to disable this!" attr='class="btn btn-danger"'}
                                </div>
                                {else}

                                {form method="open" action="account/two_factor" attr=['class'=>'form-horizontal','name' => 'totp_form']}
                                    <div class='form'>
                                        <p>Time-based two factor authentication restricts access to your account by asking you for a token from your Authenticator app on each sign-in. Follow these two steps to get set up:</p>
                                        <p>1 - Scan the QR code to import it your app. Write down the secret key in case you lose your device.</p>
                                        <div class='col-row'><img src='data:image/png;base64,{$qr}'></div>
                                        <br><div class='col-row'>Secret Key: {$secret}</div>
                                        <br><p>2 - Enter the generated token and your password to confirm:</p>
                                    </div>

                                    <div class="form">
                                        <div class="col-row">
                                            <label class="control-label col-row" for="password"></label>
                                            <div class="col-row">
                                                <input type='password' id='password' class="form-control text-center" name='password' placeholder="Password" />
                                            </div>
                                        </div>
                                        <div class="col-row text-warning">{form method="form_error" field="password"}</div>
                                    </div>

                                    <div class="form">
                                        <div class="col-row">
                                            <label class="control-label col-row" for="token"></label>
                                            <div class="col-row">
                                                <input type='text' class="form-control text-center" name='totp_token' value='' placeholder="Token" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-row text-warning">{form method="form_error" field="totp_token"}</div>
                                    </div>

                                    <div class="form">
                                        <label class="control-label col-row" for="submit"></label>
                                        <div class="col-row">
                                                <input type='submit' class='btn btn-primary' name='submit_totp_token' value='Setup' />
                                        </div>
                                    </div>
                                </form>
                                {/if}
                            </div>
                        </div>

                        <br><div class='col-row'>
                            <div class='col-row'>
                                {if isset($two_factor.pgp) == TRUE}
                                <strong>PGP Two Factor Authentication</strong>

                                <div class='form'>
                                    {if $two_factor.pgp == TRUE}
                                        You are currently using PGP two-factor challences to authorize logins. <br />
                                        {url type="anchor" url="account/disable_2fa" text="Click here to disable this!" attr='class="btn btn-danger"'}
                                    {else}
                                        <div class='col-row'>PGP-based two factor challenges ensure that your account can only be accessed by someone able to decrypt messages encrypted with your PGP public key.</div>
                                        <br/><div class='col-row'>{url type="anchor" url="account/pgp_factor" text="Setup" attr='class="btn btn-primary"'}</div>
                                    {/if}
                                </div>
                                {else}
                                <i>Add a PGP key to enable PGP two factor authentication!</i>
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
            </div></blockquote>
