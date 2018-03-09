                <div class="col-row" id="admin-panel">
                <blockquote class="blockquote text-center">
                <div class="col-row">
                {$nav}

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <div class="form">
                    <label class="control-label col-row" for="status">Site Status</label>
                    <div class="col-row">
                        <strong>
                            {if $config.maintenance_mode == TRUE}
                                maintenance mode
                            {else}
                                online
                            {/if}
                        </strong>
                    </div>
                </div><hr/>

                <div class='form'>
                    <label class="control-label col-row" for="site_title">Site Title</label>
                    <div class='col-row'>{$config.site_title|escape:"html":"UTF-8"}</div>
                </div><hr/>

                <div class="form">
                    <label class="control-label col-row" for="site_description">Site Description</label>
                    <div class="col-row">{$config.site_description|escape:"html":"UTF-8"}</div>
                </div><hr/>

                <div class="form">
                    <label class="control-label col-row" for="location_list_source">Location List</label>
                    <div class="col-row">{$config.location_list_source|escape:"html":"UTF-8"}</div>
                </div><hr/>

                <div class="form">
                    <label class="control-label col-row" for="terms_of_service_toggle">Terms Of Service</label>
                    <div class="col-row">{if $config.terms_of_service_toggle == TRUE}Enabled{else}Disabled{/if}</div>
                </div><hr/>

                <div class='form'>
                    <label class="control-label col-row" for="allow_guests">Allow Guests to Browser?</label>
                    <div class='col-row'>{if $config.allow_guests == TRUE}Enabled{else}Disabled{/if}</div>
                </div><hr/>

                {if isset($gpg) == TRUE}
                <div class="form">
                    <label class="control-label col-row" for="gpg">GnuPG Version</label>
                    <div class="col-row">{$gpg}</div>
                </div><hr/>
                {/if}

                {if $encrypt_private_messages == TRUE}
                <div class="form">
                    <label class="control-label col-row" for="openssl_version">OpenSSL Version</label>
                    <div class="col-row">{$openssl}</div>
                </div><hr/>

                <div class="form">
                    <label class="control-label col-row" for="openssl_keysize">OpenSSL Keysize</label>
                    <div class="col-row">{$config.openssl_keysize|escape:"html"}</div>
                </div>
                {/if}

                <div class="form">
                    <label class="control-label col-row" for="global_proxy">Global Proxy</label>
                    <div class="col-row">
                        {if $config.global_proxy_type == 'Disabled'}
                            Disabled
                        {else}
                            ({$config.global_proxy_type|escape:"html":"UTF-8"}) {$config.global_proxy_url|escape:"html":"UTF-8"}
                        {/if}
                    </div>
                </div>

            </div></div></blockquote>
