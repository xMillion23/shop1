            <div class="col-row" id="add-public-key">
                <blockquote class="blockquote text-center">
                
                <h2>Add PGP Public Key</h2><hr/>

                {assign var="defaultMessage" value=""}
                <div class="text-warning">{returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}</div>

                {form method="open" action="pgp/add" attr='class="form-horizontal"'}
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="public_key">Public Key</label>
                            <div class="form">
                                <textarea name="public_key" id="public_key" class="form-control text-center" rows="13" ></textarea>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method='form_error' field='public_key'}</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                                <input type="submit" value="Submit" class="btn btn-primary" />
                                {url type="anchor" url="account" text="Cancel" attr='title="Cancel" class="btn btn-danger"'}
                        </div>
                    </div>

                </form>
            </div></blockquote>
