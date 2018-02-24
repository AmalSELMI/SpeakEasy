
//activating download button
$("#call").on("click",function(){
  $("#download").removeClass("disabled");
  $("#SaveTags").removeClass("disabled");
})

//Adding tags
$("input[type='text']").keypress(function(e){
	if(e.which === 13||e.which===32){
		//grabbing tag text from input
		var val = $(this).val();
    var regex = /</;
    // if(regex.test(val)==false){
      $(this).val("");
  		//create a new li and add to ul
      var list = $("#detect_tags > ul");
  		var item = $('<li name="tag" class="btn btn-outline-success tagval"></li>').append('<span><i class="fas fa-times close"></i></span>')
      var tag = $('<span></span>');
      tag.text(val);
      tag.appendTo(item);
      item.appendTo(list);
      $("#tags").val('');


	}
});
//Click on X to delete Tag
$("#detect_tags > ul").on("click","span", function(e){
  $(this).parent().remove();
  e.stopPropagation();
});

//showing contact



$("#contact").on("click",function(){
  $("#card_contacts").toggleClass('hidden');
});
/////SOUND SPEECH///////
       var recognizing;
        var recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        reset();
        recognition.onend = reset();

        recognition.onresult = function (event) {
          for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
              textarea.value += event.results[i][0].transcript;
            }
          }
        }

        function reset() {
          recognizing = false;

        }

        function toggleStartStop() {
          if (recognizing) {
            recognition.stop();
            reset();
          } else {
            recognition.start();
            recognizing = true;
            call.removeClass("btn-sucess").addClass("btn-danger");

          }
        }

///Media query for service page//Contacts menu/////
$(window).on("load, resize", function() {
    var viewportWidth = $(window).width();
    if (viewportWidth < 768) {
            $("#card_contacts").addClass("hidden");
    }
});
$(window).on("load, resize", function() {
    var viewportWidth = $(window).width();
    if (viewportWidth > 768) {
            $("#card_contacts").removeClass("hidden");
    }
});
///////
$(function(){
    var video = $('video')[0];
    var canvas = $('canvas')[0];

    var getCameraAccess = function(){
        //request camera acces
        navigator.webkitGetUserMedia(
          {video: true, audio : true}, // Options
            function(localMediaStream) { // Success
                // create an object URL and assign it to the source of our video element
                video.src = window.webkitURL.createObjectURL(localMediaStream);
            },
            function(err) { // Failure
                console.log('getUserMedia failed: Code ' + err.code);
            }
        );
    };

    var takeSnapshot = function(){
        canvas.height = video.videoHeight;
        canvas.width = video.videoWidth;
        //add the same filter to our canvas
        canvas.style.webkitFilter = filter;
        canvas.getContext('2d').drawImage(video, 0, 0);
    };

    var addFilter = function(){

        var filters = [
            'blur(5px)',
            'grayscale(1)',
            'sepia(1)',
            'saturate(1)',
            'brightness(5)',
            'contrast(5)',
            'hue-rotate(180deg)',
            'invert(0.5)'
        ];

        //randomly select a filter
        filter = filters[Math.floor(Math.random() * filters.length)]

        //add the filter to our video element
        video.style.webkitFilter = filter;
    };

    // EVENTS

    // when the start button is clicked, take a snapshot
    $('#snapshot').on('click', function(){
        takeSnapshot();
    });

    // when the start button is clicked, take a snapshot
    $('#filter').on('click', function(){
        addFilter();
    });

     getCameraAccess();
});
