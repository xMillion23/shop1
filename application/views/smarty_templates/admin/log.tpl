            <div class="col-row" id="admin-dispute-form">
            <blockquote class="blockquote text-center">
            <div class="col-row">
                <h2>{url type="anchor" url="admin/logs" text="Back" attr='class="btn btn-danger"'}<br/>Log Record: {$log.id}</h2><hr/>
                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}
               <div class="form">
                    <div class="col-row">
                        <div class="col-row">Warning Level</div>
                        <div class="col-row">{$log.info_level|escape:"html":"UTF-8"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">Time</div>
                        <div class="col-row">{$log.time_f}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">By</div>
                        <div class="col-row">{$log.caller|escape:"html":"UTF-8"}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">Message</div>
                        <div class="col-row card bg-light card-body mb-3">{$log.message|escape:"html":"UTF-8"}</div>
                    </div>
                </div>
            </div></div></blockquote>
