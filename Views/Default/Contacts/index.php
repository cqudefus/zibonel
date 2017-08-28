<?php $data = $template_data['contacts'][0] ?>

<div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="/Views/Default/Assets/News/young-radio-announcer.jpg" class="img-rounded mb-30"alt="">
                    <address>
                        <strong>Address:</strong><br>
                        <?=$data["street_number"]?>, <?=$data["street_name"]?>, <?=$data["suburb_name"]?>
                        <br/>Cape Town <br/><br/>
                        <strong>Phone:</strong><br>s
                        <?=$data["tell"]?>,<?=$data["cellphone"]?>
                        <br><br>
                        <strong>E-mail:</strong><br>
                        <a href="#"><?=$data["email"]?></a><br>
                    </address>
                </div>
                <div class="col-lg-8 col-lg-push-1 col-md-9">
                    <h4>Would you like to chat to us ?.</h4>
                    <form class="contact-form validate-form" id="contact-form" method="POST"
                          data-message-error="Opps... Something went wrong - please try again later"
                          data-message-success="Thank you form your message! We will answer within 24 hours."
                        >
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <input name="email" id="email" type="text" class="form-control" placeholder="E-mail address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <button type="submit" class="btn btn-filled btn-submit btn-block"><span>Send it <i class="i-after ti-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</div>

<script>
	$app.initList(); 
</script>

