            <div class="col-row" id="edit-bitcoin">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                {$nav}

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="admin/edit/bitcoin" attr='class="form-horizontal"'}

                    <div class="form">
                        <div class="col-row">
                            <div class="control-label col-row" for="price_index">Use A {$coin.name} Price Index?</div>
                            <div class="col-row">
                                <select name='price_index' class="form-control" autocomplete="off">
                                    {foreach from=$config.price_index_config key=key item=index_config}
                                        <option value='{$key}' {if $key == $config['price_index']}selected="selected"{/if}>{$key|escape:"html":"UTF-8"}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="price_index"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="bip32_mpk">BIP32 Extended Key</label>
                            <div class="col-row">
                                <input type='text' name='bip32_mpk' class="form-control" value='{$config.bip32_mpk|escape:"html":"UTF-8"}' />
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="bip32_mpk"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="bip32_iteration">Address Index</label>
                            <div class="col-row">
                                <input type='text' name='bip32_iteration' class="form-control text-center" value="{$config.bip32_iteration|escape:"html":"UTF-8"}" />
                            </div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="bip32_iteration"}</div>
                        <div class="col-row text-warning">Only change this if you know what you're doing!</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type='submit' name='submit_edit_bitcoin' value='Update' class='btn btn-primary' />
                                {url type="anchor" url="admin/bitcoin" text="Cancel" attr='class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>
                </form>
            </div></div></blockquote>
