

  $(document).ready(function(){
      //Vegas Slider for landing Page
        $("#slider-vegas").vegas({

          delay: 9000,            //total time taken by one slide 
          transition: [ 'blur', 'zoomOut2', 'swirlLeft' ],
          animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ],
          slide: 1,
          shuffle: true,
            slides: [
                { src: "./graphics/home-image.jpg" },
                { src: "./graphics/rewiesphoto2.jpg" },
                { src: "./graphics/rewiesphoto5.jpg" }
            ]
        });
      });


  