<div class="copyLkBl">
    <span class="txt">&copy; 2023 {{siteName()}} Limited</span>
</div>
</div>
</section>


<div class="modalsScroll">
    <div class="modals table">
        <div class="middle tCell">
            <span class="closeModal">
                <span></span>
                <span></span>
            </span>
            <div class="blockMod" id="modal_error">
                <div class="in">
                    <div class="modalsContent">
                        <div class="grayBl">
                            <span class="iconCircle icon-plus"></span>
                            <span class="title">Error</span>
                            <div class="modalSend">
                                <ul class="txt" id="error-message" style="text-align: center;"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlayModal"></div>
</div>
@include('partials.notify')
<script>
    function show_error() {
        $(document).find('.error-summary ul').each(function() {
            if (!$(this).is(':empty')) {
                error = $(this).html();
                $(this).html('');
                $('#error-message').html(error);
                modalEventOpen('modal_error');
            }
        })
    }


    $(document).on("ajaxComplete", function() {
        show_error();
    });
    show_error();
</script>


</body>

</html>
