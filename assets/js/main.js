$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex === 1 ) {
                $('.wizard > .steps ul').addClass('step-2');
            } else {
                $('.wizard > .steps ul').removeClass('step-2');
            }
            if ( newIndex === 2 ) {
                $('.wizard > .steps ul').addClass('step-3');
            } else {
                $('.wizard > .steps ul').removeClass('step-3');
            }
            if ( newIndex === 3 ) {
                $('.wizard > .steps ul').addClass('step-4');
            } else {
                $('.wizard > .steps ul').removeClass('step-4');
            }
            if ( newIndex === 4 ) {
                $('.wizard > .steps ul').addClass('step-5');
            } else {
                $('.wizard > .steps ul').removeClass('step-5');
            }
            if ( newIndex === 5 ) {
                $('.wizard > .steps ul').addClass('step-6');
            } else {
                $('.wizard > .steps ul').removeClass('step-6');
            }
            if ( newIndex === 6 ) {
                $('.wizard > .steps ul').addClass('step-7');
            } else {
                $('.wizard > .steps ul').removeClass('step-7');
            }
            if ( newIndex === 7 ) {
                $('.wizard > .steps ul').addClass('step-8');
            } else {
                $('.wizard > .steps ul').removeClass('step-8');
            }
            if ( newIndex === 8 ) {
                $('.wizard > .steps ul').addClass('step-9');
            } else {
                $('.wizard > .steps ul').removeClass('step-9');
            }
            if ( newIndex === 9 ) {
                $('.wizard > .steps ul').addClass('step-10');
            } else {
                $('.wizard > .steps ul').removeClass('step-10');
            }
            return true; 
        },
        labels: {
            finish: "Simpan",
            next: "Continue",
            previous: "Back"
        }
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })

	/*
    $('#submit_crud').click(function(){

		if($('#daft_nama').val() === ''){
			$('.wizard > .steps ul').addClass('step-1');
			$('.wizard > .steps ul').removeClass('step-10');
			$("#wizard").steps('previous');
			$("#wizard").steps('previous');
			$("#wizard").steps('previous');
			$("#wizard").steps('previous');
			$("#wizard").steps('previous');
			$("#wizard").steps('previous');
			$("#wizard").steps('previous');
			$("#wizard").steps('previous');
			$("#wizard").steps('previous');		
		}


		return false;
    })
	*/
})
