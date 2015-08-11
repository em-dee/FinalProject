$(document).ready(function() {
  
//flex-images on Works
    $('.flex-images').flexImages({
        rowHeight: 340
    });
    
 
//magnificPopup on Works
    $('.gallery').magnificPopup({
        items: [
        {
            src: 'images/image1.jpg'
        },
        {
            src: 'images/image2.jpg'
        },
        {
            src: 'images/image3.jpg'
        },              
        {
            src: 'images/video1.mp4',
            type: 'iframe' //overrides default type
        },
        {
            src: 'images/image4.jpg'
        },
        {
            src: 'images/image5.jpg'
        }               
        ],
        closeOnContentClick: true,
        gallery: {
            enabled: true,
            navigateByImgClick: true
        },
        type: 'image'
    });
    
//form validator
    $( function() {
        Validator.language= 'en';
    });       

});