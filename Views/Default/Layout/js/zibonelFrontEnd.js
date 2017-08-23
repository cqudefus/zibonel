var zibonel = {};

zibonel.initNewView = function() {
    var newsLink = $('[data-news-link]').data('news-link');
    if(newsLink.trim()!= "") {
        $.ajax({
            url:'/news/viewed/',
            type:"POST",
            data: {
               link: newsLink
            },
            success:function(data){
               //console.log("view updated"+ data);
            },
            error:function(){
                console.log("view could not be updated");
            }
        });
    }
};

zibonel.initLiveProgram = function() {
    $.ajax({
        url:'/pages/live_program',
        type:"GET",
        success:function(data){
            $('.live-wrapper').html(data);
        },
        error:function(){
            console.log("error");
        }
    });
};

zibonel.initEqualizer = function() {

    var height = 0;
    var selector = $('[data-equalize-height]');
    var selectorId = selector.data('equalize-height');

    selector.each(function() {
        if($(this).height() > height && selectorId == $(this).data('equalize-height')) {
            height = $(this).height();
        }
    });

    selector.each(function() {
        if(selectorId == $(this).data('equalize-height')) {
            $(this).css('height', height + 'px');
        }
    });

};

zibonel.initLoadComment = function() {
    var newsID = $('[data-news-id]').data('news-id');
    if(newsID) {
        $.ajax({
            url:'/news_comments/load/'+newsID,
            type:"GET",
            success:function(data){
                $('[data-news-id]').html(data)
            },
            error:function(){
                console.log("view could not be updated");
            }
        });
    }
};

zibonel.initAddComment = function() {

    var commentBtn = $('#btn-comment');


    var com_ref_user = $('#com_ref_user').val();
    var com_ref_news = $('#com_ref_news').val();

    commentBtn.on('click', function() {

        var comment = $('#user-comment').val();

        if(com_ref_news.trim() != "" && com_ref_user.trim() != "" && comment.trim() != "") {

            $.ajax({
                url:'/news_comments/add/',
                type:"POST",
                data: {
                    com_ref_news: com_ref_news,
                    com_ref_user: com_ref_user,
                    comment: comment
                },
                success:function(data){
                    //$('[data-news-id]').html(data)
                    alert(data);
                },
                error:function(){
                    //  console.log("view could not be updated");
                }
            });

        } else {


        }

    });

};