             <div class="col-row">
               <blockquote class="blockquote text-center">
               <h2>Register</h2><hr/>

                {assign var="defaultMessage" value="Enter your details to register an account: "}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}
                {form method="open" action="register" attr=['class'=>'form-horizontal', 'name' => 'registerForm']}

                    </div><fieldset>

                            <div class="form">
                            <div class="col-row">
                            <h5><label class="control-label col-row" for="user_name">Username</label></h5>
                            <div class="col-row">
                                <input type='text' class="form-control text-center" id="user_name" placeholder="Your desired username" name='user_name' value="{form method="set_value" field="user_name"}" size='12' />
                            </div>
                            </div>
                            <div class="col-row"><div class="text-warning">{form method="form_error" field="user_name"}</div></div>
                        </div><br/>

                        {if $request_emails == TRUE}
                            <div class="form">
                                <div class="col-row">
                                    <h5><label class="control-label col-row" for="email_address">Email Address</label></h5>
                                    <div class="col-row">
                                        <input type='email_address' class="form-control" id="email_address" name='email_address' value='' autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-row"><div class="text-warning">{form method="form_error" field="email_address"}</div></div>
                            </div><br/>
                        {/if}

                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="password0">Password</label></h5>
                                <div class="col-row">
                                    <input type='password' class="form-control text-center" id="password0" placeholder="Password" name='password0' value='' autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-row"><div class="text-warning">{form method="form_error" field="password0"}</div></div>
                        </div><br/>

                        <div class="form">
                            <div class="col-row">
                            <h5><label class="control-label col-row" for="password1">Password</label></h5>
                            <div class="col-row">
                                <input type='password' class="form-control text-center" id="password1" placeholder="Confirm password" name='password1' value='' autocomplete="off" />
                            </div>
                            </div>
                            <div class="col-row"><div class="text-warning">{form method="form_error" field="password1"}</div></div>
                        </div><br/>

{if isset($token_info) && is_array($token_info) }
                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="user_type">Role</label></h5>
                                <div class="col-row">
                                    <label class='control-label'>{$token_info.user_type.txt}</label>
                                    <input type='hidden' id="user_type" name='user_type' value='{$token_info.user_type.int}' />
                                </div>
                            </div>
                        </div><br/>
{else}
                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="user_type">Role</label></h5>
                                <div class="col-row">
                                    <select name='user_type' id="user_type" class="form-control">
                                        <option value=''></option>
                                        <option value='1'>Buyer</option>
                                        {if $vendor_registration_allowed == TRUE}<option value='2'>Vendor</option>{/if}
                                    </select>
                                </div>
                            </div>
                            <div class="col-row">
                                <div class="text-warning">{form method="form_error" field="user_type"}
                            </div></div>
        				</div><br/>
{/if}
                        {if $vendor_registration_allowed == TRUE AND $force_vendor_pgp == TRUE}
                        <div class="form">
                            <label class="control-label col-row" for="force_pgp_warning"></label>
                            <div class="col-row">
                                If you are registering as a vendor, it is required you upload a PGP public key. Please have one ready on your first login.
                            </div>
                        </div><br/>
                        {/if}

                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="location">Location</label></h5>
                                <div class="col-row">{$locations_select}</div>
                            </div>
                            <div class="col-row">
                                <div class="text-warning">{form method="form_error" field="location"}
                            </div></div>
                        </div><br/>
                
                        <div class="form">
                            <div class="col-row">
                               <h5><label class="control-label col-row" for="local_currency">Local Currency</label></h5>
                                <div class="col-row">
                                    <select name='local_currency' class="form-control">
                                        {foreach from=$currencies item=currency}
                                            <option value='{$currency.id}'{if $currency.id == '0'} selected="selected"{/if}>{$currency.name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="col-row"><div class="text-warning">{form method="form_error" field="local_currency"}</div></div>
                        </div><br/>

                        {if is_string($terms_of_service) == TRUE}
                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="terms_of_service">Terms of Service</label></h5>
                                <div class="col-row">
                                    <textarea class='form-control text-center' cols='6' rows='7' readonly>{$terms_of_service|escape:'html':'UTF-8'}</textarea>
                                    <br/>
                                    <input type='checkbox' name='tos_agree' value='1' /> Click to agree to the terms of service.
                                </div>
                            </div>
                        </div><br/>
                        {/if}

                        <!-- Captcha -->
                        <div class="form">
                            <div class="col-row">
                            <h5><label class="control-label col-row" for="captcha_img">Captcha</label></h5>
                            <div class="col-row">
                                <p align="center">
                                    {$captcha}
                                </p>
                            </div>
                        </div></div>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="captcha"></label>
                                <div class="col-row">
                                    <input type="text" class="form-control text-center" id="captcha" placeholder="Please verify that you are human" name="captcha" />
                                </div>
                            </div>
                            <div class="col-row"><div class="text-warning">{form method="form_error" field="captcha"}</div></div>
                        </div>
                        <!-- /Captcha -->

			            <noscript><div style="display:none"><input type='hidden' name='js_disabled' value='1' /></div></noscript>

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' name='register_user' class="btn btn-primary" value="Register" />
                                    {url type="anchor" url="login" text="Cancel" attr='title="Cancel" class="btn btn-danger"'}
                                </p>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div></blockquote>
