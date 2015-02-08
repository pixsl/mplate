jQuery(document).ready(function($){
    var tabItems = $('.cd-tabs-navigation-traditional a'),
        tabContentWrapper = $('.cd-tabs-content-traditional');

    tabItems.on('click', function(event){
        event.preventDefault();
        var selectedItem = $(this);
        if( !selectedItem.hasClass('selected') ) {
            var selectedTab = selectedItem.data('content'),
                selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
                slectedContentHeight = selectedContent.innerHeight();

            tabItems.removeClass('selected');
            selectedItem.addClass('selected');
            selectedContent.addClass('selected').siblings('li').removeClass('selected');
            //animate tabContentWrapper height when content changes
            tabContentWrapper.animate({
                'height': slectedContentHeight
            }, 200);
        }
    });

    //hide the .cd-tabs::after element when tabbed navigation has scrolled to the end (mobile version)
    checkScrolling($('.cd-tabs-traditional nav'));
    $(window).on('resize', function(){
        checkScrolling($('.cd-tabs-traditional nav'));
        tabContentWrapper.css('height', 'auto');
    });
    $('.cd-tabs-traditional nav').on('scroll', function(){
        checkScrolling($(this));
    });

    function checkScrolling(tabs){
        var totalTabWidth = parseInt(tabs.children('.cd-tabs-navigation-traditional').width()),
            tabsViewport = parseInt(tabs.width());
        if( tabs.scrollLeft() >= totalTabWidth - tabsViewport) {
            tabs.parent('.cd-tabs-traditional').addClass('is-ended');
        } else {
            tabs.parent('.cd-tabs-traditional').removeClass('is-ended');
        }
    }
});