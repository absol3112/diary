function init()
        {
            updateTime();
            window.setInterval(updateTime,5000);
        }
        function updateTime()
        {
            var messengerCount;

            $.ajax({                                      
              url : '<?php echo Yii::$app->request->baseUrl.'/admin/ajax/messengercount' ?>',

                    type : "get",
                    dataType:"text",
                    data : {
                         
                    },
                    success : function (result){
                         // alert(result);
                        // messengerCount = result.val();
                        $('#messengerCount').html(result);
                    }
            });
            // $("#messenger").replaceWith('<i class="fa fa-envelope fa-fw notification" data-badge="'+messengerCount+'"></i>');  
            
        }   