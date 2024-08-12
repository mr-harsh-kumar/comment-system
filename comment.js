$(document).ready(function () {

    // Keep track of the currently open reply section
    var currentOpenReplySection = null;


    // Function to load comments
    function load_comment() {
        var data = {
            'load_comment': true
        };
        $.ajax({
            type: "POST",
            url: "code.php",
            data: data,
            success: function (response) {
                $("#comment-container").html("");
                try {
                    // The PHP script echoes the JSON-encoded data, which becomes the response to the AJAX request.
                    response = JSON.parse(response);
                    console.log(response);
                } catch (error) {
                    console.error("Error parsing JSON response: " + error);
                    return;
                }
                // var abcd = JSON.stringify(response);
                // console.log(abcd);

                $.each(response, function (key, value) {
                    console.log(value.id);
                    $('#comment-container').append(
                        '<hr><div class="reply-box" data-cmt-id=" ' + value.id + ' ">' +
                        '<h6>' + value.username + ' : ' + value.commented_on + '</h6>' +
                        '<p>' + value.msg + '</p>' +
                        '<button class="reply_btn">Reply</button>   ' +
                        '<button class="view_reply_btn">View Replies</button>' +
                        '<div class="reply_section"></div>' +
                        '</div>'
                    );
                });
            }
        });
    }

    // Initial load of comments
    load_comment();

    function view_all_replies(){
    // Click event for "View Replies" button
    $(document).on('click', '.view_reply_btn', function (e) {
        e.preventDefault();
        var thisClicked = $(this);
        var cmt_id = thisClicked.closest('.reply-box').data('cmt-id');
        
        $.ajax({
            type: "POST",
            url: "code.php",
            data: {
                "cmt_id": cmt_id,
                "view_reply_true": true,
            },
            success: function (response) {
                var replySection = thisClicked.closest('.reply-box').find('.reply_section');
                replySection.html("");
               
                console.log(response);

                var trimmedResponse = response.trim();
                var parsedResponse = JSON.parse(trimmedResponse);
                console.log(parsedResponse);
                $.each(parsedResponse, function (key, reply) {
                    console.log(reply);
                    replySection.append(
                        '<div class="sub_reply_box"><br>' +
                        '<input type="hidden" class="get_user_name" value=" ' + reply.username + '">' +
                        '   <h6>' + reply.username + ' : ' + reply.commented_on + '</h6>' +
                        '   <p>' + reply.reply_msg + '</p>' +
                        '<button class="sub_reply_btn">Reply</button>' +
                        '<div class="sub_reply_section"></div><hr>' +
                        '</div>'
                    );
                    // loadSubReplies(cmt_id, reply.username, replySection.find('.sub_reply_section:last')); // Pass parameters
                });
            }
        });
    });
}

    view_all_replies();



    // Function to load sub-replies
    function loadSubReplies(cmt_id, username, subReplySection) {
        $.ajax({
            type: "POST",
            url: "code.php",
            data: {
                "cmt_id": cmt_id,
                "view_sub_replies": true,
            },
            success: function (response) {
                subReplySection.html("");

                response = JSON.parse(response);
                $.each(response, function (key, subReply) {
                    subReplySection.append(
                        '<div class="sub_reply_box"><br>' +
                        '<input type="hidden" class="get_user_name" value="' + subReply.username + '"></input>' +
                        '<h6>' + subReply.username + ' : ' + subReply.commented_on + '</h6>' +
                        '<p>' + subReply.reply_msg + '</p>' +
                        '</div>'
                    );
                });
            }
        });
    }

    // Click event for ".sub_reply_btn" using event delegation
    $(document).on('click', '.sub_reply_btn', function (e) {
        e.preventDefault();
        var thisClicked = $(this);
        var username = thisClicked.closest(".reply-box").find('.get_user_name').val();

        var subReplySection = thisClicked.closest('.sub_reply_box').find('.sub_reply_section');

        subReplySection.html("");

        subReplySection.append(
            '<div><br>' +
            '<div class="prevent_sub_reply"></div>' +
            '<input type="text" value="@' + username + ' " class="sub_reply_msg" placeholder="Your Reply" >' +
            '</div>' +
            '<div>' +
            '    <button class="sub_reply_add_btn">Reply</button>' +
            '    <button class="sub_reply_cancel_btn">Cancel</button>' +
            '</div>'
        );
    });

    $(document).on('click', '.sub_reply_cancel_btn', function (e) {
        e.preventDefault();
        $(this).closest('.sub_reply_box').find('.sub_reply_section').html("");
    });



    $(document).on('click', '.sub_reply_add_btn', function (e) {
        e.preventDefault();

        var thisClicked = $(this);
        var cmt_id = thisClicked.closest('.reply-box').data('cmt-id');

        var reply = thisClicked.closest('.sub_reply_box').find('.sub_reply_msg').val();
        var username = thisClicked.closest(".reply-box").find('.get_user_name').val();
        console.log(reply);
        console.log(cmt_id);
        if ($.trim(reply).length == 0 || $.trim(reply) == '@' + username) {
            $('.prevent_sub_reply').html("Please enter reply");
            return;
          
        }
        
        var data = {
            'cmt_id': cmt_id,
            'reply_msg': reply,
            'add_sub_replies': true
        };

        $.ajax({
            type: 'POST',
            url: 'code.php',
            data: data,
            success: function (response) {
                $('.sub_reply_section').html("");
                view_all_replies()
                // $('.sub_reply_section').html(view_all_replies());
            }
        });
    });

    


    $(document).on('click', '.reply_btn', function (e) {
        e.preventDefault();
        var thisClicked = $(this);
        var cmt_id = thisClicked.closest('.reply-box').data('cmt-id');

        if (currentOpenReplySection) {
            currentOpenReplySection.html("");
        }

        currentOpenReplySection = thisClicked.closest('.reply-box').find('.reply_section');

        currentOpenReplySection.html(
            '<br>' +
            '<div id="error-status2" ></div>' +
            '<input type="text" class="reply_msg" placeholder="Reply">' +
            '<div class="reply-cancel">' +
            '<button class="reply_add_btn">Reply</button>  ' +
            '<button class="reply_cancel_btn">Cancel</button>' +
            '</div>'
        );
    });

    $(document).on('click', '.reply_cancel_btn', function (e) {
        e.preventDefault();
        if (currentOpenReplySection) {
            currentOpenReplySection.html("");
            currentOpenReplySection = null;
        }
    });

    $(document).off('click', '.reply_add_btn').on('click', '.reply_add_btn', function (e) {
        e.preventDefault();
        var thisClicked = $(this);
        var cmt_id = thisClicked.closest('.reply-box').data('cmt-id');

        var reply = thisClicked.closest('.reply-box').find('.reply_msg').val();
        if ($.trim(reply).length == 0) {
            var error_msg = "Please type a comment";
            $("#error-status2").html(error_msg);
              return;
            
        }

        thisClicked.prop('disabled', true);
        var data = {
            'cmt_id': cmt_id,
            'reply_msg': reply,
            'add_reply': true
        };
        $.ajax({
            type: 'POST',
            url: 'code.php',
            data: data,
            success: function (response) {
                thisClicked.prop('disabled', false);
                console.log(response);
                if (currentOpenReplySection) {
                    currentOpenReplySection.html("");
                    currentOpenReplySection = null;
                }
            }
        });
    });

    $('#add-comment-btn').click(function (e) {
        e.preventDefault();
        var msg = $("#comment-textbox").val();
        if ($.trim(msg).length == 0) {
            var error_msg = "Please type a comment";
            $("#error-status").html(error_msg).slideDown();
            setTimeout(function() {
                $("#error-status").slideUp();
            }, 4000);
        } else {
            var error_msg = "";
            $("#error-status").html(error_msg);
        }

        if (error_msg != "") {
            return false;
        } else {
            var data = {
                'add_comment': true,
                'msg': msg
            };

            $.ajax({
                type: "POST",
                url: "code.php",
                data: data,
                success: function (response) {
                    $("#comment-textbox").val("");
                    load_comment();
                }
            });
        }
    });

});
