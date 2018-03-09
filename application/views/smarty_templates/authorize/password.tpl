                <div class="col-row">
                <blockquote class="blockquote text-center">
                <div class="col-row">
                <h2>Authorize Request</h2><hr/>

                {assign var="defaultMessage" value="As this page has heightened security, you must enter your login details to continue."}
                <div class="text-warning">{returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}</div>

                {form method="open" action="authorize" attr=['class'=>'form-horizontal', 'name' => 'authorizeForm']}

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="password">Password</label>
                            <div class="col-row">
                                <input type="password" class="form-control text-center" placeholder="Password" name="password" value="" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="password"}</div>
                    </div><br/>

                    <!-- Captcha -->
                    <div class="form">
                        <label class="control-label col-row" for="captcha_img">Captcha</label>
                        <div class="col-row">
                            <p align="center">
                                {$captcha}
                            </p>
                        </div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="captcha"></label>
                            <div class="col-row">
                                <input type="text" class="form-control text-center" placeholder="Please verify that you are human" id="captcha" name="captcha" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="captcha"}</div>
                    </div>
                    <!-- /Captcha -->

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" class="btn btn-primary" value="Continue" />
                                {url type="anchor" url="account" text="Cancel" attr='class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>

                </form>
            </div></div></blockquote>
