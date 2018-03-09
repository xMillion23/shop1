            <div class="col-row">
            {capture name='t_profile_url'}user/{$user.user_hash}{/capture}

            <blockquote class="blockquote text-center">
            <div class="col-row" id="own-account"><div class="col-row">
                     <h2>{$user.user_name|escape}
                           <br/> <hr/>
                               {url type="anchor" url="account/edit" text="Edit Account" attr='class="btn btn-default"'}
                               {if $request_emails == TRUE}
                                   {if $user.email_address == NULL}
                                       {url type="anchor" url="accounts/email" text="Set Email" attr='class="btn btn-default"'}
                                   {else}
                                       {url type="anchor" url="accounts/email" text="Update Email" attr='class="btn btn-default"'}
                                   {/if}
                               {/if}<br/>
                               {url type="anchor" url="accounts/password" text="Change Password" attr='class="btn btn-default"'}
                           
                       <hr/></h2>
                    </div>
                </div>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}
                <div class="col-row">
                    <div class="col-row"><strong>Profile URL</strong></div>
                    <div class="col-row"><div style="word-wrap: break-word;">{url type="anchor" url=$smarty.capture.t_profile_url text="" attr='class="text text-primary"'}</div>
                </div></div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Location</strong></div>
                    <div class="col-row">{$user.location_f}</div>
                </div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Local Currency</strong></div>
                    <div class="col-row">{$user.currency.name} ({$user.currency.symbol})</div>
                </div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Display Login Activity?</strong></div>
                    <div class="col-row">{if $user.display_login_time == '1'}Enabled{else}Disabled{/if}</div>
                </div>

                <hr/>
                <legend>Private Settings </legend>
                {if $request_emails == TRUE}
                <div class="row">
                    <div class="col-row"><strong>Email Address</strong></div>
                    <div class="col-row">{if $user.email_address == ''}none{else}{$user.email_address|escape:"html":"UTF-8"}{/if}</div>
                </div>

                <div class="row">
                    <div class="col-row"><strong>Forward messages to email?</strong></div>
                    <div class="col-row">{if $user.email_updates == TRUE AND (($user.email_address == '')==FALSE) }Enabled{else}Disabled{/if}</div>
                </div>
                {/if}

                {if $user.user_role !== 'Admin'}

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Monero Public Keys</strong></div>
                    <div class="col-row">
                        {if $bip32 == FALSE}Not set up - {url type="anchor" url="bip32" text="Do so now!" attr=""}
                        {else}Provider: {$bip32.provider} - {url type="anchor" url="bip32" text="Settings" attr=""}
                        {/if}
                    </div>
                </div>

                <div class"col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>{if $user.user_role == 'Vendor'}Payout{else}Refund{/if} Address</strong></div>
                    <div class="col-row"><div style="word-wrap: break-word;">
                        {if is_array($payout)}
                            {$payout.address|escape:"html":"UTF-8"} - {url type="anchor" url="accounts/payout" text="Settings" attr=''}
                        {else}
                            Not set up - {url type="anchor" url="accounts/payout" text="Do so now!" attr=''}
                        {/if}
                    </div></div>
                </div>
                {/if}

                <hr/>
                <legend>Security</legend>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Two Factor Authentication</strong></div>
                    <div class="col-row">
                        {if $two_factor_setting == TRUE}
                            {if $two_factor.totp == TRUE}
                                Enabled (Mobile App)
                            {else}
                                Enabled (PGP)
                            {/if}
                        {else}
                            Disabled
                        {/if}

                        {url type="anchor" url="account/two_factor" text="Configure" attr=""}
                    </div>
                </div>


                {if isset($user.pgp.public_key) == TRUE}

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>PGP Fingerprint</strong></div>
                    <div style="word-wrap: break-word;">
                    <div class="col-row">{substr($user.pgp.fingerprint, 0, -8)}<b>{substr($user.pgp.fingerprint,-8)}</b></div></div>
                </div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Force PGP Messages?</strong></div>
                    <div class="col-row">{if $user.force_pgp_messages == '1'}Enabled{else}Disabled{/if}</div>
                </div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Block non-PGP messages?</strong></div>
                    <div class="col-row">{if $user.block_non_pgp == '1'}Enabled{else}Disabled{/if}</div>
                </div>
                {else}

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>PGP Features</strong></div>
                    <div class="col-row">{url type="anchor" url="pgp/add" text="Add a PGP key" attr=""} to enable features such as two-factor authentication, or automatic encryption of messages.</div>
                </div>
                {/if}

           </div></blockquote>
