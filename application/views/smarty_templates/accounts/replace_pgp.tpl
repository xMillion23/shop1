            <div class="col-row" id="replace-pgp">
            <blockquote class="blockquote text-center">
            <h2>Replace PGP key</h2><hr/>

                {assign var="defaultMessage" value="Enter your replacement PGP key below. "}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="pgp/replace" attr=['class'=>'form-horizontal']}
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="public_key">Public Key</label>
                            <div class="col-row">
                                <textarea name='public_key' id='public_key' rows='13' class='form-control'></textarea>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="public_key"}</div>
                    </div>

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
