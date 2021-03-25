(function($){
    $('.Panier').click(function(event){
        event.preventDefault();
        $.get($(this).attr('href'),{},function(data){
            alert('Produit ajouté au panier');
        },'json')
        ;
        return false;
    });
})(jQuery);