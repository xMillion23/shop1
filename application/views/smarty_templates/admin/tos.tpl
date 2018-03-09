            <div class="col-row" id="admin-tos-form">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <h2>{url type="anchor" url='admin' text='Back' attr='class="btn btn-danger"'} <br/>Terms Of Service</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <div class="form">
                    <div class="col-row">Here you can set whether a terms of service must be agreed to before
                        users can register an account. Once the setting is enabled, the terms of service
                        agreement can be edited.
                    </div>
                </div><hr/>

                {form method="open" action="admin/tos" attr='class="form-horizontal"'}
                    <div class="form">
                        <div class="col-row">
                            <label for="terms_of_service" class="control-label col-row">Terms of Service</label>
                            <div class="col-row"><textarea class="form-control" name="terms_of_service" id="terms_of_service" rows="7" >{$tos|escape:"html":"UTF-8"}</textarea></div>
                        </div>
                        <div class="col-row">
                            {form method="form_error" field="terms_of_service"}
                        </div>
                    </div>

                    <div class='form'>
                        <div class="col-roe">
                            <label for="terms_of_service_toggle" class="control-label col-row">Display TOS?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type="radio" id="terms_of_service_toggle" name="terms_of_service_toggle" value="0" {if $config.terms_of_service_toggle == FALSE}checked="checked"{/if} /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' id="terms_of_service_toggle" name='terms_of_service_toggle' value='1' {if $config.terms_of_service_toggle == TRUE}checked="checked"{/if}/> Enabled
                                </label>
                            </div>
                        </div>
                        <div class="col-row">
                            {form method="form_error" field="terms_of_service_toggle"}
                        </div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type='submit' name='tos_update' value='Update' class='btn btn-primary' />
                                {url type="anchor" url="admin/edit" text="Cancel" attr='class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>
                </form>
            </div></div></blockquote>
