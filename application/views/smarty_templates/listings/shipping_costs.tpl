        {capture name='t_form_action'}listings/shipping/{$item.hash}{/capture}
        {capture name='t_form_cancel'}listings/edit/{$item.hash}{/capture}
        {capture name='t_alter_form_errors'}{form method="validation_errors"}{/capture}

                <div class="container-fluid" id="manage_items">
                <blockquote class="blockquote text-center">
            <div class="col-row">
                            <h2>Shipping Costs: {$item.name|escape:"html":"UTF-8"}</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {if $shipping_costs == TRUE}
                {form method="open" action=$smarty.capture.t_form_action attr=['class'=>'form-horizontal']}
                    <div class='container'>
                        <div class="card bg-light card-body form">

                            {if strlen($smarty.capture.t_alter_form_errors) > 0}
                            <div class="alert alert-danger">{$smarty.capture.t_alter_form_errors}</div>
                            {/if}
                            <h4>Review Shipping Costs</h4><hr/>

                            <div class='form'>
                            <div class='col-row'><label class="control-label col-row" for="title_dest">Destination cost offered:</label></div>
                            </div>
                            {foreach from=$shipping_costs item=cost}
                                {capture name="t_cost_field"}cost[{$cost.id}][cost]{/capture}
                                {capture name="t_enabled_field"}cost[{$cost.id}][enabled]{/capture}
                                <div class="form">
                                    <div class="col-row">
                                        <div class='col-row'><label class="control-label col-row" for="add_price">{$cost.destination_f}</label></div>
                                        <div class="col-row">
                                            <div class="input-group">
                                                <input type="text" class='form-control text-center' name="{$smarty.capture.t_cost_field}" value="0.0001" placeholder="{$item.currency.code}"/>
                                            </div>
                                        </div>
                                        <div class="col-row"><input type="checkbox" name="{$smarty.capture.t_enabled_field}" value="1" {if $cost.enabled == '1'}checked{/if} /></div>
                                    </div><hr/>
                                    <div class="col-row text-warning">
                                        {form method="form_error" field=$smarty.capture.t_cost_field}
                                        {form method="form_error" field=$smarty.capture.t_enabled_field}
                                    </div>
                                </div>

                            {/foreach}

                            <div class="form">
                                <label class="control-label col-row" for="submit"></label>
                                <div class="col-row">
                                    <p align="center">
                                        <input type='submit' name='update_shipping_cost' value='Update' class='btn btn-primary' />
                                        {url type="anchor" url="listings" text="Cancel" attr='title="Cancel" class="btn btn-danger"'}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                {/if}

                {form method="open" action=$smarty.capture.t_form_action attr=['class'=>'form-horizontal']}
                <hr/><div class='container'>
                        <div class="card bg-light card-body form">
                        <h4>New Shipping Cost</h4>
                        <hr/>

                        <div class="form">
                            <label class="control-label col-row" for="add_location">Destination</label>
                            <div class="col-row">
                                {$locations}
                            </div>
                            <span class="help-inline text-warning">{form method="form_error" field="add_location"}</span>
                        </div><br/>

                        <div class="form">
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' name='add_price' class="form-control text-center" id="add_price" placeholder="{$item.currency.code}"/>
                                </div>
                            </div>
                            <span class="help-inline text-warning">{form method="form_error" field="add_price"}</span>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' name='add_shipping_cost' value='Add' class='btn btn-primary' />
                                    {url type="anchor" url=$smarty.capture.t_form_cancel text="Cancel" attr='class="btn btn-danger"'}
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
        </div></blockquote>

