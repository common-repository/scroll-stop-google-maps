jQuery(document).ready(function($) {
    $('iframe[src*="//www.google.com"]').each(function() {
        var $this = $(this);
        $this.css({'display':'block'});
        $("<div class='googleMapWrap'><div class='googleMapOverlay'><p>Click to scroll</p></div></div>").insertBefore($this);
        $this.appendTo(".googleMapWrap");
    });

    $(".googleMapOverlay").click(function() {
    	$(this).hide();
    });

});
