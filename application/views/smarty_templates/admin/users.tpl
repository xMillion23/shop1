            <div class="col-row" id="admin-users-panel">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                {$nav}

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <div class="form">
                    <div class="col-row"><strong>User Count</strong></div>
                    <div class="col-row">{$user_count} ({url type="anchor" url="admin/users/list" text="User list" attr=''})</div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Request Emails</strong></div>
                    <div class="col-row">{if $config.request_emails == TRUE}Enabled{else}Disabled{/if}</div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Session Timeout</strong></div>
                    <div class='col-row'>{$config.login_timeout|escape:"html":"UTF-8"} minutes</div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Captcha Length</strong></div>
                    <div class='col-row'>{$config.captcha_length|escape:"html":"UTF-8"} characters</div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Registration Allowed?</strong></div>
                    <div class='col-row'>
                        {if $config.registration_allowed == TRUE}
                            Enabled
                        {else}
                            Disabled
                        {/if}
                    </div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Vendor Registration Allowed?</strong></div>
                    <div class='col-row'>
                        {if $config.vendor_registration_allowed == TRUE}
                            Enabled
                        {else}
                            Disabled
                        {/if}
                    </div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Vendor Registration Fee:</strong></div>
                    <div class="col-row">
                        {if $config.entry_payment_vendor > 0}
                            {$coin.symbol} {$config.entry_payment_vendor|escape:"html":"UTF-8"}
                        {else}
                            Not Required
                        {/if}
                    </div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Buyer Registration Fee:</strong></div>
                    <div class="col-row">
                        {if $config.entry_payment_buyer > 0}
                            {$coin.symbol} {$config.entry_payment_buyer|escape:"html":"UTF-8"}
                        {else}
                            Not Required
                        {/if}
                    </div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Registration Tokens</strong></div>
                    <div class="col-row">{url type="anchor" url="admin/user_tokens" text="Manage" attr=''}</div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Encrypted PM's</strong></div>
                    <div class='col-row'>
                        {if $config.encrypt_private_messages == TRUE}
                            Enabled
                        {else}
                            Disabled
                        {/if}
                    </div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Force Vendor PGP?</strong></div>
                    <div class='col-row'>
                        {if $config.force_vendor_pgp == TRUE}
                            Enabled
                        {else}
                            Disabled
                        {/if}
                    </div>
                </div>
            </div></div></blockquote>
