            <div class="col-row" id="admin_edit_users">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                {$nav}

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="admin/edit/users" attr='class="form-horizontal"'}

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="login_timeout">Session Timeout</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' name='login_timeout' value='{$config.login_timeout|escape:"HTML":"UTF-8"}' placeholder="Minutes"/>
                                </div>
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="login_timeout"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="request_emails">Request Emails?</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <label class="radio-inline">
                                        <input type='radio' name='request_emails' value='0' {if $config.request_emails == '0'}checked{/if} /> Disabled
                                    </label>
                                    <label class="radio-inline">
                                        <input type='radio' name='request_emails' value='1' {if $config.request_emails == '1'}checked{/if} /> Enabled
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="login_timeout"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="captcha_length">Captcha Length</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' id='captcha_length' name='captcha_length' value='{$config.captcha_length|escape:"html":"UTF-8"}' placeholder="Characters"/>
                                </div>
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="captcha_length"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="registration_allowed">Registration Allowed?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='registration_allowed' value='0' {if $config.registration_allowed == '0'}checked{/if} /> Disabled
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='registration_allowed' value='1' {if $config.registration_allowed == '1'}checked{/if} /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="registration_allowed"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="vendor_registration_allowed">Vendor Registration Allowed?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='vendor_registration_allowed' value='0' {if $config.vendor_registration_allowed == '0'}checked{/if} /> Disabled
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='vendor_registration_allowed' value='1' {if $config.vendor_registration_allowed == '1'}checked{/if} /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="vendor_registration_allowed"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="entry_payment_vendor">Vendor Registration Fee</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' name='entry_payment_vendor' value='{if $config.entry_payment_vendor > 0}{$config.entry_payment_vendor|escape:"html":"UTF-8"}{/if}' placeholder="{$coin.code}"/>
                                </div>
                            </div>
                            <div class="col-row"><input type='checkbox' name='entry_payment_vendor_disabled'{if $config.entry_payment_vendor == 0} checked {/if} value="1"/> Disabled</div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="entry_payment_vendor"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="entry_payment_buyer">Buyer Registration Fee</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' name='entry_payment_buyer' value='{if $config.entry_payment_buyer > 0}{$config.entry_payment_buyer|escape:"html":"UTF-8"}{/if}' placeholder="{$coin.code}"/>
                                </div>
                            </div>
                            <div class="col-row"><input type='checkbox' name='entry_payment_buyer_disabled'{if $config.entry_payment_buyer == 0} checked {/if} value="1"/> Disabled</div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="entry_payment_buyer"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="encrypt_private_messages">Encrypt Private Messages?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='encrypt_private_messages' value='0' {if $config.encrypt_private_messages == '0'}checked{/if} /> Disabled
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='encrypt_private_messages' value='1' {if $config.encrypt_private_messages == '1'}checked{/if} /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="encrypt_private_messages"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="force_vendor_pgp">Force Vendor PGP?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='force_vendor_pgp' value='0' {if $config.force_vendor_pgp == '0'}checked{/if} /> Disabled
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='force_vendor_pgp' value='1' {if $config.force_vendor_pgp == '1'}checked{/if} /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="force_vendor_pgp"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' value='Update' class='btn btn-primary' />
                                    {url type="anchor" url="admin/users" text="Cancel" attr='class="btn btn-danger"'}
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div></div></blockquote>
