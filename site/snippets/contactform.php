<div id="contact-form">
    <form method="POST" action="https://formspree.io/<?php echo $page->youremail() ?>">
        <label><?php echo $page->namelabel() ?> *<input type="text" name="name"
                                                        placeholder="<?php echo $page->nameplaceholder() ?>"
                                                        required></label>
        <label><?php echo $page->emaillabel() ?> *<input type="email" name="_replyto"
                                                         placeholder="<?php echo $page->emailplaceholder() ?>" required></label>
        <label><?php echo $page->subjectlabel() ?> *<input type="text" name="subject" placeholder="Subject"
                                                           required></label>
        <label><?php echo $page->messagelabel() ?> *<textarea type="text" rows="3" name="message"
                                                              placeholder="<?php echo $page->messageplaceholder() ?>"
                                                              required></textarea></label>

        <input type="text" name="_gotcha"/>
        <input type="hidden" name="_next" value="<?php echo page($page->successpage())->url() ?>"/>
        <input type="submit" value="<?php echo $page->submitlabel() ?>">
    </form>
</div>