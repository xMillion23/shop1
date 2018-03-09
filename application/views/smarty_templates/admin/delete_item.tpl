            {capture name="t_delete_url"}admin/delete_item/{$item.hash}{/capture}
            {capture name="t_cancel_url"}item/{$item.hash}{/capture}
            <div class="col-row" id="admin_delete_item">
            <blockquote class="blockquote text-center">

                <h2>Remove Item: {$item.name|escape:"html":"UTF-8"}</h2>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action=$smarty.capture.t_delete_url attr='class="form-horizontal"'}

                    <p>Complete the following form to inform {$item.vendor.user_name|escape:"html":"UTF-8"} why this listing is going to be removed.</p>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="reason_for_removal">Reason for Removal</label>
                            <div class="col-row">
                                <textarea name="reason_for_removal" id="reason_for_removal" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-row text-warning">
                            {form method='form_error' field='reason_for_removal'}
                        </div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <button type='submit' class="btn btn-primary">Remove</button>
                                    {url type="anchor" url=$smarty.capture.t_cancel_url text="Cancel" attr='class="btn btn-danger"'}
                                </p>
                            </div>
                        </div>
                    </div>

                </form>
            </div></blockquote>
