              <div class="col-row">
                <blockquote class="blockquote text-center"><h2>Login</h2><hr/>
                {assign var="defaultMessage" value="Enter your details to continue: "}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}
                {form method="open" action="login" attr=['class'=>'form-horizontal', 'name' => 'loginForm']}
                    </div>
                     <fieldset>
                        <div class="form">
                           <div class="col-row">
                                <h5><label for="control-label col-row" for="user_name">Username</label></h5>
                                  <div class="col-row">
                                    <input type='text' class="form-control text-center" placeholder="Username" name='user_name' value="{form method="set_value" field="user_name"}" />
                                </div>
                            </div>
                            <div class="col-row text-warning">{form method="form_error" field="user_name"}</div>
                        </div><br/>

                        <div class="form">
                            <div class="col-row">
                                <h5><label for="control-label col-row" for="password">Password</label></h5>
                                <div class="col-row">
                                    <input type='password' class="form-control text-center" placeholder="Password" name='password' value='' autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-row text-warning">{form method="form_error" field="password"}</div>
                        </div><br/>

                       {if $display_captcha eq TRUE}<!-- Captcha -->
                        <div class="form">
                           <div class="col-row">
                           <h5><label class="control-label col-row" for="captcha_img">Captcha</label></h5>
                            <div class="col-row">
                                <p align="center">
                                {$captcha}
                                </p>
                            </div>
                        </div></div>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="captcha"></label>
                                <div class="col-row">
                                    <input type="text" class="form-control text-center" id="captcha" name="captcha" placeholder="Please verify that you are human"/>
                              
                            </div>
                            <div class="col-row text-warning">{form method="form_error" field="captcha"}</div>
                        </div></div>
                        {/if}<!-- /Captcha -->

                        <noscript><div style="display:none"><input type='hidden' name='js_disabled' value='1' /></div></noscript>

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type="submit" class="btn btn-success" value="Login" />
                                    {url type="anchor" url="register" text="Register" attr='title="Register" class="btn btn-primary"'}
                                 </p>
                             </div>
                         </div>
                </fieldset>
            </div></blockquote>
