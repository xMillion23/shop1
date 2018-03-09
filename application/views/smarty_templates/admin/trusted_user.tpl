                    <div class="col-row" id="admin-trusted-user">
                    <blockquote class="blockquote text-center">
                    <div class="col-row">
                <h3>{url type="anchor" url="admin/items" text="Back" attr='class="btn btn-danger"'}<br/>Trusted User Settings</h3><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                   <div class="col-row">
                    <p align='justify'>This form allows you to define what makes a 'trusted user'. This is used to determine if a vendor should be allowed to request up-front payment for particular items, or early finalization of escrow orders. </p><hr/>
                    <p align='justify'>To ignore a particular attribute simply set it to zero.</p><hr/>
                   </div><hr/>


                {form method="open" action="admin/trusted_user" attr='class="form-horizontal"'}
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="trusted_user_rating">Required rating:</label>
                            <div class="col-row">
                                <input type='text' class='form-control text-center' id='trusted_user_rating' name='trusted_user_rating' value="{$config.trusted_user_rating|escape:"html":"UTF-8"}" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="trusted_user_rating"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="review_count">Review count:</label>
                            <div class="col-row">
                                <input type='text' class='form-control text-center' id='review_count' name='trusted_user_review_count' value="{$config.trusted_user_review_count|escape:"html":"UTF-8"}" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field='trusted_user_review_count'}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="completed_orders">Minimum complete orders:</label>
                            <div class="col-row">
                                <input type='text' class='form-control text-center' id='completed_orders' name='trusted_user_order_count' value="{$config.trusted_user_order_count|escape:"html":"UTF-8"}" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field='trusted_user_order_count'}</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" name='trusted_user_update' value="Update" class="btn btn-primary" />
                                {url type="anchor" url="admin/items" text="Cancel" attr='class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>
                </form>
            </div></div></blockquote>
