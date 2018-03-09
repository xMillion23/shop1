            <div class="col-row" id="delete-pgp">
            <blockquote class="blockquote text-center">
            

                <h2>Delete PGP Key</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="pgp/delete" attr=['class'=>'form-horizontal']}
                    Your PGP key can be used to protect your account with two-factor authentication, and for automatic encryption of private messages. Removing your PGP key will disable these features. Confirm that you wish to delete your key:

                    <hr/><div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="delete">Are you sure?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="0" checked /> No
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="1" /> Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="delete"}</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" value="Update" class="btn btn-primary" />
                                {url type="anchor" url="account" text="Cancel" attr='class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>

                </form>
            </div></blockquote>
