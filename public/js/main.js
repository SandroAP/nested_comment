$(document).ready(function () {
    $(".comment-container").delegate(".reply", "click", function (e) {
        e.preventDefault();
        var well = $(this).parent();
        var aid = $(this).attr("aid");
        var token = $(this).attr('token');
        var form = '<form method="POST" action="comments">\n\
                        <input type="hidden" name="_token" value="' + token + '">\n\
                        <input type="hidden" name="article_id" value="' + aid + '">\n\
                        <div class="form-group">\n\
                            <input type="text" class="form-control" name="name" placeholder="Name" required>\n\
                        </div>\n\
                        <div class="form-group">\n\
                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>\n\
                        </div>\n\
                        <div class="form-group">\n\
                            <input type="submit" class="btn btn-success">\n\
                        </div>\n\
                    </form>';
        well.find(".reply-form").append(form);
    });

    $(".comment-container").delegate(".reply-to-reply", "click", function (e) {
        e.preventDefault();
        var well = $(this).parent().parent();
        var aid = $(this).attr("aid");
        var cid = $(this).attr("cid");
        var lvl = $(this).attr("lvl");
        var token = $(this).attr("token")
        var form = '<form method="post" action="comments">\n\
                        <input type="hidden" name="_token" value="' + token + '">\n\
                        <input type="hidden" name="article_id" value="' + aid + '">\n\
                        <input type="hidden" name="comment_id" value="' + cid + '">\n\
                        <input type="hidden" name="level" value="' + lvl + '">\n\
                        <div class="form-group">\n\
                            <input type="text" class="form-control" name="name" placeholder="Name" required>\n\
                        </div>\n\
                        <div class="form-group">\n\
                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>\n\
                        </div>\n\
                        <div class="form-group">\n\
                            <input type="submit" class="btn btn-success">\n\
                        </div>\n\
                    </form>';

        well.find(".reply-to-reply-form").append(form);
    });
}); 