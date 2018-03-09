            <div class="col-row" id="edit-account">
                <blockquote class="blockquote text-center">
                
                <h2>Edit Account</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="account/edit" attr=['class'=>'form-horizontal']}
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="location">Location</label>
                            <div class="col-row">
                                {$location_select}
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="location"}</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="local_currency">Local Currency</label>
                            <div class="col-row">
                                <select name="local_currency" class="form-control" id="local_currency" >
                                {foreach from=$currencies item=currency}
                                    <option value="{$currency.id}"{if $currency.id == $user.local_currency} selected="selected"{/if} >{$currency.name} ({$currency.symbol})</option>
                                {/foreach}
                                </select>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="local_currency"}</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="display_login_time">Display login activity?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' class="radio" name='display_login_time' value='0' {if $user.display_login_time == '0'}checked{/if} /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' class="radio" name='display_login_time' value='1' {if $user.display_login_time == '1'}checked{/if} /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="display_login_time"}</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="email_updates">Forward messages to email?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' class="radio" name='email_updates' value='0' {if $user.email_updates == '0'}checked{/if} /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' class="radio" name='email_updates' value='1' {if $user.email_updates == '1'}checked{/if} /> Enabled
                                </label>
                            </div>
                        </div>
                    </div>

                    {if isset($user.pgp) == TRUE}
                    <div class="form">
                        <label class="control-label col-row" for="pgp_key">PGP Fingerprint</label>
                        <div class="col-row">
                            <label class="control-label col-row">{$user.pgp.fingerprint}</label>
                        </div>
                        <div class="col-row">
                            {if $option_replace_pgp == TRUE}
                                {url type="anchor" url="pgp/replace" text="Replace" attr='class="btn btn-danger"'}
                            {else}
                                {url type="anchor" url="pgp/delete" text="Delete" attr='class="btn btn-danger"'}
                            {/if}
                        </div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="force_pgp_messages">Force PGP Messages</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='force_pgp_messages' value='0' {if $user.force_pgp_messages == '0'}checked{/if} /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' name='force_pgp_messages' value='1' {if $user.force_pgp_messages == '1'}checked{/if} /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="force_pgp_messages"}</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="block_non_pgp">Block non-PGP Messages</label>
                            <div class="col-row">

                                <label class="radio-inline">
                                    <input type='radio' name='block_non_pgp' value='0' {if $user.block_non_pgp == '0'}checked{/if} /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' name='block_non_pgp' value='1' {if $user.block_non_pgp == '1'}checked{/if} /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="block_non_pgp"}</div>
                    </div>
                    {else}
                    <h5><div class="form">
                      <div class="col-row">
                        <label class="control-label col-row" for="pgp">PGP Features</label>
                        <div class="col-row">
                            {url type="anchor" url="pgp/add" text="Add a PGP key" attr=''} to enable features such as two-factor authentication, or automatic encryption of messages.
                        </div>
                    </div>
                </div><h5/>
                    {/if}

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type='submit' value='Update' class='btn btn-primary' />
                                {url type="anchor" url="account" text="Cancel" attr='class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>

                </form>
            </div></blockquote>
