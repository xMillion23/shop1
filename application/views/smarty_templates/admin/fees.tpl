            <div class="col-row" id="admin_fees_panel">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <h2>{url type="anchor" url="admin/items" text="Back" attr='class="btn btn-danger"'}<br/>Fees Configuration</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="admin/items/fees" attr='class="form-horizontal"'}
                    <h3>Basic Settings</h3><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="minimum_fee">Minimum Fee:</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i>{$coin.symbol}</i></span>
                                    <input type="text" name="minimum_fee" id="minimum_fee" class="form-control text-center" value="{$config.minimum_fee}" placeholder="{$coin.code}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="minimum_fee"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="default_rate">Default Rate</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i>%</i></span>
                                    <input type="text" class="form-control text-center" name="default_rate" id="default_rate" value='{$config.default_rate|escape:"html":"UTF-8"}' placeholder="%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="default_rate"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="escrow_rate">Escrow Rate</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i>%</i></span>
                                    <input type='text' class="form-control text-center" name='escrow_rate' id="escrow_rate" value='{$config.escrow_rate|escape:"html":"UTF-8"}' placeholder="%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="escrow_rate"}</div>
                    </div><hr/>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" name="update_config" value="Update" class="btn btn-primary" />
                                {url type="anchor" url="admin/items" text="Cancel" attr='title="Cancel" class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>
                </form><hr/>

                <h3>Fee Ranges</h3>
                {if $fees == TRUE}
                    <div class="col-row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Lower Limit</th>
                                <th>Upper Limit</th>
                                <th>% Rate</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach from=$fees item=fee}
                                {form method="open" action='admin/items/fees'}
                                <tr>
                                    <td>{$fee.low|escape:"html":"UTF-8"}</td>
                                    <td>{$fee.high|escape:"html":"UTF-8"}</td>
                                    <td>{$fee.rate|escape:"html":"UTF-8"}</td>
                                    <td><input type="submit" class="form-control btn btn-danger" name="delete_rate[{$fee.id}]" value="Delete"  /></td>
                                </tr>
                                </form>
                            {/foreach}
                            </tbody>
                        </table>
                    </div><hr/>
                {/if}

                {form method="open" action="admin/items/fees" attr='class="form-horizontal"'}
                    <h4>Create Fee Range:</h4>

                    <div class="form">
                        <label class="control-label col-row" for="lower_limit">Lower Limit:</label>
                        <div class="col-row">
                            <div class="input-group">
                                <span class="input-group-addon"><i>{$coin.symbol}</i></span>
                                <input type="text" name="lower_limit" id="lower_limit" class="form-control text-center" value="" placeholder="{$coin.code}"/>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="lower_limit"}</div>
                    </div><hr/>

                    <div class="form">
                        <label class="control-label col-row" for="upper_limit">Upper Limit</label>
                        <div class="col-row">
                            <div class="input-group">
                                <span class="input-group-addon"><i>{$coin.symbol}</i></span>
                                <input type="text" class="form-control text-center" name="upper_limit" id="upper_limit" value='' placeholder="{$coin.code}"/>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="upper_limit"}</div>
                    </div><hr/>

                    <div class="form">
                        <label class="control-label col-row" for="percentage_fee">% Fee</label>
                        <div class="col-row">
                            <div class="input-group">
                                <span class="input-group-addon"><i>%</i></span>
                                <input type='text' class="form-control text-center" name='percentage_fee' id="percentage_fee" value='' placeholder="%"/>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="percentage_fee"}</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type='submit' name='create_fee' value='Add' class='btn btn-primary' />
                            </p>
                        </div>
                    </div>
                </form>

            </div></div></blockquote>
