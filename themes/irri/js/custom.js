function autocrop(sel,ev){
    if(ev=="change"){
        jQuery(sel).change(function(ev){
             inputel=this;
             term = jQuery(inputel).val();
             if(term.length > 127){
                term = term.substring(0,128);
                jQuery(inputel).val(term);    
             }
         });
    }
    if(ev=="keyup"){
        jQuery(sel).on('keyup', function (e) {
            inputel=this;
            if (e.keyCode === 13) {
                term = jQuery(inputel).val();
                if(term.length > 127){
                    term = term.substring(0,128);
                    jQuery(inputel).val(term);    
                }
            }
         });
    }
}

function loadGallery(page,id){
    jQuery(".gallery-sidebar li").removeClass("active");
    jQuery("#"+id).addClass("active");
    jQuery.get("https://www.rkbodisha.in/api/gallery/"+page,function(data){
                thumbs = data[0].thumbnail.split(",");
                images = data[0].medium_image.split(",");
                
                jQuery("#gallery").html("");
                jQuery("#gallery").append("<div class='fotorama' data-auto='false'></div>");
                for(i=0;i< thumbs.length;i++){ 
                    jQuery("#gallery div.fotorama").append('<a href="'+images[i]+'" data-thumb="'+thumbs[i]+'"></a>');
                }
                jQuery("#gallery div.fotorama").fotorama({
                  width: 1024,
                  maxwidth: '100%',
                  ratio: 16/9,
                  allowfullscreen: true,
                  nav: 'thumbs',
                  autoplay: true,
                  loop: true,
                  transition: 'crossfade',
                  fit: 'cover'
                });
            });
}
jQuery(document).ready(function (){
    jQuery('#horizontal-menu .menu-item:nth-child(6) .sub-nav .menu-item:nth-child(7)').click(
      function () {
        window.open('http://sarmap.ch:8080/qgiswebclient.html?map=/home/sarmapguest/QGIS-projects/India_Odisha/India_Odisha.qgs'); 
        return false;
      }
    );
    
});
jQuery(document).ready(function (){
    var value=jQuery(location).attr('href');
    //alert(value);
    if(value == 'https://www.rkbodisha.in/home' || value == 'https://www.rkbodisha.in/'){
        jQuery('head').append( '<title>Rice Based Cropping Systems Knowledge Bank (RKB) - Odisha</title>' );
        jQuery('head').append( '<meta name="description" content="RKB Odisha is a digital extension service for easy access to better crop management techniques, agricultural technologies, and knowledge archives.">' );
        jQuery('head').append( '<meta name="keywords" content="rice knowledge bank, advanced farming technologies, agriculture tech, new tech in agriculture, agricultural extension services, rice production, rice expert">' );
    }
    else if(value == 'https://www.rkbodisha.in/cropping-systems'){
        jQuery('head').append( '<title>Cropping Pattern and Cropping Systems in Odisha - RKB</title>' );
        jQuery('head').append( '<meta name="description" content="Cropping pattern and systems in Odisha across 10 agro-ecological zones covering types of practices like mono, mixed, sequence cropping. Check zone-wise maps">' );
        jQuery('head').append( '<meta name="keywords" content="cropping pattern in Odisha, cropping system, mixed cropping, mono cropping, types of cropping system, mixed farming meaning, types of multiple cropping">' );
    }
    else if(value == 'https://www.rkbodisha.in/rice'){
        jQuery('head').append( '<title>Rice in Odisha-Varieties, Ecosystems, Constraints in Cultivation</title>' );
        jQuery('head').append( '<meta name="description" content="Rice ecosystems in Odisha, crop mngt. & system of cultivation with production enhancement strategies. Chawal or rice varieties with information on constraints.">' );
        jQuery('head').append( '<meta name="keywords" content="rice, chawal, rice cultivation information, variety rice, system of cultivation, crop production and management">' );
    }
    else if(value == 'https://www.rkbodisha.in/pulses'){
        jQuery('head').append( '<title>Pulses in Odisha - Production, Productivity and Constraints</title>' );
        jQuery('head').append( '<meta name="description" content="Pulses grown in Odisha viz; green gram or mung dal, black gram or tur dal, etc. with information on production, productivity and constraints in cultivation.">' );
        jQuery('head').append( '<meta name="keywords" content="pulses in Odisha, black gram, green gram horse gram, pulse, mung dal, tur dal">' );
    }
    else if(value == 'https://www.rkbodisha.in/oil-seeds'){
        jQuery('head').append( '<title>Oil seeds in Odisha - Production, Productivity and Constraints</title>' );
        jQuery('head').append( '<meta name="description" content="Oil seeds grown in Odisha like, groundnut, sesame, mustard etc. with information on varieties, production, productivity and constraints in cultivation.">' );
        jQuery('head').append( '<meta name="keywords" content="oil seeds in Odisha, groundnut, mustard, sesame, groundnut varieties, sesame varieties, mustard variety, peanut cultivation">' );
    }
    else if(value == 'https://www.rkbodisha.in/tools'){
        jQuery('head').append( '<title>ICT Based Resources and Tools for Smart Agriculture - RKB</title>' );
        jQuery('head').append( '<meta name="description" content="ICT based tools developed using new technologies to help farming community for smart agriculture. Get access to Rice Doctor, SeedCast, RCM, RPMS, and CIS.">' );
        jQuery('head').append( '<meta name="keywords" content="ict tools used in agriculture, farming technology, agriculture technology, new technology in agriculture, digital farming, smart agriculture system, ict tools">' );
    }
    else if(value == 'https://www.rkbodisha.in/resources'){
        jQuery('head').append( '<title>Digital Agricultural Resources Archive – RKB Odisha</title>' );
        jQuery('head').append( '<meta name="description" content="A digital resource repository of fact sheets, manuals, videos, awareness materials, etc. for agriculture extension agents, farmers, students and researchers">' );
        jQuery('head').append( '<meta name="keywords" content="agriculture knowledge materials, fact sheet, agriculture training manuals, agriculture videos, farming videos, awareness materials">' );
    }
    else if(value == 'https://www.rkbodisha.in/gallery'){
        jQuery('head').append( '<title>Photo Gallery | Rice Based Cropping Systems Knowledge Bank</title>' );
        jQuery('head').append( '<meta name="description" content="See high quality agriculture images to experience & learn best farming practices in rice, pulses, and other crops. Visit awareness photos category for more.">' );
        jQuery('head').append( '<meta name="keywords" content="agriculture photo gallery, agriculture photos, agriculture images hd, natural farming images">' );
    }
    else if(value == 'https://www.rkbodisha.in/contact-us'){
        jQuery('head').append( '<title>Contact Us | Rice Based Cropping Systems Knowledge Bank</title>' );
        jQuery('head').append( '<meta name="description" content="Contact Rice Based Cropping Systems Knowledge Bank, Odisha for more information or fill the feedback form to send your comments, suggestions and questions.">' );
        jQuery('head').append( '<meta name="keywords" content=" rice knowledge bank, irri rice knowledge bank, knowledge bank feedback, contact rice knowledge bank, questions about rice">' );
    }
    else{
         jQuery('head').append( '<title>{{ head_title|safe_join(' | ') }}</title>' );
        jQuery('head').append( '<meta name="description" content="RKB Odisha is a digital extension service for easy access to better crop management techniques, agricultural technologies, and knowledge archives.">' );
        jQuery('head').append( '<meta name="keywords" content="rice knowledge bank, advanced farming technologies, agriculture tech, new tech in agriculture, agricultural extension services, rice production, rice expert">' );
    }
});
jQuery(document).ready(function(){
    if (window.location.href.indexOf('/or/')!=-1) {
        jQuery("#block-gobackblock a.button").text("ପୂର୍ବ ପୃଷ୍ଠା");
    }
    else{
        jQuery("#block-gobackblock a.button").text("Go Back");
    }
});
jQuery(document).ready(function() {
    var value = jQuery('.links .or a').text();
    jQuery('.links .or a').html("ଓଡ଼ିଆ");
    
    jQuery("#fb-form").submit(function(ev){
        ev.preventDefault();
        jQuery.post("https://www.rkbodisha.in/sendmail.php",jQuery('#fb-form').serialize(),function(data){
            if(data.status==1){
                jQuery('#fb-form').trigger("reset");
                jQuery("#feedbackpop").modal("toggle");
                alertify.alert('Thank you', 'Your feedback has been sent to us.');
            }else{
                alertify.alert('Feedback failure', 'We were unable to receive your feedback. Please try again after some time.');
            }
        });
    });
    
    jQuery("button.btn").addClass("btn-rice");
    
    elm = jQuery("ul.links").not(".pre_links,.toolbar-menu,.contextual-links");
    jQuery(elm).hide();
    
    jQuery("#block-languageswitcher ul").show();

    if(jQuery("#content-slider2").length==1){
      jQuery("#content-slider2").lightSlider({
          loop:true,
          item: 5,
          keyPress:true,
          auto:true,
          responsive : [
              {
                  breakpoint: 992,
                  settings: { // settings for width 480px to 800px
                      item: 4,
                      slideMove: 1,
                      slideMargin: 6
                  }
              },
              {    breakpoint: 684,
               settings: { 
                   item: 3,
                   slideMove: 1,
                   slideMargin: 6
               }
              },
              {    breakpoint: 500,
               settings: { 
                   item: 2,
                   slideMove: 1,
                   slideMargin: 6
               }
              },
              {
                  breakpoint: 321,
                  settings: {  // settings for width 0px to 480px
                      item: 1,
                      slideMove: 1
                  }
              }
          ]

      });
    }
     if(jQuery("#views-exposed-form-factsheets-page-1").length==1){
        
         autocrop("input[name='keywords']","change");
         autocrop("input[name='keywords']","keyup");
     }
    
    // if(elm.length==1){
    //     print_url = drupalSettings.path.currentPath+"/printable/print";
    //     pdf_url = drupalSettings.path.currentPath+"/printable/pdf";
        
    //     jQuery("ul.print-save-img li:eq(0) a").attr("href",print_url);
    //     jQuery("ul.print-save-img li:eq(1) a").attr("href",pdf_url);
    // }
        var url=""+window.location;
        if(url.match("/or")!=null){
            jQuery("a.logo img").attr("src","/sites/default/files/odia-logo.png");
            jQuery("#edit-keys").removeAttr("data-original-title");
        }
        var parts = window.location.pathname.split( '/' );
        var page = parts[parts.length-1];
      
        if(page=="gallery"){
            loadGallery("Seed and varieties","sav");    
        }
        jQuery("#sm-share-btn").click(function(){
            jQuery("#block-socialsimplesharer").fadeIn(); 
        });
        
        jQuery("#block-socialsimplesharer").mouseleave(function(){
             jQuery(this).delay(1500).fadeOut(); 
        });
        
     jQuery("<hr>").insertAfter(".audiofield>.audiofield-player:nth-child(3n)");
  });