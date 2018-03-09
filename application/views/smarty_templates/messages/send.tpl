             <div class="col-row" id="send-message">
             <blockquote class="blockquote text-center"><h2>Send Message</h2><hr/>
             <div class="col-row">

                {assign var="defaultMessage" value="Enter your message below: "}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action=$action_uri attr=['class'=>'form-horizontal', 'name' => 'sendMessageForm']}
                       <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="recipient">Recipient</label>
                            <div class="col-row">
                                <input type='text' class="form-control text-center" id='recipient' name='recipient' value="{$to_name|escape:"html":"UTF-8"}" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="recipient"}</div>
                    </div>

                    <br/><div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="subject">Subject</label>
                            <div class="col-row">
                                <input type='text' class="form-control text-center" id='subject' name='subject' value="{if isset($subject) == TRUE}{$subject|escape:"html":"UTF-8"}{/if}" />
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="subject"}</div>
                    </div>

                    <br/><div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="message">Message</label>
                            <div class="col-row">
                                <textarea name="message" class="form-control" id='message' rows='6'>{form method="set_value" field="message"}</textarea>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="message"}</div>
                    </div>


                    <br/><div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="delete_on_read">Delete After Reading?</label>
                            <div class="col-row">
                                <div class="checkbox-inline">
                                    <label class="checkbox inline">
                                        <input type='checkbox' id="delete_on_read" name='delete_on_read' value='1' />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="delete_on_read"}</div>
                    </div>

                    <input type='hidden' name='public_key' style='display:none;' value='{$public_key|escape:"html":"UTF-8"}'/>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                                <input type='submit' class="btn btn-success" value="Send" onclick='messageEncrypt()' />
                                {url type="anchor" url="inbox" text="Cancel" attr='class="btn btn-danger"'}
                       </div>
                    </div>
                </form>
            </div></div></blockquote>
