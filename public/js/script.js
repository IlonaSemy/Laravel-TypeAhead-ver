
/* global $this */ 

$('#sm-box').delay(3000).slideUp();

$('.add-to-cart').on('click', function () {

    var id = $(this).data('id');

    $.ajax({
        url: BASE_URL + "shop/add-to-cart",
        type: "GET",
        dataType: "html",
        data: {id: $(this).data('id')},
        success: function (data) {
            location.reload();
        }
    });

});



$('.update-cart').on('click', function () {

    $.ajax({
        url: BASE_URL + "shop/update-cart",
        type: "GET",
        dataType: "html",
        data: {id:$(this).data('id'),op:$(this).data('op')},
        success: function (data) { 
            location.reload();
        }
    });  
    
    });
    
    $('.remove-item').on('click',function(e){ 
        
        e.preventDefault();
        $.ajax({
        url: BASE_URL + "shop/remove-item",
        type: "GET",
        dataType: "html",
        data: {id:$(this).data('id')},
        success: function (data) { 
          location.reload();
        }
     
    });
}); 

$('.text-origin').on('keyup', function(){ 
    
   var res = $(this).val().trim().toLowerCase().replace(/\s/g, '-'); 
   $('.text-target').val(res);
});  

/*$(document).ready(function(){
    $('#searchbox').selectize({
        valueField: 'url',
        labelField: 'article',
        searchField: ['article'],
        maxOptions: 10,
        options: [],
        create: false,
        render: {
            option: function(item, escape) {
                return '<div><img src="'+ item.image +'">' +escape(item.article)+'</div>';
            }
        },
        optgroups: [
            {value: 'product', label: 'Products'},
            {value: 'categorie', label: 'Categories'}
        ],
        optgroupOrder: ['product','categorie'],
        load: function(query, callback) {
            if (!query.length) return callback();
            $.ajax({
                url: root+'/api/search',
                type: 'GET',
                dataType: 'json',
                data: {
                    q: query
                },
                error: function() {
                    callback();
                },
                success: function(res) {
                    callback(res.data);
                }
            });
        },
        onChange: function(){
            window.location = this.items[0];
        }
    });
}); */



