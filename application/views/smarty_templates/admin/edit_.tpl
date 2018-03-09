            <div class="col-row" id="edit_general">
            <blockquote class="blockquote text-center">
            <div class="col-row">
                {$nav}

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="admin/edit" attr='class="form-horizontal"'}
                    <fieldset>
                        <div class='form'>
                            <label class="control-label col-row" for="site_title">Site Status</label>
                            <div class='col-row'>
                                <label class='control-label'>
                                {if $config.maintenance_mode == TRUE}
                                    maintenance mode
                                {else}
                                    online
                                {/if}
                                    - {url type="anchor" url="admin/maintenance" text="Configure" attr=''}
                                </label>
                            </div>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row" for="site_title">Site Title</label>
                            <div class="col-row">
                                <input type="text" name="site_title" id="site_title" class="form-control text-center" value="{$config.site_title|escape:"html":"UTF-8"}" />
                            </div>
                            <div class='col-row'>{form method="form_error" field="site_title"}</div>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row" for="site_description">Site Description</label>
                            <div class='col-row'>
                                <div class="col-row">
                                    <input type="text" name="site_description" id="site_description" class='form-control text-center' value="{$config.site_description|escape:"html":"UTF-8"}" />
                                </div>
                            </div>
                            <div class='col-row'>{form method="form_error" field="site_description"}</div>
                        </div><hr/>

                        <div class="form">
                            <div class='col-row'></div>
                                <label class="control-label col-row" for="location_settings">Location Settings</label>
                                <div class="col-row">
                                <label class='control-label'>
                                    {url type="anchor" url="admin/locations" text="Configure" attr=''}
                                </label>
                            </div>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row" for="terms_of_service">Terms Of Service</label>
                            <div class="col-row">
                                <label class='control-label'>
                                    {url type="anchor" url="admin/tos" text="Configure" attr=''}
                                </label>
                            </div>
                        </div><hr/>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="allow_guests">Allow Guests to Browse?</label>
                                <div class="col-row">
                                    <label class="radio-inline">
                                        <input type='radio' name='allow_guests' value='0' {if $config.allow_guests == '0'}checked{/if} /> Disabled
                                    </label>

                                    <label class="radio-inline">
                                        <input type='radio' name='allow_guests' value='1' {if $config.allow_guests == '1'}checked{/if} /> Enabled
                                    </label>
                                </div>
                            </div>
                            <div class='col-row'>{form method="form_error" field="allow_guests"}</div>
                        </div><hr/>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="openssl_keysize">OpenSSL Keysize</label>
                                <div class="col-row">
                                    <select name="openssl_keysize" class="form-control">
                                        <option value='1024' {if $config.openssl_keysize == '1024'}selected="selected"{/if}>1024</option>
                                        <option value='2048' {if $config.openssl_keysize == '2048'}selected="selected"{/if}>2048</option>
                                        <option value='4096' {if $config.openssl_keysize == '4096'}selected="selected"{/if}>4096</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-row'>{form method="form_error" field="openssl_keysize"}</div>
                        </div><hr/>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="global_proxy">Global Proxy</label>
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Type</i></span>
                                        <select name="global_proxy_type" class="form-control">
                                            <option value=''></option>
                                            <option value='HTTP' {if $config.global_proxy_type == 'HTTP'}selected="selected"{/if}>HTTP</option>
                                            <option value='SOCKS5' {if $config.global_proxy_type == 'SOCKS5'}selected="selected"{/if}>SOCKS5</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>URL</i></span>
                                        <input type='text' name='global_proxy_url' class="form-control" value='{$config.global_proxy_url|escape:"html":"UTF-8"}' />
                                    </div>
                                </div>
                                <div class="col-row">
                                    <label class="radio-inline">
                                        <input type='checkbox' name='global_proxy_disabled' value='1' {if $config.global_proxy_type == 'Disabled'}checked{/if} /> Disabled
                                    </label>
                                </div>
                            </div>
                            <div class='col-row'><span class="help-inline">
                                    {if isset($proxy_error) == TRUE}{$proxy_error}{/if}
                                    {form method="form_error" field="global_proxy_type"} {form method="form_error" field="global_proxy_url"}
                            </span></div>
                        </div>

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' value='Update' class='btn btn-primary' />
                                    {url type="anchor" url="admin" text="Cancel" attr='class="btn btn-danger"'}
                                </p>
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div></div></blockquote>
