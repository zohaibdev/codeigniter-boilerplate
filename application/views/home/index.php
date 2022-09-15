<section class="py-5">
    <div class="container">
        <form id="create-user-modal" action="<?php echo base_url('quote/insert') ?>">
            <div class="row gy-3">
                <div class="col-md-4">
                    <div class="field-block">
                        <input type="text" name="name" placeholder="Enter your name" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="field-block">
                        <input type="email" name="email" placeholder="Enter your email address" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="field-block">
                        <input type="tel" name="phone" placeholder="Enter your phone no" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="field-block">
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="action">
                        <button type="button" class="w-100 submit-qoute-btn">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>