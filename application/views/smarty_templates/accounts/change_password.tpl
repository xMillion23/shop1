            <div class="col-row" id="add-public-key">
            <blockquote class="blockquote text-center">
            
                <h2>Change Password</h2><hr/>
                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <p align="justify">You should always set a strong, unique passphrase for each website. Passphrases should be memorable sentences that only you could know - make it funny, make it rhyme, but ultimately it should be extremely hard for anyone to guess.</p><hr/>

                {form method="open" action="accounts/password" attr='class="form-horizontal"'}
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="new_password0">New Password</label>
                            <div class="col-row">
                                <input type="password" class="form-control text-center" placeholder="New Password" name="new_password0" id="new_password0" value="" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method='form_error' field='new_password0'}</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="new_password1">Confirm Password</label>
                            <div class="col-row">
                                <input type="password" class="form-control text-center" placeholder="Confirm New Password" name="new_password1" id="new_password1" value="" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method='form_error' field='new_password1'}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="current_password">Password</label>
                            <div class="col-row">
                                <input type="password" class="form-control text-center" placeholder="Password" name="current_password" id="current_password" value="" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method='form_error' field='current_password'}</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" name="change_password" value="Change Password" class="btn btn-primary" />
                                {url type="anchor" url="account" text="Cancel" attr='title="Cancel" class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>
                </form>
            </div></blockquote>
