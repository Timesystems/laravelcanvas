<script type="text/javascript">
    $(document).ready(function(){
        $(window).load(function(){
            function notify(message, type){
                $.growl({
                    message: message
                },{
                    type: type,
                    allow_dismiss: false,
                    label: 'Cancel',
                    className: 'btn-xs btn-inverse',
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    delay: 2500,
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    },
                    offset: {
                        x: 20,
                        y: 85
                    }
                });
            };

            setTimeout(function () {
                var message = 'Success! Profile information updated. ';
                notify(message, 'inverse');
            }, 150)
        });
    });
</script>